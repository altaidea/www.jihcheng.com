<?php
// =============================================
// 404 Protection Module
// =============================================
// 說明：
// 1. 自動偵測 404
// 2. 回傳 HTTP 404 header
// 3. X-Robots-Tag 阻擋搜尋引擎
// 4. layout.php 使用 $is404 控制 GA / JSON-LD / canonical
// =============================================

$is404 = false;

// router 或 index.php 傳入不存在頁面 → 標記為 404
if (!empty($path) && ($path === '404' || $path === 'error')) {
    $is404 = true;
}

// 若 page 檔案不存在 → 自動觸發 404
if (isset($pageFile) && !file_exists($pageFile)) {
    $is404 = true;
}

// 執行 404 保護
if ($is404) {
    // 1) 回傳正確 HTTP 狀態
    header("HTTP/1.1 404 Not Found");

    // 2) X-Robots-Tag（HTTP Header 版本）
    header("X-Robots-Tag: noindex, nofollow, noarchive", true);

    // 3) 避免 page cache
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");
}

return $is404;
