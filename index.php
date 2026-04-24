<?php
include 'config.php';
include __DIR__ . '/functions/helpers.php';
require_once __DIR__ . '/functions/ui_helpers.php';

// ===========================================
// 維護模式設定
// ===========================================
$maintenanceFlag = __DIR__ . '/maintenance.lock';
$maintenanceRoute = USE_MULTILANG ? ($basePath . '/zh/maintenance') : ($basePath . '/maintenance');

if (file_exists($maintenanceFlag)) {
    if (stripos($_SERVER['REQUEST_URI'], '/maintenance') === false) {
        header("HTTP/1.1 503 Service Unavailable");
        header("Retry-After: 3600");
        header("Location: " . $maintenanceRoute);
        exit;
    }
}

// ===========================================
// 拒絕非法副檔名
// ===========================================
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

if (preg_match('/\.php$/i', $uri)) {
    include __DIR__ . '/pages/404.php';
    exit;
}

// ===========================================
// 取得真正要分析的 path
// ===========================================
// $uriPath = parse_url($uri, PHP_URL_PATH);
// $rawPath = trim(str_replace($basePath, '', $uriPath), '/');
// ===========================================
// 20260130 修正版
// ===========================================
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$uriPath = parse_url($uri, PHP_URL_PATH); // 這裡拿到的是 /git/wealthy-hill_com_tw/home.html

// 重要修正：從網址中移除專案目錄路徑，而不是移除整個網域名稱
// 如果 $routerRoot 是 $uriPath
// 那 $rawPath 就會變成 "home.html"
$rawPath = trim(str_replace($routerRoot, '', $uriPath), '/');

// ===========================================
// 多語言處理 (修正版：邏輯順序優化)
// ===========================================
if (USE_MULTILANG) {

    // 1. 若路徑為空（純目錄），導向預設語系首頁
    if ($rawPath === '') {
        $startLang = ($defaultLang === 'zh') ? 'zh-TW' : $defaultLang;
        header("Location: " . rtrim($basePath, '/') . '/' . $startLang . '/home.html', true, 301);
        exit;
    }

    // 2. 拆解路徑，提取第一層作為語系
    $segments = explode('/', $rawPath);
    $urlLang = isset($segments[0]) ? $segments[0] : '';

    // ⭐ 3. 核心映射邏輯：將外部顯示 (zh-TW) 轉回內部代碼 (zh)
    if ($urlLang === 'zh-TW') {
        $lang = 'zh';
    } else {
        $lang = $urlLang;
    }

    // 4. 驗證語系是否存在
    if (!in_array($lang, $supportedLangs)) {
        include __DIR__ . '/pages/404.php';
        exit;
    }

    // 5. 移除語系段落，取得純粹的功能路徑 ($subPath)
    array_shift($segments);
    
    // 🎯 修正：清理掉結尾斜線產生的空段落，並處理空路徑為 home
    $subPath = implode('/', $segments);
    $subPath = trim($subPath, '/'); // 移除多餘斜線

    // 🔴 關鍵補強：如果網址是 /zh-TW/ 或 /zh-TW/index.html，統一指向 home
    if ($subPath === '' || $subPath === 'index' || $subPath === 'index.html') {
        $subPath = 'home';
    }

} else {
    $lang = $defaultLang;
    $subPath = ($rawPath !== '' && $rawPath !== 'index' && $rawPath !== 'index.html') ? $rawPath : 'home';
}

// 最後統一去除 .html 標籤 (不論有無)
$subPath = preg_replace('/\.html$/i', '', $subPath);

// ===========================================
// 載入語言檔
// ===========================================
$langFile = __DIR__ . '/lang/' . $lang . '.php';
$langStrings = file_exists($langFile) ? include $langFile : array();

// ===========================================
// 拒絕非法尾碼「.」
// ===========================================
if (preg_match('/\.$/', $subPath)) {
    include __DIR__ . '/pages/404.php';
    exit;
}

// ===========================================
// 路由判斷
// ===========================================
$pageFile = null;

// 應用領域詳細頁: application/分類/系列/產品
if (preg_match('#^application/([^/]+)/([^/]+)/([^/]+)$#', $subPath, $matches)) {
    $_GET['categoryType'] = $matches[1];
    $_GET['seriesKey']    = $matches[2];
    $_GET['productKey']   = $matches[3];
    $_GET['from']         = 'application';
    $pageFile = __DIR__ . '/pages/products-detail.php';
}

// 應用領域系列頁: application/分類/系列
elseif (preg_match('#^application/([^/]+)/([^/]+)$#', $subPath, $matches)) {
    $_GET['categoryType'] = $matches[1];
    $_GET['seriesKey']    = $matches[2];
    $_GET['from']         = 'application';
    $pageFile = __DIR__ . '/pages/products-series.php';
}

// 應用領域主頁: application/分類
elseif (preg_match('#^application/(granule|powder|liquid|others|customized)$#', $subPath, $matches)) {
    $_GET['categoryType'] = $matches[1];
    $_GET['from']         = 'application';
    $pageFile = __DIR__ . '/pages/application-cate.php';
}

// --- products 邏輯 (產品介紹 > 系列 > 產品) ------------------------------------------------------
// 產品詳細頁: products/系列/產品
elseif (preg_match('#^products/([^/]+)/([^/]+)$#', $subPath, $matches)) {
    $_GET['seriesKey']    = $matches[1];
    $_GET['productKey']   = $matches[2];
    $_GET['from']         = 'products';
    $pageFile = __DIR__ . '/pages/products-detail.php';
}
// 系列列表頁: products/系列
elseif (preg_match('#^products/([^/]+)$#', $subPath, $matches)) {
    $_GET['seriesKey']    = $matches[1];
    $_GET['from']         = 'products';
    $pageFile = __DIR__ . '/pages/products-series.php';
}
// 產品介紹主頁: products
elseif ($subPath === 'products') {
    $pageFile = __DIR__ . '/pages/products.php';
}

//【應用領域 - 總表】: application
elseif ($subPath === 'application') {
    $pageFile = __DIR__ . '/pages/application.php';
}
// --- products END ---------------------------------------------------

// /search/keyword
elseif (preg_match('#^search/(.+)$#', $subPath, $matches)) {
    $_GET['keyword'] = urldecode($matches[1]);
    $pageFile = __DIR__ . '/pages/search.php';
}

// /news/key
// elseif (preg_match('#^news/([^/]+)$#', $subPath, $matches)) {
//     $_GET['newsKey'] = $matches[1];
//     $pageFile = __DIR__ . '/pages/news-detail.php';
// }
// 1. 捕捉分頁 (news/page/2)
// 只要路徑長得像 news/page/數字，就判定為列表頁
elseif (preg_match('#^news/page/([0-9]+)$#', $subPath, $matches)) {
    $_GET['page'] = (int)$matches[1];
    $subPath = 'news';  // ⚡ 核心靈魂：還原 subPath，解決路徑堆疊問題
    $pageFile = __DIR__ . '/pages/news.php';
}

// 2. 仿 Search 邏輯：捕捉詳細頁 (news/任何東西)
// 只要不是上面的分頁格式，剩下的通通視為文章 key
elseif (preg_match('#^news/(.+)$#', $subPath, $matches)) {
    $_GET['newsKey'] = $matches[1];
    $pageFile = __DIR__ . '/pages/news-detail.php';
}

// /faq (主頁)
elseif ($subPath === 'faq') {
    $pageFile = __DIR__ . '/pages/faq.php';
}

// /faq/category/page
elseif (preg_match('#^faq/([^/]+)/([0-9]+)$#', $subPath, $matches)) {
    $_GET['cat'] = $matches[1];
    $_GET['page'] = (int)$matches[2];
    $pageFile = __DIR__ . '/pages/faq.php';
}

// /faq/key (detail)
elseif (preg_match('#^faq/([^/]+)$#', $subPath, $matches)) {
    $_GET['faqKey'] = $matches[1];
    $pageFile = __DIR__ . '/pages/faq-detail.php';
}

// /projects/key
elseif (preg_match('#^projects/([^/]+)$#', $subPath, $matches)) {
    $_GET['projectKey'] = $matches[1];
    $pageFile = __DIR__ . '/pages/projects-detail.php';
}

// /catalog
elseif ($subPath === 'catalog') {
    $pageFile = __DIR__ . '/pages/catalog.php';
}

// 一般頁面
else {
    $pageFile = __DIR__ . '/pages/' . $subPath . '.php';
}

// ... 以上是各種 preg_match 路由判斷 ...

// ===========================================
// 安全字串
// 確保所有的路由（特別是 news）已經完成 subPath 的「淨化」後，才生成 safePath
// ===========================================
$safePath = htmlspecialchars($subPath, ENT_QUOTES, 'UTF-8');

// ===========================================
// 404 Protection 模組（避免任何輸出破壞 layout）
// ===========================================
ob_start();
$is404 = include __DIR__ . '/modules/404-protection.php';
ob_end_clean();

// ===========================================
// 載入頁面 or 404
// ===========================================
if ($subPath === '404') {
    include __DIR__ . '/pages/404.php';
} elseif (is_file($pageFile)) {
    ob_start();
    include $pageFile;
    $pageContent = ob_get_clean();

    $currentPath = $subPath;   // ⭐ 傳給 layout / navbar 用

    include __DIR__ . '/layouts/layout.php';
} else {
    include __DIR__ . '/pages/404.php';
}
?>
