<?php
  // 網站地圖自動生成轉正式時才使用
  // include __DIR__ . '/../cron/check_sitemap.php';
  ob_start();
  include __DIR__ . '/../cron/check_sitemap.php';
  ob_end_clean();

  // ⭐ 直接從全域或 index.php 承接，不重新分析 URL
  // 如果 $lang 沒被定義，才去抓預設值
  if (!isset($lang)) {
      $lang = defined('DEFAULT_LANG') ? DEFAULT_LANG : 'zh';
  }

  // ⭐ 路徑繼承：直接使用 index.php 算好的 $subPath (即 $currentPath)
  $path = isset($currentPath) ? $currentPath : 'home';

  // ⭐ bodyClass 邏輯優化 (適應四層結構)
  $bodyParts = explode('/', trim($path, '/'));
  $bodyClass = (isset($bodyParts[0]) && $bodyParts[0] !== '') ? $bodyParts[0] : 'home';
  $extraClass = ($bodyClass !== 'home') ? ' page-body' : '';

  $pathDepth = count($bodyParts);

  // ======================================================
  // ⭐ 核心：抓取路由參數 (Slug) 並安全處理
  // ======================================================
  $seriesSlug  = isset($_GET['seriesKey'])  ? ' s-' . htmlspecialchars($_GET['seriesKey'])  : '';
  $productSlug = isset($_GET['productKey']) ? ' p-' . htmlspecialchars($_GET['productKey']) : '';

  // ======================================================
  // ⭐ 軌道 B：產品介紹 (Products) - 三層架構
  // ======================================================
  if ($bodyClass === 'products') {
      // 1. 產品總表 (products.html) -> 深度 1
      if ($pathDepth === 1) {
          $extraClass .= ' products-index';
      }
      // 2. 系列列表頁 (products/series.html) -> 深度 2
      elseif ($pathDepth === 2) { 
          $extraClass .= ' products-series'; 
      }
      // 3. 產品詳情頁 (products/series/product.html) -> 深度 3
      elseif ($pathDepth === 3) { 
          // $extraClass .= ' products-detail';
          $extraClass .= ' products-detail' . $productSlug; // 注入系列與產品名 (如 p-agm) 
      }
  }

  // ======================================================
  // ⭐ 軌道 A：應用領域 (Application) - 四層架構
  // ======================================================
  if ($bodyClass === 'application') {
      // 強制加上 products 基底，讓 CSS 樣式共用
      $extraClass .= ' products';
      
      // 1. 分類主頁 (application/powder.html) -> 深度 2
      if ($pathDepth === 2) { 
          $extraClass .= ' products-cate'; 
      }
      // 2. 系列列表頁 (application/powder/series.html) -> 深度 3
      elseif ($pathDepth === 3) { 
          $extraClass .= ' products-series'; 
      }
      // 3. 產品詳情頁 (application/powder/series/product.html) -> 深度 4
      elseif ($pathDepth === 4) { 
          // $extraClass .= ' products-detail'; 
          $extraClass .= ' products-detail' . $productSlug;
      }
  }

  // ⭐ HTML 語言標籤修正
  $htmlLang = ($lang === 'en') ? 'en' : 'zh-Hant'; // 繁中建議用 zh-Hant 對 SEO 更好

  // ⭐ 取得合併後的資料
  $allProductsData = include __DIR__ . '/../data/products-data.php';
  
  // === ⭐ SEO 主動捕獲環節 (僅針對 projects 總表描述增強) ===
  if (preg_match('#^projects/([^/]+?)(?:\.html)?$#', $path, $matches)) {

      $projectsData = include __DIR__ . '/../data/projects-data.php';

      // ⭐ 直接使用 URL 抓到的 project key
      $projectKey = $matches[1];
      $project = $projectsData[$projectKey] ?? null;

      if ($project) {

          // =========================
          // Title
          // =========================
          $projTitle = $project['title'][$lang]
              ?? $project['title']['zh']
              ?? ucfirst($projectKey);

          $titleSuffixParts = [];

          if (!empty($project['material'])) {
              $titleSuffixParts[] = is_array($project['material'])
                  ? implode('、', $project['material'])
                  : $project['material'];
          }

          if (!empty($project['app_and_scen'])) {
              $titleSuffixParts[] = is_array($project['app_and_scen'])
                  ? implode('、', $project['app_and_scen'])
                  : $project['app_and_scen'];
          }

          $titleSuffix = implode(' | ', $titleSuffixParts);

          // $langStrings['page_title'] = trim($projTitle) !== ''
          //     ? $projTitle
          //     : ucfirst($projectKey);
          
          $langStrings['page_title'] = trim(
              $projTitle . ($titleSuffix !== '' ? ' | ' . $titleSuffix : '')
          );

          // =========================
          // Description（content + material + app_and_scen）
          // =========================
          $descriptionParts = [];

          if (!empty($project['material'])) {
              $descriptionParts[] = is_array($project['material'])
                  ? implode(', ', $project['material'])
                  : $project['material'];
          }

          if (!empty($project['app_and_scen'])) {
              $descriptionParts[] = is_array($project['app_and_scen'])
                  ? implode(', ', $project['app_and_scen'])
                  : $project['app_and_scen'];
          }

          if (!empty($project['content'][$lang])) {
              $descriptionParts[] = strip_tags($project['content'][$lang]);
          } elseif (!empty($project['content']['zh'])) {
              $descriptionParts[] = strip_tags($project['content']['zh']);
          }

          $langStrings['page_description'] = trim(implode(', ', $descriptionParts));

          // =========================
          // Keywords（title + material + app_and_scen）
          // =========================
          $keywordParts = [];

          if (!empty($project['title'][$lang])) {
              $keywordParts[] = $project['title'][$lang];
          } elseif (!empty($project['title']['zh'])) {
              $keywordParts[] = $project['title']['zh'];
          }

          if (!empty($project['material'])) {
              $keywordParts = array_merge(
                  $keywordParts,
                  is_array($project['material']) ? $project['material'] : [$project['material']]
              );
          }

          if (!empty($project['app_and_scen'])) {
              $keywordParts = array_merge(
                  $keywordParts,
                  is_array($project['app_and_scen']) ? $project['app_and_scen'] : [$project['app_and_scen']]
              );
          }

          // 去重 + 組字串
          $langStrings['page_keywords'] = implode(', ', array_unique(array_filter($keywordParts)));
      }
  }

  // ======================================================
  // ⭐ [區塊 A] Products 總表 SEO 攔截
  // ======================================================
  if ($path === 'products') {
      // 1. 優先判定：語系檔 (lang/en.php 等) 是否已有定義
      // 檢查 $langStrings['products_description'] 是否有值且不為空
      $langDesc = isset($langStrings['products_description']) ? trim($langStrings['products_description']) : '';

      if (!empty($langDesc)) {
          // 如果語系檔有寫，直接採用語系檔內容
          $langStrings['page_description'] = $langDesc;
      } else {
          // 2. 備援方案：自動抓取設備名稱清單 (原本的邏輯)
          $allProductsResult = include __DIR__ . '/../data/products-data.php';
          $allProductsData = isset($allProductsResult['all_series']) ? $allProductsResult['all_series'] : $allProductsResult;
          
          $categoryNames = array();
          if (is_array($allProductsData)) {
              foreach ($allProductsData as $cat) {
                  $name = $cat['title'][$lang] ?? $cat['title']['en'] ?? $cat['title']['zh'] ?? '';
                  if ($name) {
                      $categoryNames[] = trim(strip_tags($name));
                  }
              }
          }
          
          if (!empty($categoryNames)) {
              $langStrings['page_description'] = implode(', ', $categoryNames);
          }
      }

      // 最後同步識別碼，讓 Layout 後段能正確讀取
      $langStrings[$path . '_description'] = $langStrings['page_description'] ?? '';
  }

  // ======================================================
  // ⭐ application-cate 分類頁 SEO 攔截 (優先抓取子頁面注入的值)
  // ======================================================
  if ($bodyClass === 'application' && count($bodyParts) >= 2) {
      // 如果子頁面 (如 category.php) 已經透過 $GLOBALS 注入了 SEO
      if (isset($GLOBALS['page_title'])) {
          $langStrings['page_title'] = $GLOBALS['page_title'];
      }
      if (isset($GLOBALS['page_description'])) {
          $langStrings['page_description'] = $GLOBALS['page_description'];
      }
      if (isset($GLOBALS['page_keywords'])) {
          $langStrings['page_keywords'] = $GLOBALS['page_keywords'];
      }
  }

  // ======================================================
  // ⭐ [區塊 B] Catalog 型錄頁 SEO 攔截
  // ======================================================
  if ($path === 'catalog') {
      $catalogSource = include __DIR__ . '/../data/catalogs-data.php';
      $baseTitle = $langStrings['catalog_title'] ?? $langStrings['nav_catalog'] ?? 'Catalog';
      
      $catalogNames = array();
      if (!empty($catalogSource)) {
          foreach ($catalogSource as $item) {
              // 抓取型錄標題
              $cName = $item['title'][$lang] ?? $item['title']['en'] ?? ($item['title'] ?? '');
              if ($cName) $catalogNames[] = trim(strip_tags($cName));
          }
      }
      
      $catalogDescText = implode(', ', $catalogNames);
      $langStrings['page_description'] = $catalogDescText;
      
      // 同步路徑識別碼
      $langStrings[$path . '_description'] = $langStrings['page_description'];
  }

  // ======================================================
  // ⭐ [區塊 C] Video 影片頁 SEO 攔截 (全量模式)
  // ======================================================
  if ($path === 'video') {
      // 使用與主人程式碼一致的路徑
      $videoDataPath = __DIR__ . '/../data/videos-data.php';
      
      if (file_exists($videoDataPath)) {
          // 載入完整影片資料
          $fullVideosSource = include $videoDataPath;
          
          // 取得標題
          $baseTitle = $langStrings['video_title'] ?? $langStrings['nav_video'] ?? 'Video';
          
          $allVideoTitles = array();
          if (!empty($fullVideosSource)) {
              foreach ($fullVideosSource as $video) {
                  // 抓取影片語系標題
                  $vName = $video['title'][$lang] ?? $video['title']['en'] ?? '';
                  if ($vName) {
                      $allVideoTitles[] = trim(strip_tags($vName));
                  }
              }
          }
          
          // 拼湊完整的影片關鍵字清單
          $videoListText = implode(', ', $allVideoTitles);
          
          // 寫入 SEO (排除 video_title，僅填裝內容)
          $langStrings['page_description'] = $videoListText;
          
          // 同步路徑識別碼給 layout.php 下方使用
          $langStrings[$path . '_description'] = $langStrings['page_description'];
      }
  }
  
  // ⭐ asset (PHP 5 OK)
  // 已移到 helpers.php
  // function asset($path) {
  //   global $basePath;

  //   $relativePath = ltrim($path, '/');
  //   $fullPath = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . $basePath . '/' . $relativePath;
  //   $urlPath  = rtrim($basePath, '/') . '/' . $relativePath;

  //   $version = file_exists($fullPath) ? filemtime($fullPath) : time();
  //   return $urlPath . '?v=' . $version;
  // }
  
  // ⭐ HTML 語言標籤
  switch ($lang) {
      case 'zh': $htmlLang = 'zh'; break;
      case 'en': $htmlLang = 'en'; break;
      default:   $htmlLang = $lang;
  }

  // ==============================
  // ⭐ 模組資源（modules）
  // ==============================
  $moduleStyles  = array();
  $moduleScripts = array();

  // 假設有一個全局版本號 $assetVersion
  $v = defined('ASSET_VERSION') ? ASSET_VERSION : time();

  // ⭐ Transition Overlay Module
  if (defined('ENABLE_TRANSITION_OVERLAY') && ENABLE_TRANSITION_OVERLAY) {
    $moduleStyles[]  = $basePath . '/modules/transition-overlay.css?v=' . $v;

    // ⚡ 加入依賴庫 (Vivus + GSAP 套裝)
    $moduleScripts[] = "https://cdn.jsdelivr.net/npm/vivus@0.4.6/dist/vivus.min.js";
    $moduleScripts[] = "https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js";
    $moduleScripts[] = "https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js";

    // ⚡ 最後才載入主模組邏輯，確保依賴在庫之後
    $moduleScripts[] = $basePath . '/modules/transition-overlay.js?v=' . $v;
  }

  // ⭐ 1. 語系映射邏輯 (Juliet 修正：統一顯示為 zh-Hant-TW)
  // 維持 $lang 內部運算不變，僅改變 $htmlLang 輸出
  if ($lang === 'zh') {
      $htmlLang = 'zh-TW'; 
  } elseif ($lang === 'en') {
      $htmlLang = 'en';
  } else {
      $htmlLang = $lang;
  }

  // ⚡ 定義不顯示 Breadcrumb 與 Page Header 的頁面
  $cleanPages = array('home', '404', 'maintenance', 'search');
  
  // ⚡ 判定當前頁面是否在名單內 (考慮 $path 可能包含子路徑，取第一層)
  $isCleanPage = in_array($bodyClass, $cleanPages);
?>
<?php
  // ⚡ 20260420 更新
  // ⚡ 判斷每個內頁的PageHeader會顯示相對應標題 以及 首頁不會顯示PageHeader
  if (!isset($pageTitle)) {
      // 取得路徑的第一層 (例如 products/detail -> products)
      $pathParts = explode('/', $path);
      $pathKey   = isset($pathParts[0]) ? $pathParts[0] : '';

      // 只有當 path 不是 home 且不是空字串時，才去嘗試抓取 langStrings
      if ($path !== 'home' && $path !== '' && !empty($pathKey)) {
          $pageTitle = isset($langStrings[$pathKey . '_title']) ? $langStrings[$pathKey . '_title'] : '';
      } else {
          $pageTitle = ''; // 首頁強制為空
      }
  }
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($htmlLang, ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <?php if (!empty($is404) && $is404): ?>
    <meta name="robots" content="noindex, nofollow, noarchive">
    <meta name="googlebot" content="noindex, nofollow, noarchive">
  <?php endif; ?>

  <?php
    // ⭐ Meta Description
    // 頁面描述來源
    $desc1_raw = isset($langStrings[$path . '_description'])
        ? $langStrings[$path . '_description']
        : (isset($langStrings['page_description']) ? $langStrings['page_description'] : '');
    // 清除 HTML
    $desc1 = strip_tags($desc1_raw);
    // 換行與多餘空白 → 單一空白
    $desc1 = preg_replace('/\s+/', ' ', $desc1);

    // ✨ 移除開頭與結尾的逗號、空白、點號
    // ltrim($desc1, ', ') 會移除開頭的所有逗號和空格
    $desc1 = trim($desc1, " , \t\n\r\0\x0B");

    // 截斷（選配）
    // $desc1 = mb_strimwidth($desc1, 0, 160, "...");
    
    // 公司口號
    $desc2 = isset($langStrings['companySlogen']) ? $langStrings['companySlogen'] : '';
 
    // ⭐ Meta Keywords
    $k1 = isset($langStrings[$path . '_keywords']) ? $langStrings[$path . '_keywords'] :
          (isset($langStrings['page_keywords']) ? $langStrings['page_keywords'] : '');
    $k2 = $langStrings['companySlogen'];
  ?><meta name="description" content="<?php echo $desc1 ?>">
  <meta name="keywords" content="<?php echo $k1 ?>">

  <title><?php // ⭐ Title
    // 如果不是首頁，先抓取頁面標題
    if ($path !== '' && $path !== 'home') {
        $titleParts[] = isset($langStrings[$path . '_title']) 
                        ? $langStrings[$path . '_title'] 
                        : (isset($langStrings['page_title']) ? $langStrings['page_title'] : '');
    }
    // 放入公司名稱
    $titleParts[] = isset($langStrings['company']) ? $langStrings['company'] : '';
    // 只有當 Slogen 存在且不為空時才放入
    if (!empty($langStrings['companySlogen'])) {
        $titleParts[] = $langStrings['companySlogen'];
    }
    // 2. 使用 array_filter 移除空值，並用 ' - ' 串接
    // 這樣就算 Slogen 是空的，最後也不會出現多餘的減號
    echo implode('-', array_filter($titleParts));
  ?></title>

  <!-- OG -->
  <meta property="og:title" content="<?php echo implode('-', array_filter($titleParts)); ?>">
  <meta property="og:description" content="<?php echo $desc1 ?>">
  <?php /* <meta property="og:keywords" content="<?php echo $k1 . ', ' . $k2 . ', ' . $langStrings['company']; ?>"> */?><meta property="og:keywords" content="<?php echo $k1 ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo (asset('/assets/img/img-og-banner-' . $lang . '.webp')); ?>">
  <?php /* <meta property="og:image:alt" content="<?php echo $k1. ', ' .$langStrings['company']; ?>"> */?><meta property="og:image:alt" content="<?= htmlspecialchars($langStrings['company'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:url" content="<?php
    echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  ?>">

  <?php
    // 1. 取得不含參數的路徑
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    // 2. 判斷頁面狀態
    // 檢查 HTTP 狀態碼是否為 404
    $is_404 = (http_response_code() === 404);
    
    // 檢查路徑是否包含 search.php 或 /search/ (根據你的路由設定調整關鍵字)
    $is_search = (strpos($path, 'search.php') !== false || strpos($path, '/search') !== false);

    // 3. 根據判斷結果輸出標籤
    if ($is_search) {
        // 如果是搜尋頁：加入 noindex，不放 canonical
        echo '<meta name="robots" content="noindex, nofollow" />' . PHP_EOL;
    } elseif (!$is_404) {
        // 如果「不是搜尋頁」且「不是 404 頁面」：才輸出 canonical
        $canonical_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $path;
        echo '<link rel="canonical" href="' . $canonical_url . '" />' . PHP_EOL;
    }
    
    // 註：404 頁面在上述判斷中會被直接跳過，不輸出任何標籤，這是正確的做法。
  ?>
  <link rel="icon" href="<?php echo $basePath; ?>/favicon.ico" type="image/x-icon">
  <?php if (!empty($pagePreloads) && is_array($pagePreloads)): ?>
    <!-- 預載圖片 -->
    <?php foreach ($pagePreloads as $preload): ?>
      <link rel="preload" as="image" href="<?= htmlspecialchars($preload, ENT_QUOTES, 'UTF-8') ?>">
    <?php endforeach; ?>
  <?php endif; ?>
  
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap.min.css'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->
  <link rel="stylesheet" href="<?php echo asset('vendor/aos/aos.css'); ?>">
  <link rel="stylesheet" href="<?php echo asset('vendor/swiper/swiper-bundle.min.css'); ?>">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/photoswipe@5.4.4/dist/photoswipe.css" /> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
  <link rel="stylesheet" href="<?php echo asset('assets/css/style.min.css'); ?>">
  <?php 
    /*
    if (!empty($moduleStyles)) {
      foreach ($moduleStyles as $css) {
        echo '<link rel="stylesheet" href="' . htmlspecialchars($css) . '">' . "\n";
      }
    }
    */  
  ?>

  
  <?php/* //GDPR + Schema
  <!-- GDPR-->
  <script src="<?php echo $basePath; ?>/gdpr/tarteaucitron.js"></script>
  <script>
    tarteaucitron.init({
      "hashtag": "#tarteaucitron",
      "highPrivacy": false,
      "orientation": "bottom",
      "adblocker": false,
      "showAlertSmall": true,
      "cookieslist": false,
      "removeCredit": false
    });
  </script>

  <?php 
    // Schema
    include __DIR__ . '/../layouts/scripts.php';
  ?>
  */?>

  <?php
    // SVG LOGO
    include_once 'components/icons-sprite.php'; 

    // reCAPTCHA 腳本
    if (!empty($reCAPTCHAScripts)) {
      foreach ($reCAPTCHAScripts as $js) {
        echo '<script src="' . htmlspecialchars($js) . '"></script>' . "\n";
      }
    }
  ?>
</head>

<body class="<?php echo $lang . ' ' . htmlspecialchars($bodyClass) . $extraClass; ?>">

  <?php if (defined('ENABLE_TRANSITION_OVERLAY') && ENABLE_TRANSITION_OVERLAY): ?>
    <?php include __DIR__ . '/../modules/transition-overlay.php'; ?>
  <?php endif; ?>

  <?php include __DIR__ . '/../components/navbar.php'; ?>

  <div class="page-wrapper">

  <!-- 首頁 Hero Banner & 內頁 Page Header -->
  <?php if ($currentPath === 'home'): ?>
    <?php include __DIR__ . '/../components/hero-swiper.php'; ?>
  <?php endif; ?>

  <?php 
    // 只有當「不是首頁」且「標題不為空」時才顯示 header
    if ($path !== 'home' && $path !== '' && !empty($pageTitle)): 
  ?>
    <div class="page-header">
        <div class="container">
            <div class="title">
              <h1><?php echo $pageTitle; ?></h1>
            </div>
        </div>
    </div>
  <?php endif; ?>
  
  <!-- 麵包屑 -->
  <?php if (!$isCleanPage): ?>
    <?php include __DIR__ . '/../components/breadcrumb.php'; ?>
  <?php endif; ?>
  
  <!-- Page MAIN -->
  <main>
    <?php
      if (!empty($pageContent)) {
        echo $pageContent;
      } elseif (!empty($pageFile)) {
        include $pageFile;
      }
    ?>
  </main>
  
  <!-- Section // Contact -->
  <?php if ($path !== 'contact' && !empty($pageTitle)): ?>
    <?php include __DIR__ . '/../components/contact-section.php'; ?>
  <?php endif; ?>
  
  <!-- Footer + SideBar + photoGalleryModal -->
  <?php 
    include __DIR__ . '/../components/footer.php'; 
    include __DIR__ . '/../components/fixed-side-bar.php';
    include __DIR__ . '/../components/photoGalleryModal.php';
  ?>

  <!-- GoTop -->
  <div id="gototop"><?= icon('icon-double-top', 'gototop'); ?></div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo $basePath; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $basePath; ?>/vendor/aos/aos.js"></script>

<?php include __DIR__ . '/../components/script.php'; ?>

<?php
  if (!empty($moduleScripts)) {
    foreach ($moduleScripts as $js) {
      // 判斷是否為外連 CDN，給予對應的處理
      echo '<script src="' . htmlspecialchars($js) . '"></script>' . "\n";
    }
  }
?>

<!-- 動態腳本注入模組 -->
<?php
  if (isset($pageScripts) && is_array($pageScripts)) {
    foreach ($pageScripts as $jsFile) {
      if (strpos($jsFile, 'http') === 0 || strpos($jsFile, '//') === 0) {
        echo '<script src="' . htmlspecialchars($jsFile) . '"></script>' . "\n";
      } else {
        echo '<script src="' . asset('assets/js/' . $jsFile) . '"></script>' . "\n";
      }
    }
  }
?>

<script type="text/javascript">
    tarteaucitron.user.googletagmanagerId = 'GTM-NSPG2GP';
    (tarteaucitron.job = tarteaucitron.job || []).push('googletagmanager');
</script>

</body>
</html>
