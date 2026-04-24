<?php
// =====================================
// 🔧 Sitemap 自動更新（適用 PHP 5.4 / 5.x）
// =====================================

date_default_timezone_set('Asia/Taipei');

$rootPath = realpath(dirname(__FILE__) . '/..');
$sitemapFile = $rootPath . '/sitemap.xml';
$generatorScript = $rootPath . '/generate_sitemap.php';
$logFile = $rootPath . '/web-admin/data/sitemap_report.log';
$lastRunFile = $rootPath . '/web-admin/data/sitemap_last_run.txt';
$updateInterval = 86400; // 24 小時

clearstatcache();

// ---------------------------
// 狀態變數
// ---------------------------
$needUpdate = false;
$reasons = array();

// ---------------------------
// 🔒 24 小時內是否已執行
// ---------------------------
$lastRunTime = file_exists($lastRunFile) ? intval(file_get_contents($lastRunFile)) : 0;
$timeSinceLastRun = time() - $lastRunTime;

$skipCheck = ($timeSinceLastRun < $updateInterval);

// ---------------------------
// ① sitemap 不存在
// ---------------------------
if (!file_exists($sitemapFile)) {
    $needUpdate = true;
    $reasons[] = 'Sitemap 不存在';
    $skipCheck = false;
}

// ---------------------------
// ② sitemap 超過間隔
// ---------------------------
if (file_exists($sitemapFile)) {
    $fileAge = time() - filemtime($sitemapFile);
    if ($fileAge > $updateInterval) {
        $needUpdate = true;
        $reasons[] = '超過更新間隔 (' . round($fileAge / 3600, 1) . ' 小時)';
        $skipCheck = false;
    }
}

// ---------------------------
// ③ 重要資料檔更新
// ---------------------------
$dataFiles = array(
    $rootPath . '/data/products-data.php',
    $rootPath . '/data/news-data.php',
    $rootPath . '/data/faq-data.php'
);

$existingData = array();
foreach ($dataFiles as $df) {
    if (file_exists($df)) $existingData[] = $df;
}

if (count($existingData) > 0) {
    $latestDataTime = 0;
    foreach ($existingData as $f) {
        $mtime = filemtime($f);
        if ($mtime > $latestDataTime) $latestDataTime = $mtime;
    }

    if (!file_exists($sitemapFile) || $latestDataTime > filemtime($sitemapFile)) {
        $needUpdate = true;
        $reasons[] = '資料檔有更新 (' . date('Y-m-d H:i:s', $latestDataTime) . ')';
        $skipCheck = false;
    }
}

// ---------------------------
// ④ 掃描靜態頁（不用 SPL）
// ---------------------------

// 單一 php
$phpFiles = array($rootPath . '/index.php');

$subDirs = array('pages', 'layouts', 'lang', 'functions');

foreach ($subDirs as $dir) {
    $targetDir = $rootPath . '/' . $dir;
    if (!is_dir($targetDir)) continue;

    $iterator = scandir($targetDir);
    if (!$iterator) continue;

    foreach ($iterator as $file) {
        if ($file === '.' || $file === '..') continue;
        $full = $targetDir . '/' . $file;

        // 是資料夾 → 再掃一次（最多只做兩層，避免過深）
        if (is_dir($full)) {
            $sub = scandir($full);
            foreach ($sub as $sf) {
                if ($sf === '.' || $sf === '..') continue;
                $path = $full . '/' . $sf;
                if (is_file($path) && substr($sf, -4) === '.php') {
                    $phpFiles[] = $path;
                }
            }
        }

        // 檔案本身
        if (is_file($full) && substr($file, -4) === '.php') {
            $phpFiles[] = $full;
        }
    }
}

// 過濾 admin/cron
$filtered = array();
foreach ($phpFiles as $f) {
    if (strpos($f, '/web-admin/') !== false) continue;
    if (strpos($f, '/cron/') !== false) continue;
    $filtered[] = $f;
}
$phpFiles = $filtered;

// 合併檔案
$checkFiles = array_merge($dataFiles, $phpFiles);

// 找最新時間
$existingFiles = array();
foreach ($checkFiles as $f) {
    if (file_exists($f)) $existingFiles[] = $f;
}

if (count($existingFiles) > 0) {
    $latestStaticTime = 0;
    foreach ($existingFiles as $f) {
        $mtime = filemtime($f);
        if ($mtime > $latestStaticTime) $latestStaticTime = $mtime;
    }

    if (!file_exists($sitemapFile) || $latestStaticTime > filemtime($sitemapFile)) {
        $needUpdate = true;
        $reasons[] = '靜態頁有更新 (' . date('Y-m-d H:i:s', $latestStaticTime) . ')';
        $skipCheck = false;
    }
}

// ---------------------------
// 若需跳過 → return
// ---------------------------
if ($skipCheck && !$needUpdate) {
    return;
}

// ---------------------------
// 更新最後執行紀錄
// ---------------------------
file_put_contents($lastRunFile, time());

// ---------------------------
// 寫入 log：置頂
// ---------------------------
$logBlock =
    "📅 檢查時間：" . date('Y-m-d H:i:s') . "\n" .
    "上次執行：" . ($lastRunTime ? date('Y-m-d H:i:s', $lastRunTime) : '無紀錄') . "\n" .
    "距離上次：" . round($timeSinceLastRun / 3600, 1) . " 小時\n";

if ($needUpdate) {
    ob_start();
    include $generatorScript;
    ob_end_clean();

    $logBlock .= "✅ Sitemap 已重新生成。\n";
    $logBlock .= "🔍 觸發原因：" . implode('、', $reasons) . "\n";
} else {
    $logBlock .= "🟢 Sitemap 已是最新狀態。\n";
}

// 確定資料夾存在
$logDir = dirname($logFile);
if (!is_dir($logDir)) {
    mkdir($logDir, 0755, true);
}

// 置頂寫入
if (file_exists($logFile)) {
    $old = file_get_contents($logFile);
    $final = $logBlock . $old;
} else {
    $final = $logBlock;
}

file_put_contents($logFile, $final);

?>