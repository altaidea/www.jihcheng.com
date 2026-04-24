<?php
  // $reCAPTCHAScripts[] = "https://www.google.com/recaptcha/api.js?render=6LepoHUUAAAAAJ_yBEpIDCIeIci7Oys3V7hVzve8";

  /**
   * System v2.6 - Contact Section
   * 優化重點：Headers防禦、路徑邏輯修正、Textarea渲染修正、JS事件整合
   */
  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }
  date_default_timezone_set('Asia/Taipei');

  // 初始化預設值
  $lang = $lang ?? 'zh';
  $basePath = $basePath ?? '';


  if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
  }
  $csrf_token = $_SESSION['csrf_token'];

  function imgVer($path)
  {
    return file_exists($_SERVER['DOCUMENT_ROOT'] . $path) ? filemtime($_SERVER['DOCUMENT_ROOT'] . $path) : time();
  }
?>

<section class="page-wrapper-inner">

  <section class="contact-form-section">
    <div class="container custom-form-container">
      <div class="form-wrapper">
        <p class="form-intro">
          <?= $langStrings['contact_form_intro'] ?>
        </p>
        
        <!-- 表單開始 -->
        <form id="contactForm" method="POST" action="<?= $basePath ?>/captcha.php">
          <!-- 交給後端判斷 -->
          <div style="display:none;"><input type="text" name="website_url" value=""></div>
          <input type="hidden" name="lang" value="<?= $lang ?>">
          <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token) ?>">
          <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

          <!-- inquiryForm -->
          <div class="row gutter-40 inquiryForm"> 
            <div class="col-md-6 mb-36">
              <label class="form-label required"><?= $langStrings['contact_subject'] ?></label>
              <input type="text" class="form-control" placeholder="<?= $langStrings['placeholder_subject'] ?>" name="contact_subject" required>
            </div>
            
            <!-- ⚡ 關鍵：這會強制讓後面的內容換行，保持 Subject 獨佔一行 -->
            <div class="d-none d-md-block w-100"></div>

            <div class="col-md-6 mb-36">
              <label class="form-label required"><?= $langStrings['contact_country'] ?></label>
              <input type="text" class="form-control" name="contact_country" required>
            </div>
            <div class="col-md-6 mb-36">
              <label class="form-label required"><?= $langStrings['contact_name'] ?></label>
              <input type="text" class="form-control" name="contact_name" required>
            </div>
            <div class="col-md-6 mb-36">
              <label class="form-label required"><?= $langStrings['contact_company_name'] ?></label>
              <input type="text" class="form-control" name="contact_company_name" required>
            </div>
            <div class="col-md-6 mb-36">
              <label class="form-label required"><?= $langStrings['contact_address'] ?></label>
              <input type="text" class="form-control" name="contact_address" required>
            </div>
            <div class="col-md-6 mb-36">
              <label class="form-label required"><?= $langStrings['contact_tel'] ?></label>
              <input type="tel" class="form-control" name="contact_tel" required>
            </div>
            <div class="col-md-6 mb-36">
              <label class="form-label required"><?= $langStrings['contact_email'] ?></label>
              <input type="email" class="form-control" name="contact_email" required>
            </div>
            <div class="col-12 mb-5">
              <label class="form-label required"><?= $langStrings['contact_content'] ?></label>
              <textarea class="form-control" rows="5" placeholder="<?= $langStrings['placeholder_contact_content'] ?>" name="contact_content" required></textarea>
            </div>
            <div class="col-12 text-center">
              <button type="submit" id="submitBtn" class="btn btn-send-inquiry js-submit-btn" 
                      data-loading="<?= $lang === 'en' ? 'Sending...' : ($lang === 'cn' ? '提交中...' : '送出中...') ?>">
                  <?= $langStrings['contact_submit'] ?? 'Submit' ?>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.4013685080545!2d121.41384420000001!3d24.9864741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681d1a880d4d03%3A0xf0d41e1a6c51ac2d!2z57SA5q2j5qmf5qKw5pyJ6ZmQ5YWs5Y-4L0ppaCBDaGVuZyBNYWNoaW5lcnk!5e0!3m2!1szh-TW!2stw!4v1775714699678!5m2!1szh-TW!2stw" width="100%" height="236" style="border:0; display: block; vertical-align: middle; margin: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>

<script src="https://www.google.com/recaptcha/api.js?render=6LepoHUUAAAAAJ_yBEpIDCIeIci7Oys3V7hVzve8"></script>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('6LepoHUUAAAAAJ_yBEpIDCIeIci7Oys3V7hVzve8', {action: 'contactForm'})
      .then(function(token) {
        document.getElementById('recaptchaResponse').value = token;
      });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');

    if (!form || !submitBtn) return;
    
    form.addEventListener('submit', function(e) {
      // 1. 基本 HTML5 欄位驗證 (如 required, type="email" 等)
      if (!form.checkValidity()) {
        form.reportValidity();
        return; 
      }

      // 2. 視覺回饋與防連點
      // 取得按鈕上的 Loading 文字 (根據語系)
      const loadingText = submitBtn.getAttribute('data-loading') || 'Processing...';
      
      // 使用 setTimeout 延遲 10ms 禁用按鈕
      // 這是為了確保瀏覽器有足夠時間把 POST 請求發送出去，然後才鎖定 UI
      setTimeout(() => {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ${loadingText}`;
      }, 10);
      
      // 注意：這裡沒有 e.preventDefault()，所以表單會自然跳轉到 captcha.php
    });
  });
</script>