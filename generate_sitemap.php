<?php
// ✅ Sitemap 生成腳本 - 雙軌完整路徑校正 + 自動化報表優化版
date_default_timezone_set('Asia/Taipei');

// ------------------------------
// 🧭 自動偵測環境
// ------------------------------
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
$uri  = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

if ($host === 'localhost') {
    $baseUrl = (strpos($uri, '/git/www.santung.com') !== false) ? 'http://localhost/git/www.santung.com' : 'http://localhost/demo/www.santung.com';
} elseif (strpos($host, 'altaweb02.com.tw') !== false) {
    $baseUrl = 'https://www.altaweb02.com.tw/demo/www.santung.com';
} else {
    $baseUrl = 'https://www.santung.com';
}

$languages = array('zh-TW', 'cn', 'en', 'ko'); 
$staticPages = array('/home', '/aboutus', '/products', '/application', '/projects', '/news', '/catalog', '/faq', '/contact');

// ------------------------------
// 📂 載入資料 (取得 categories 與 all_series)
// ------------------------------
$productsResult = (file_exists(__DIR__ . '/data/products-data.php') ? include __DIR__ . '/data/products-data.php' : array());
$allSeriesData = isset($productsResult['all_series']) ? $productsResult['all_series'] : array();
$categoriesData = isset($productsResult['categories']) ? $productsResult['categories'] : array();

$projectsData = (file_exists(__DIR__ . '/data/projects-data.php') ? include __DIR__ . '/data/projects-data.php' : array());
$newsData     = (file_exists(__DIR__ . '/data/news-data.php') ? include __DIR__ . '/data/news-data.php' : array());
$faqData      = (file_exists(__DIR__ . '/data/faq-data.php') ? include __DIR__ . '/data/faq-data.php' : array());

// ------------------------------
// 🚀 生成動態頁路徑 (計數器初始化)
// ------------------------------
$dynamicPages = array();
$stats = array(
    'app_cate' => 0, 'app_series' => 0, 'app_detail' => 0,
    'prod_series' => 0, 'prod_detail' => 0,
    'others' => 0
);

// --- 🎯 1. 應用領域 (4層結構) ---
foreach ($categoriesData as $cateKey => $cate) {
    $dynamicPages[] = "/application/{$cateKey}";
    $stats['app_cate']++;

    foreach ($allSeriesData as $seriesKey => $series) {
        if (isset($series['category_tags']) && in_array($cateKey, (array)$series['category_tags'])) {
            $dynamicPages[] = "/application/{$cateKey}/{$seriesKey}";
            $stats['app_series']++;

            $prodList = isset($series['series']) ? $series['series'] : array();
            foreach ($prodList as $prodKey => $prod) {
                if ($prodKey === 'intro' || $prodKey === 'slug') continue;
                $dynamicPages[] = "/application/{$cateKey}/{$seriesKey}/{$prodKey}";
                $stats['app_detail']++;
            }
        }
    }
}

// --- 🎯 2. 產品介紹 (3層結構) ---
foreach ($allSeriesData as $seriesKey => $series) {
    $dynamicPages[] = "/products/{$seriesKey}";
    $stats['prod_series']++;

    $prodList = isset($series['series']) ? $series['series'] : array();
    foreach ($prodList as $prodKey => $prod) {
        if ($prodKey === 'intro' || $prodKey === 'slug') continue;
        $dynamicPages[] = "/products/{$seriesKey}/{$prodKey}";
        $stats['prod_detail']++;
    }
}

// --- 3. 其他模組 ---
foreach ($projectsData as $slug => $item) { $dynamicPages[] = "/projects/{$slug}"; $stats['others']++; }
foreach ($newsData as $slug => $item)     { $dynamicPages[] = "/news/{$slug}"; $stats['others']++; }
foreach ($faqData as $slug => $item)      { $dynamicPages[] = "/faq/{$slug}"; $stats['others']++; }

// ------------------------------
// 🔄 XML 生成
// ------------------------------
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"/>');
$allPaths = array_unique(array_merge($staticPages, $dynamicPages));

foreach ($languages as $lang) {
    foreach ($allPaths as $path) {
        if (preg_match('/404|error|undefined/i', $path)) continue;
        
        // ✅ 修正點：在 $lang 與 path 之間明確加上 '/'
        $loc = rtrim($baseUrl, '/') . '/' . $lang . '/' . ltrim($path, '/') . '.html';
        
        $urlNode = $xml->addChild('url');
        $urlNode->addChild('loc', htmlspecialchars($loc, ENT_XML1, 'UTF-8'));
        $urlNode->addChild('lastmod', date('Y-m-d'));
        $urlNode->addChild('priority', (strpos($path, 'home') !== false) ? '1.0' : '0.8');
    }
}

// 💾 儲存 XML
$xmlPath = __DIR__ . '/sitemap.xml';
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save($xmlPath);

// =====================================
// 📊 報表優化模組 (Juliet's Dashboard)
// =====================================
$reportDir = __DIR__ . '/web-admin/data';
if (!is_dir($reportDir)) mkdir($reportDir, 0755, true);
$reportFile = $reportDir . '/sitemap_report.log';

$actualUrlCount = substr_count(file_get_contents($xmlPath), '<url>');
$expectedTotal = count($allPaths) * count($languages);

$report = array();
$report[] = "📅 生成時間：" . date('Y-m-d H:i:s');
$report[] = "---------------------------------------";
$report[] = "🏗️ [應用領域] 分類：" . $stats['app_cate'] . " | 系列：" . $stats['app_series'] . " | 詳情：" . $stats['app_detail'];
$report[] = "📦 [產品介紹] 系列：" . $stats['prod_series'] . " | 詳情：" . $stats['prod_detail'];
$report[] = "📰 [其他模組] 總計：" . $stats['others'] . " (News/Projects/FAQ)";
$report[] = "📄 [靜態頁面] 總計：" . count($staticPages);
$report[] = "---------------------------------------";
$report[] = "🌐 語系版本：" . implode(', ', $languages);
$report[] = "🔢 預期總 URL 數：" . $expectedTotal;
$report[] = "📊 實際 XML URL 數：" . $actualUrlCount;
$report[] = "📁 檔案位置：" . $xmlPath;
$report[] = ($expectedTotal === $actualUrlCount) ? "✅ 狀態：路徑完整性校驗通過" : "⚠️ 狀態：數據可能存在重複或排除";
$report[] = "=======================================\n";

$newLog = implode("\n", $report);
$existingLog = file_exists($reportFile) ? file_get_contents($reportFile) : "";
file_put_contents($reportFile, $newLog . $existingLog);

echo "Sitemap 修正完成！路徑現已包含正確斜線。報表已更新至：{$reportFile}";
?>