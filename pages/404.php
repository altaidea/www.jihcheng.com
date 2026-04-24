<?php
// 1. 清除之前可能存在的緩衝輸出，避免干擾 layout
if (ob_get_level()) ob_end_clean();
ob_start();

// 2. 取得語言與路徑邏輯 (與 index.php 保持一致)
if (!isset($lang)) {
    $lang = defined('DEFAULT_LANG') ? DEFAULT_LANG : 'zh';
}

// 3. 載入語言檔
$langFile = __DIR__ . '/../lang/' . $lang . '.php';
$langStrings = file_exists($langFile) ? include $langFile : [];

// 4. 設定 SEO 與 Meta (注入給 layout.php)
$is404 = true; // 讓 layout.php 觸發 noindex
$currentPath = '404';
$pageTitle = $langStrings['not_found_title'] ?? '404 Page Not Found';

$langStrings['page_title'] = $pageTitle;
$langStrings['page_description'] = $langStrings['not_found_message'] ?? 'The page you are looking for does not exist.';
$langStrings['page_keywords'] = '404';

// 5. 輸出頁面內容
?>
<style>
 .error-section{
  padding-top: var(--page-padding-top);
  padding-bottom: var(--page-padding-bottom);
 }
 h2{
  color: #27348E;
 }

 .btn-primary{
  background-color: #999999;
  border-color: #999999;
 }
 .btn-primary:hover{
  background-color: #27348E;
 }
</style>
<section class="error-section d-flex align-items-center justify-content-center">
  <div class="container text-center">
    <div class="information">
      <h2 class="display-1 fw-bold" style="font-size: 8rem;">404</h1>
      <h3 class="mb-4"><?= $langStrings['page_not_found'] ?? ($lang == 'zh' ? '找不到頁面' : 'Page Not Found') ?></h2>
      <p class="lead mb-5 text-secondary">
        <?= $langStrings['not_found_message'] ?? ($lang == 'zh' ? '您所查詢的頁面不存在或已移除。' : 'The page you are looking for might have been removed or is temporarily unavailable.') ?>
      </p>
      <a href="<?= buildUrl('home', $lang) ?>" class="btn btn-primary btn-lg px-5">
        <i class="bi bi-house-fill me-2"></i><?= $langStrings['back_to_home'] ?? ($lang == 'zh' ? '回首頁' : 'Back to Home') ?>
      </a>
    </div>
  </div>
</section>

<?php
// 6. 捕捉內容並交由 layout 渲染
$pageContent = ob_get_clean();
include __DIR__ . '/../layouts/layout.php';
exit; // 確保 404 後不再執行任何程式碼
?>