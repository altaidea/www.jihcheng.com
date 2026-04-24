<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
date_default_timezone_set('Asia/Taipei');

// ✅ 登入驗證
if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

// ✅ CSRF 初始化（PHP5 寫法）
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(openssl_random_pseudo_bytes(16));
}
$csrf_token = $_SESSION['csrf_token'];

// ✅ JSON 檔案路徑
$dataDir = dirname(__FILE__) . '/data/';
$recordsFile = $dataDir . 'contact_records.json';
if (!file_exists($recordsFile)) file_put_contents($recordsFile, '[]');

$all = json_decode(file_get_contents($recordsFile), true);
if (!is_array($all)) $all = array();

// ✅ 批次刪除（相容 PHP5）
// if (
//     $_SERVER['REQUEST_METHOD'] === 'POST' &&
//     isset($_POST['delete_selected']) &&
//     isset($_POST['csrf_token']) &&
//     $_POST['csrf_token'] === $_SESSION['csrf_token']
// ) {
//     $toDelete = isset($_POST['selected']) ? $_POST['selected'] : array();
//     if (!empty($toDelete)) {
//         foreach ($toDelete as $index) {
//             $i = intval($index);
//             if (isset($all[$i])) unset($all[$i]);
//         }
//         $all = array_values($all);
//         file_put_contents($recordsFile, json_encode($all, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
//     }
//     header('Location: ' . $_SERVER['PHP_SELF']);
//     exit;
// }

// ✅ 批次刪除修正版
if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['delete_selected']) &&
    isset($_POST['csrf_token']) &&
    $_POST['csrf_token'] === $_SESSION['csrf_token']
) {
    $toDeleteIds = isset($_POST['selected']) ? $_POST['selected'] : array();
    
    if (!empty($toDeleteIds)) {
        $newData = array();
        foreach ($all as $record) {
            // 檢查這筆資料的 datetime 是否在要刪除的名單中
            // 如果不在，就存入新陣列（代表保留）
            if (!in_array($record['datetime'], $toDeleteIds)) {
                $newData[] = $record;
            }
        }
        
        // 更新原始資料並存檔
        $all = $newData;
        file_put_contents($recordsFile, json_encode($all, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
    
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// ✅ 查詢參數
$search    = isset($_GET['search']) ? trim($_GET['search']) : '';
$sortField = isset($_GET['sort']) ? $_GET['sort'] : 'datetime';
$sortDir   = isset($_GET['dir']) ? $_GET['dir'] : 'desc';
$page      = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$perPage   = isset($_GET['perPage']) ? min(50, max(10, intval($_GET['perPage']))) : 10;

// ✅ 搜尋
// ✅ 搜尋 + 日期區間過濾
$startDate = isset($_GET['start']) ? trim($_GET['start']) : '';
$endDate   = isset($_GET['end']) ? trim($_GET['end']) : '';

$records = array();
foreach ($all as $r) {
    $match = true;

    // 關鍵字比對
    if ($search !== '') {
        $fields = array('name', 'company', 'email', 'content');
        $match = false;
        foreach ($fields as $f) {
            if (isset($r[$f]) && stripos($r[$f], $search) !== false) {
                $match = true;
                break;
            }
        }
    }

    // 日期區間比對（若有日期欄位）
    if ($match && ($startDate != '' || $endDate != '')) {
        $time = isset($r['datetime']) ? strtotime($r['datetime']) : 0;
        if ($startDate != '' && $time < strtotime($startDate . ' 00:00:00')) $match = false;
        if ($endDate != '' && $time > strtotime($endDate . ' 23:59:59')) $match = false;
    }

    if ($match) $records[] = $r;
}

// ✅ 排序（PHP5）
usort($records, function ($a, $b) use ($sortField, $sortDir) {
    $aVal = strtolower(isset($a[$sortField]) ? $a[$sortField] : '');
    $bVal = strtolower(isset($b[$sortField]) ? $b[$sortField] : '');
    if ($aVal == $bVal) return 0;
    if ($sortDir === 'asc') return ($aVal < $bVal) ? -1 : 1;
    return ($aVal > $bVal) ? -1 : 1;
});

// ✅ 匯出 CSV（支援繁體中文、PHP5 相容、防止重整重匯出）
if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    // 檔名加上時間
    $filename = 'form_records_' . date('Ymd_His') . '.csv';

    // 設定標頭
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // ✅ Excel 中文支援：加上 UTF-8 BOM
    echo "\xEF\xBB\xBF";

    $out = fopen('php://output', 'w');

    // 表頭
    fputcsv($out, array('時間', '公司', '姓名', '職稱', '電話', '信箱', '內容', 'IP', '語系代碼', '語系名稱'));

    // ✅ 語系名稱對照表
    $names = array(
        'zh'    => '中文',
        'zh-TW' => '繁中',
        'cn'    => '簡中',
        'en'    => 'EN',
        'ja'    => '日本語',
        'es'    => '西班牙',
        'ko'    => '韓文',
    );

    // ✅ 資料內容
    foreach ($records as $r) {
        $langCode = '';
        if (isset($r['lang']) && $r['lang'] !== '') {
            $langCode = $r['lang'];
        } elseif (isset($r['language']) && $r['language'] !== '') {
            $langCode = $r['language'];
        }
        $langName = isset($names[$langCode]) ? $names[$langCode] : ($langCode != '' ? $langCode : '—');

        fputcsv($out, array(
            isset($r['datetime']) ? $r['datetime'] : '',
            isset($r['company']) ? $r['company'] : '',
            isset($r['name']) ? $r['name'] : '',
            isset($r['job']) ? $r['job'] : '',
            isset($r['tel']) ? $r['tel'] : '',
            isset($r['email']) ? $r['email'] : '',
            isset($r['content']) ? preg_replace("/\r|\n/", " ", $r['content']) : '',
            isset($r['ip']) ? $r['ip'] : '',
            $langCode,
            $langName
        ));
    }

    fclose($out);

    // ✅ 匯出完成後清除 export 參數以避免重整重匯出
    echo "<script>window.location.href='" . strtok($_SERVER['REQUEST_URI'], '?') . "';</script>";
    exit;
}

// ✅ 分頁
$total = count($records);
$totalPages = max(1, ceil($total / $perPage));
$paged = array_slice($records, ($page - 1) * $perPage, $perPage);

// ✅ 統計
$totalAll = count($all);
$today = date('Y-m-d');
$todayCount = 0;
foreach ($all as $r) {
    if (isset($r['datetime']) && strpos($r['datetime'], $today) !== false) {
        $todayCount++;
    }
}
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
<meta charset="UTF-8">
<title>表單資料紀錄管理</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {font-family:"Microsoft JhengHei",sans-serif; background:#fafafa; margin:40px;}
h2 {text-align:center; margin-bottom:20px;}
.topbar {display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:10px; margin-bottom:20px;}
form.search-form {display:flex; flex-wrap:wrap; gap:8px; align-items:center;}
input, select, button {padding:6px 10px; font-size:15px;}
table {width:100%; border-collapse:collapse; background:#fff;}
th, td {border:1px solid #ccc; padding:8px; text-align:left;}
th {background:#333; color:#fff; cursor:pointer;}
th.sort-asc::after {content:" ▲";}
th.sort-desc::after {content:" ▼";}
tr:nth-child(even){background:#f9f9f9;}
tr:hover {background:#e7f2ff; cursor: pointer;}
.pagination {text-align:center; margin-top:20px;}
.pagination a, .pagination span {display:inline-block; padding:6px 12px; margin:0 2px; background:#eee; border-radius:4px; text-decoration:none; color:#333;}
.pagination .active {background:#333; color:#fff;}
button.export {background:#2a7; color:#fff; border:none; padding:6px 12px; cursor:pointer; border-radius:4px;}
button.export:hover {background:#279;}
.logout {color:#333; text-decoration:none; font-weight:bold;}
.logout:hover {text-decoration:underline;}
.stats {background:#fff; border:1px solid #ccc; border-radius:10px; padding:20px; margin-bottom:25px; display:grid; grid-template-columns: repeat(auto-fit, minmax(220px,1fr)); gap:20px;}
.stat-box {text-align:center; padding:15px;}
.stat-title {font-size:16px; color:#666;}
.stat-value {font-size:28px; font-weight:bold; color:#333; margin:5px 0;}
textarea.log-box {width:100%; height:280px; background:#111; color:#0f0; font-family:monospace; padding:10px; border-radius:8px;}
#reloadLog {background:#555; color:#fff; border:none; padding:6px 12px; border-radius:6px; cursor:pointer;}
#reloadLog:hover {background:#000;}
</style>

<style>
/* ✅ 報表淡入淡出動畫 */
#logContainer {
  transition: opacity 0.6s ease;
  opacity: 1;
}
#logContainer.fading {
  opacity: 0;
}
textarea.log-box {
  transition: opacity 0.6s ease;
}

/* ✅ 重新載入按鈕樣式微調 */
#reloadLog {
  background:#555;
  color:#fff;
  border:none;
  padding:6px 12px;
  border-radius:6px;
  cursor:pointer;
}
#reloadLog:hover {
  background:#000;
}
</style>
</head>
<body>

<div class="topbar">
  <form method="get" class="search-form" id="searchForm">
    <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="搜尋公司、姓名、Email 或內容">

    <label>日期：</label>
    <input type="date" name="start" value="<?= isset($_GET['start']) ? htmlspecialchars($_GET['start']) : '' ?>">
    <span>～</span>
    <input type="date" name="end" value="<?= isset($_GET['end']) ? htmlspecialchars($_GET['end']) : '' ?>">

    <label>每頁：
        <select name="perPage" onchange="this.form.submit()">
            <?php for($i=10;$i<=50;$i+=10): ?>
                <option value="<?= $i ?>" <?= $perPage==$i?'selected':'' ?>><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </label>

    <button type="submit">搜尋</button>
    <button type="button" id="clearSearch" style="background:#999;color:#fff;border:none;padding:6px 12px;border-radius:4px;cursor:pointer;">清除搜尋</button>
    <button type="submit" name="export" value="csv" class="export">匯出 CSV</button>
  </form>
  <a href="logout.php" class="logout">登出</a>
</div>

<div class="stats">
  <div class="stat-box"><div class="stat-title">總筆數</div><div class="stat-value"><?= $totalAll ?></div></div>
  <div class="stat-box"><div class="stat-title">今日新增</div><div class="stat-value"><?= $todayCount ?></div></div>
</div>

<h2>表單資料紀錄 (<?= $total ?> 筆)</h2>

<form method="post" onsubmit="return confirm('確定要刪除選取的資料嗎？');">
<input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token) ?>">

<table>
  <thead>
    <tr>
      <th><input type="checkbox" id="checkAll"></th>
        <?php
          $columns = array(
              'datetime' => '時間', 
              'company'  => '公司', 
              'name'     => '姓名',
              'job'      => '職稱', 
              'tel'      => '電話', 
              'email'    => '信箱',
              'content'  => '內容', 
              'ip'       => 'IP',
              'lang'     => '語系'
          );
          foreach ($columns as $key => $label) {
              $dir = ($sortField === $key && $sortDir === 'asc') ? 'desc' : 'asc';
              $class = ($sortField === $key) ? 'sort-' . $sortDir : '';
              $params = $_GET;
              $params['sort'] = $key;
              $params['dir'] = $dir;
              $params['page'] = 1;
              echo '<th class="'.$class.'" onclick="location.href=\'?' . http_build_query($params) . '\'">' . htmlspecialchars($label) . '</th>';
          }
        ?>
    </tr>
  </thead>
  <tbody>
    <?php if (empty($paged)): ?>
      <tr><td colspan="9">目前尚無資料</td></tr>
    <?php else: ?>
      <?php foreach ($paged as $i => $r): 
          $globalIndex = ($page - 1) * $perPage + $i;
      ?>
        <tr>
          <!-- <td><input type="checkbox" name="selected[]" value="<?= $globalIndex ?>"></td> -->
          <td><input type="checkbox" name="selected[]" value="<?= htmlspecialchars($r['datetime']) ?>"></td>
          <td><?= htmlspecialchars(isset($r['datetime'])?$r['datetime']:'') ?></td>
          <td><?= htmlspecialchars(isset($r['company'])?$r['company']:'') ?></td>
          <td><?= htmlspecialchars(isset($r['name'])?$r['name']:'') ?></td>
          <td><?= htmlspecialchars(isset($r['job'])?$r['job']:'') ?></td>
          <td><?= htmlspecialchars(isset($r['tel'])?$r['tel']:'') ?></td>
          <td><?= htmlspecialchars(isset($r['email'])?$r['email']:'') ?></td>
          <td><?= nl2br(htmlspecialchars(isset($r['content'])?$r['content']:'')) ?></td>
          <td><?= htmlspecialchars(isset($r['ip'])?$r['ip']:'') ?></td>
          <td>
            <?php
              $langCode = '';
              if (isset($r['lang']) && $r['lang'] !== '') {
                  $langCode = $r['lang'];
              } elseif (isset($r['language']) && $r['language'] !== '') {
                  $langCode = $r['language'];
              }
              $names = array(
                  // 'zh' => '中文',
                  // 'en' => 'English',
                  // 'ja' => '日本語',
                  // 'es' => 'Español'
                  'zh' => '中文',
                  'en' => 'EN',
                  'ja' => '日文',
                  'es' => 'ES'
              );
              echo isset($names[$langCode]) ? $names[$langCode] : ($langCode != '' ? $langCode : '—');
            ?>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>

<div style="margin-top:10px;">
  <button type="submit" name="delete_selected" class="export" style="background:#c33;">刪除選取</button>
</div>
</form>

<script>
document.getElementById('checkAll').addEventListener('change', function() {
  var checked = this.checked;
  var boxes = document.getElementsByName('selected[]');
  for (var i = 0; i < boxes.length; i++) boxes[i].checked = checked;
});
</script>

<div class="pagination">
  <?php for ($i=1; $i<=$totalPages; $i++): ?>
    <?php if ($i==$page): ?>
      <span class="active"><?= $i ?></span>
    <?php else: ?>
      <a href="?<?= http_build_query(array_merge($_GET, array('page'=>$i))) ?>"><?= $i ?></a>
    <?php endif; ?>
  <?php endfor; ?>
</div>

<hr style="margin:40px 0;">
<h3>📄 Sitemap 生成報表</h3>
<div id="logContainer">
  <?php
  $logFile = dirname(__FILE__) . '/sitemap_report.log';
  if (file_exists($logFile)) {
      echo '<textarea class="log-box" readonly>'.htmlspecialchars(file_get_contents($logFile)).'</textarea>';
  } else {
      echo '<p>尚未生成 sitemap_report.log。</p>';
  }
  ?>
</div>
<button id="reloadLog">🔄 重新載入報表</button>

<script>
// ✅ 清除搜尋按鈕
  document.getElementById('clearSearch').addEventListener('click', function(){
    document.getElementById('searchForm').reset();
    window.location.href = window.location.pathname; // 回到預設頁面
  });

// ✅ 每次載入 sitemap_report.log（使用 read_log.php）
  function loadLog() {
    var container = document.getElementById('logContainer');
    container.classList.add('fading'); // 淡出動畫

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'read_log.php?_=' + new Date().getTime(), true);

    xhr.onload = function() {
      // ✅ 更新內容
      var box = document.createElement('textarea');
      box.className = 'log-box';
      box.readOnly = true;

      if (xhr.status == 200) {
        box.textContent = xhr.responseText;
      } else {
        box.textContent = '⚠️ 載入失敗 (' + xhr.status + ')';
      }

      // ✅ 更新時間
      var now = new Date();
      var h = now.getHours();
      var m = now.getMinutes();
      if (m < 10) m = '0' + m;
      var timeText = '🕒 最後更新時間：' + h + ' 點 ' + m + ' 分';
      var info = document.createElement('p');
      // info.textContent = timeText;
      info.style = "margin-bottom:6px; color:#333; font-size:15px;";

      // ✅ 替換內容
      setTimeout(function() {
        container.innerHTML = '';
        container.appendChild(info);
        container.appendChild(box);
        container.classList.remove('fading'); // 淡入動畫
      }, 400); // 與 CSS 過渡時間同步
    };

    xhr.onerror = function() {
      setTimeout(function() {
        container.innerHTML = '<p style="color:red;">⚠️ 無法連線到伺服器。</p>';
        container.classList.remove('fading');
      }, 400);
    };

    xhr.send();
  }

// ✅ 頁面載入自動刷新一次
  window.onload = function() {
    loadLog();
    var intervalMinutes = 10;
    setInterval(loadLog, intervalMinutes * 60 * 1000);
  };

 // ✅ 手動重新載入
  document.getElementById('reloadLog').addEventListener('click', loadLog);
</script>

</body>
</html>
