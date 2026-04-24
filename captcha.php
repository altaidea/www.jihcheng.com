<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

ob_start();
session_start();
date_default_timezone_set('Asia/Taipei');

// --- [防止連點核心 3：後端攔截] ---
$min_interval = 10; // 設定最小發送間隔（秒），建議 10-30 秒
if (isset($_SESSION['last_submit_time'])) {
    $time_diff = time() - $_SESSION['last_submit_time'];
    if ($time_diff < $min_interval) {
        // 如果間隔太短，直接彈窗並退回
        echo '<script>alert("Sending too fast, please wait ' . ($min_interval - $time_diff) . ' seconds."); history.go(-1);</script>';
        exit;
    }
}

// 0. 建議引入 config 取得環境變數 (路徑請依實際位置調整)
require_once __DIR__ . '/config.php'; 

// 1. 取得語系：優先從表單 POST 過來的隱藏欄位拿
// $current_lang = $_POST['lang'] ?? $_GET['lang'] ?? $_SESSION['lang'] ?? 'en';
$current_lang = $_POST['lang'] ?? $_SESSION['lang'] ?? 'en';
// 將此語系同步給後續紀錄使用
$contact_lang = $current_lang;

// 2. 處理返回路徑
// 確保 $langMapping 存在 (對應關係：zh -> zh-TW, en -> en)
if (isset($langMapping)) {
    $displayLang = $langMapping[$current_lang] ?? $current_lang;
} else {
    // 備援：若 config 沒載入成功，手動判斷常用語系
    $displayLang = ($current_lang === 'zh') ? 'zh-TW' : $current_lang;
}

// 3. 建立最終跳轉 URL
// 檢查 $basePath 是否被定義，若無則設為空字串避免路徑破掉
$finalBasePath = isset($basePath) ? rtrim($basePath, '/') : '';
$redirect_url = $finalBasePath . '/' . $displayLang . '/contact.html';

// 1. 載入核心檔案
require_once __DIR__ . '/phpMailer/src/Exception.php';
require_once __DIR__ . '/phpMailer/src/PHPMailer.php';
require_once __DIR__ . '/phpMailer/src/SMTP.php';

// === 設定 Log 與路徑 ===
$logFile = __DIR__ . '/web-admin/data/form_submission.log';
function logMessage($message) {
    global $logFile;
    $timestamp = date('Y-m-d H:i:s');
    @file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND | LOCK_EX);
}

$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'zh';
$lang_path = ($lang == 'zh') ? "/contact" : "/" . $lang . "/contact";
$contact_lang = isset($_GET['lang']) ? $_GET['lang'] : $lang;

// === 2. 安全驗證 (CSRF, Honeypot, 頻率限制) ===

if (empty($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    logMessage('❌ CSRF 驗證失敗');
    echo '<script>alert("Security Token Invalid."); window.location.href="' . $lang_path . '";</script>';
    exit;
}

if (!empty($_POST['website_url'])) {
    logMessage("❌ 捕獲機器人 (Honeypot)");
    exit("Access denied."); 
}

if (isset($_SESSION['last_submit_time']) && (time() - $_SESSION['last_submit_time'] < 5)) {
    echo '<script>alert("Sending too fast, please wait."); history.go(-1);</script>';
    exit;
}

// === 3. Google reCAPTCHA v3 驗證 ===
$secretKey = '6LepoHUUAAAAAJ_yBEpIDCIeIci7Oys3V7hVzve8';
$captcha = $_POST['recaptcha_response'] ?? '';

// 建議使用更安全的方式請求驗證
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $captcha;
$responseKeys = json_decode(@file_get_contents($url), true);
$recaptcha_score = $responseKeys['score'] ?? 0;

// if (isset($responseKeys['success']) && $responseKeys['success'] && $recaptcha_score >= 0.7) {
if (true) {

    // === 4. 同步前端欄位資料與清洗 ===
    $c_subject = htmlspecialchars(trim($_POST['contact_subject'] ?? ''));
    $c_country = htmlspecialchars(trim($_POST['contact_country'] ?? ''));
    $c_name    = htmlspecialchars(trim($_POST['contact_name'] ?? ''));
    $c_job     = htmlspecialchars(trim($_POST['contact_job'] ?? ''));
    $c_company = htmlspecialchars(trim($_POST['contact_company_name'] ?? ''));
    $c_address = htmlspecialchars(trim($_POST['contact_address'] ?? ''));
    $c_tel     = htmlspecialchars(trim($_POST['contact_tel'] ?? ''));
    $c_email   = filter_var(trim($_POST['contact_email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $c_content = htmlspecialchars(trim($_POST['contact_content'] ?? ''));

    if (!$c_email || empty($c_name) || empty($c_content)) {
        echo '<script>alert("Please fill in all required fields."); history.go(-1);</script>';
        exit;
    }

    // === 5. 郵件發送 (含 DKIM) ===
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'allmaedm.com';
        $mail->SMTPAuth   = false; 
        // $mail->Username   = 'noreply@jihcheng.com';
        // $mail->Password   = '$c$SEOCw]easmJ]!';
        
        // 測試 ----------------------------------------------------
        $Username = 'noreply@wealthy-hill.com.tw'; // 信箱使用者名稱
        $Password = 'D~-omIS1+i(^8sLR'; // 信箱密碼

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet    = 'utf-8';
        $mail->XMailer    = ' '; 

        $mail->SMTPOptions = array(
            'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true)
        );

        // $mail->setFrom('noreply@jihcheng.com', '紀正機械有限公司');
       
        
        // 測試 ----------------------------------------------------
        // $mail->setFrom('noreply@wealthy-hill.com.tw', '威竑（TEST)');
        $mail->setFrom('noreply@wealthy-hill.com.tw', '紀正機械有限公司');

        $mail->addAddress('peteryustudio@gmail.com'); 
        $mail->addReplyTo($c_email, $c_name);

        // DKIM 設置
        $mail->DKIM_domain     = 'jihcheng.com'; // 主網域
        $mail->DKIM_selector   = 'default';
        $mail->DKIM_private    = __DIR__ . '/user/jihcheng_config_202603.dat'; // 路徑與檔名
        $mail->DKIM_identity   = $mail->From;
        $mail->DKIM_copy_header = false;

        $mail->Subject = '=?UTF-8?B?' . base64_encode('網頁詢問函：' . $c_name . ' - ' . $c_company) . '?=';
        $mail->isHTML(true);

        // 信件圖片設置
        // 1. 先確認圖片檔案是否存在
        $logoPath = __DIR__ . '/assets/img/email-logo.webp'; // 請確認相對路徑是否正確

        if (file_exists($logoPath)) {
            // 2. 內嵌圖片 (識別碼設為 logo_cid)
            $mail->addEmbeddedImage($logoPath, 'logo_cid');
            $imgSrc = 'cid:logo_cid';
        } else {
            // 備援方案：如果找不到本地檔案，改用絕對路徑網址
            $imgSrc = 'https://www.jihcheng.com/email-logo.webp';
            logMessage("⚠️ 警告：找不到內嵌圖片檔案，已改用網址連結");
        }

        $mail->Body = "
        <html><head><meta charset='utf-8'><style>
            body { font-family: 'PingFang TC', 'Microsoft JhengHei', sans-serif; color: #1a1a1a; }
            .container { max-width: 650px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; }
            .header { text-align: center; border-bottom: 2px solid #2c3e50; padding-bottom: 15px; margin-bottom: 20px; }
            .info-table { width: 100%; border-collapse: collapse; }
            .info-table th { width: 130px; text-align: left; color: #888; padding: 10px; border-bottom: 1px solid #eee; font-weight: normal; }
            .info-table td { padding: 10px; border-bottom: 1px solid #eee; }
            .msg-box { background: #f9f9f9; padding: 20px; margin-top: 15px; border-radius: 4px; white-space: pre-wrap; }
        </style></head>
        <body><div class='container'>
            <div class='header'><img src='{$imgSrc}' width='100%'></div>
            <table class='info-table'>
                <tr><th>諮詢主旨</th><td>{$c_subject}</td></tr>
                <tr><th>國家/地區</th><td>{$c_country}</td></tr>
                <tr><th>客戶姓名</th><td>{$c_name}</td></tr>
                <tr><th>公司名稱</th><td>{$c_company}</td></tr>
                <tr><th>公司地址</th><td>{$c_address}</td></tr>
                <tr><th>連絡電話</th><td>{$c_tel}</td></tr>
                <tr><th>電子信箱</th><td><a href='mailto:{$c_email}'>{$c_email}</a></td></tr>
            </table>
            <div style='margin-top:20px; color:#888; font-size:14px;'>詢問內容詳情：</div>
            <div class='msg-box'>" . nl2br($c_content) . "</div>
            <div style='text-align:center; margin-top:30px; font-size:12px; color:#aaa;'>本信件由紀正機械有限公司官網系統自動發送</div>
        </div></body></html>";

        // === 6. 寄送郵件 ===
        // --- [發送成功後更新時間戳記] ---
        if ($mail->send()) {
            // === 防連點
            $_SESSION['last_submit_time'] = time();

            // === 寫入 JSON 紀錄 === START
            $recordFile = __DIR__ . '/web-admin/data/contact_records.json';
            $backupFile = __DIR__ . '/web-admin/data/contact_eternal_backup.json';
            $shadowBackup = __DIR__ . '/web-admin/data/eternal_archive.log';

            $record = array(
                'datetime' => date('Y-m-d H:i:s') . ' (UTC+8)',
                'ip' => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '',
                'subject' => trim($c_subject),
                'country' => trim($c_country),
                'name' => trim($c_name),
                'job' => trim($c_job),
                'company' => trim($c_company),
                'address' => trim($c_address),
                'tel' => trim($c_tel),
                'email' => trim($c_email),
                'content' => trim($c_content),
                'lang' => $current_lang,
                'mail_status' => 'sent'
            );

            // --- 處理營運檔 ---
            $data = array();
            if (file_exists($recordFile)) {
                $json = file_get_contents($recordFile);
                $data = json_decode($json, true);
                if (!is_array($data)) $data = array();
            }
            $data[] = $record;

            // --- 處理永久備份檔 ---
            $backupData = array();
            if (file_exists($backupFile)) {
                $backupData = json_decode(file_get_contents($backupFile), true);
                if (!is_array($backupData)) $backupData = array();
            }
            $backupData[] = $record; 

            // --- 執行寫入動作 (全數加上 LOCK_EX) ---
            file_put_contents($backupFile, json_encode($backupData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT), LOCK_EX);
            file_put_contents($recordFile, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT), LOCK_EX);

            // --- 產生影子日誌 (強化換行過濾) ---
            $archiveLine = date('[Y-m-d H:i:s]') . " | IP: {$record['ip']} | Email: {$record['email']} | Content: " . str_replace(array("\r", "\n"), " ", $record['content']) . "\n";
            file_put_contents($shadowBackup, $archiveLine, FILE_APPEND | LOCK_EX);
            // === 寫入 JSON 紀錄 === END

            //             logMessage("✅ 發送成功 (Score: $recaptcha_score)");
            //             echo '<script>alert("Success! We will contact you soon."); window.location.href="' . $lang_path . '";</script>';
            //         }
            //     } catch (Exception $e) {
            //         logMessage('❌ 失敗: ' . $mail->ErrorInfo);
            //         echo '<script>alert("Failed to send, please try again later."); history.go(-1);</script>';
            //     }
            // } else {
            //     logMessage("❌ 驗證分數低: $recaptcha_score");
            //     echo '<script>alert("Security verification failed. Please refresh."); window.location.href="' . $lang_path . '";</script>';
            // }

            
            // logMessage("✅ 發送成功 (Score: $recaptcha_score)");

            // echo '<script>alert("Success! We will contact you soon."); window.location.href="' . $lang_path . '";</script>';
            // echo '<script>alert("Success! We will contact you soon.");</script>';
            // header('Refresh: 1; URL=' . $contact_lang . '/contact');
            // 使用 JavaScript 跳轉以確保 alert 能被看見，或使用 Refresh

            // 強制清除所有緩衝，確保跳轉發生
            // ob_end_clean(); 
            // header("Location: " . $redirect_url);

            // 測試是否有正確送出語系
            // $lang = $_POST['lang'] ?? '未傳送';
            // logMessage("✅ 發送成功 (Score: $recaptcha_score) | 語系: $lang");
            // echo <script> alert("Success! We will contact you soon."); window.location.href = "' . $redirect_url . '"; </script>';
            // alert("Success! (Language: ' . $lang . ') We will contact you soon.");

            echo '<script>
                    alert("Success! We will contact you soon.");
                    window.location.href = "' . $redirect_url . '";
                  </script>';
            exit;
          }
      } catch (Exception $e) {
          logMessage('❌ 失敗: ' . $mail->ErrorInfo);
          // echo '<script>alert("Failed to send, please try again later."); history.go(-1);</script>';
          // echo '<script>alert("Failed to send, please try again later.");</script>';
          // header('Refresh: 2; URL=' . $contact_lang . '/contact');
          echo '<script>
                  alert("Failed to send, please try again later.");
                  window.location.href = "' . $redirect_url . '";
                </script>';
          exit;
      }
  } else {
      logMessage("❌ 驗證分數低: $recaptcha_score");
      // echo '<script>alert("Security verification failed. Please refresh."); window.location.href="' . $lang_path . '";</script>';
      // echo '<script>alert("Security verification failed. Please refresh.");</script>';
      // header('Refresh: 2; URL=' . $contact_lang . '/contact');
      echo '<script>
              alert("Security verification failed. Please refresh.");
              window.location.href = "' . $redirect_url . '";
            </script>';
      exit;
  }
?>