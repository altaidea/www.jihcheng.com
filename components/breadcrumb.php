<?php
// ===== 安全載入函式 =====
if (!function_exists('safeInclude')) {
    function safeInclude($file, $default = []) {
        return file_exists($file) ? include $file : $default;
    }
}

// // ===== HTML 輸出助手（允許資料含 HTML）=====
// if (!function_exists('outputLabel')) {
//     function outputLabel($label) {
//         return (strpos($label, '<') !== false || strpos($label, '>') !== false)
//             ? $label
//             : htmlspecialchars($label, ENT_QUOTES, 'UTF-8');
//     }
// }

// ===== HTML 輸出助手（隱藏 / 忽略 HTML）=====
if (!function_exists('outputLabel')) {
    function outputLabel($label) {
        return htmlspecialchars(strip_tags($label), ENT_QUOTES, 'UTF-8');
    }
}

// ===== 資料載入 =====
$langStrings  = safeInclude(__DIR__ . '/../lang/' . $lang . '.php', []);
// products 和 application 共用
$productsData = safeInclude(__DIR__ . '/../data/products-data.php', []);
$projectsData = safeInclude(__DIR__ . '/../data/projects-data.php', []);
$newsData     = safeInclude(__DIR__ . '/../data/news-data.php', []);
$faqData      = safeInclude(__DIR__ . '/../data/faq-data.php', []);
$catalogsData = safeInclude(__DIR__ . '/../data/catalogs-data.php', []);

// ===== 路徑拆分 =====
$path     = trim($_GET['path'] ?? 'home', '/');
$segments = explode('/', $path);

// ⭐ 修正：忽略語系層級 (支援 zh, en, zh-TW, cn, ko)
if (isset($segments[0])) {
    // 統一偵測所有支援的語系代碼
    if (preg_match('/^(zh|en|zh-TW|cn|ko)$/i', $segments[0])) {
        array_shift($segments);
    }
}

// 如果剩餘路徑第一個是 home，也把它去掉（因為最前面已經手動印了首頁）
// if (isset($segments[0]) && $segments[0] === 'home') {
//     array_shift($segments);
// }

$breadcrumbItems = []; // JSON-LD

// ===== 起始麵包屑 =====
echo '<section class="breadcrumb"><div class="container"><ul>';

$homeUrl = function_exists('buildUrl')
    ? buildUrl('home', $lang)
    : "$basePath/$lang/home.html";

echo "<li><a href='$homeUrl'>" . outputLabel($langStrings['home_title'] ?? '首頁') . "</a></li>";

$breadcrumbItems[] = [
    "@type"    => "ListItem",
    "position" => 1,
    "name"     => strip_tags($langStrings['home_title'] ?? '首頁'),
    "item"     => $homeUrl
];

// 忽略語系層級
if (in_array($segments[0], $supportedLangs ?? [], true)) {
    array_shift($segments);
}

// ===== 預設麵包屑對照表 =====
$breadcrumbMap = [
    'home'          => $langStrings['home_title'] ?? '首頁',
    'about'         => $langStrings['about_title'] ?? '關於我們',
    'aboutus'       => $langStrings['aboutus_title'] ?? '關於威竑',
    'intro'         => $langStrings['aboutus/intro_title'] ?? '公司簡介',
    'organization'  => $langStrings['aboutus/organization_title'] ?? '組織架構',
    'history'       => $langStrings['aboutus/history_title'] ?? '公司沿革',
    'products'      => $langStrings['products_title'] ?? '產品介紹',
    'application'   => $langStrings['application_title'] ?? '應用領域',
    'news'          => $langStrings['news_title'] ?? '最新消息',
    'process'       => $langStrings['process_title'] ?? '工程流程',
    'projects'      => $langStrings['projects_title'] ?? '實績案例',
    'catalog'       => $langStrings['catalog_title'] ?? '線上型錄',
    'faq'           => $langStrings['faq_title'] ?? 'FAQ',
    'contact'       => $langStrings['contact_title'] ?? '聯絡我們',
    'search'        => $langStrings['search_results'] ?? '搜尋結果',
];

// ===== 自動加入父層 =====
$breadcrumbParents = [
    'intro'         => 'aboutus',
    'organization'  => 'aboutus',
    'history'       => 'aboutus',
];

foreach ($segments as $i => $seg) {
    if (isset($breadcrumbParents[$seg])) {
        $parent = $breadcrumbParents[$seg];
        if (!in_array($parent, $segments)) {
            array_splice($segments, $i, 0, $parent);
        }
    }
}

// ===== 生成麵包屑 =====
foreach ($segments as $index => $segment) {
  $isLast = ($index === array_key_last($segments));
  $label  = $breadcrumbMap[$segment] ?? ucfirst($segment);

  // --- news/{slug} ---
  if ($segments[0] === 'news' && $index === 1 && isset($newsData[$segment])) {
      $label = $newsData[$segment]['title'][$lang] ?? $newsData[$segment]['title'][$defaultLang];
  }

  // --- faq/{slug} ---
  if ($segments[0] === 'faq' && $index === 1 && isset($faqData[$segment])) {
      $label = $faqData[$segment]['title'][$lang] ?? $faqData[$segment]['title'][$defaultLang];
  }

  // --- projects/{slug} ---
  if ($segments[0] === 'projects' && $index === 1 && isset($projectsData[$segment])) {
      $label = $projectsData[$segment]['title'][$lang] ?? $projectsData[$segment]['title'][$defaultLang];
  }

  // --- 應用領域 (application) (自動偵測分類並補齊四層結構) application/{category}/{series}/{product}---
  if ($segments[0] === 'application') {
    $categories = isset($productsData['categories']) ? $productsData['categories'] : [];
    $allSeries  = isset($productsData['all_series']) ? $productsData['all_series'] : $productsData;

    // 第一層 (products) 不需要處理，原本的 map 會處理
    // 第二層 (分類)：如 products/powder
    if ($index === 1) {
        $catKey = $segment;
        if (isset($categories[$catKey])) {
            $label = $categories[$catKey]['title'][$lang] ?? $categories[$catKey]['title']['en'];
        }
    }

    // 第三層 (系列)：如 products/powder/bag-weighing-filling...
    if ($index === 2) {
        $seriesKey = $segment;
        if (isset($allSeries[$seriesKey])) {
            $label = $allSeries[$seriesKey]['title'][$lang] ?? $allSeries[$seriesKey]['title']['en'];
        }
    }

    // 第四層 (產品)：如 products/powder/series/agm
    if ($index === 3) {
        $seriesKey = $segments[2]; 
        $prodSlug  = $segment;
        if (isset($allSeries[$seriesKey]['series'][$prodSlug])) {
            $pData = $allSeries[$seriesKey]['series'][$prodSlug]['title'];
            // 多層回退保護
            $label = $pData[$lang] ?? $pData['zh'] ?? $pData['en'] ?? $segment;
        }
    }
  }

  // --- 邏輯 B：產品介紹 (products) ---
  if ($segments[0] === 'products') {
      $allSeries = isset($productsData['all_series']) ? $productsData['all_series'] : $productsData;

      // 第二層 (系列)
      if ($index === 1 && isset($allSeries[$segment])) {
          // ⭐ 修正點：依序找 當前語系 -> 繁中 -> 英文
          $sTitle = $allSeries[$segment]['title'];
          $label = $sTitle[$lang] ?? $sTitle['zh'] ?? $sTitle['en'] ?? $segment;
      }

      // 第三層 (產品)
      if ($index === 2) {
          $seriesKey = $segments[1];
          if (isset($allSeries[$seriesKey]['series'][$segment])) {
              $pTitle = $allSeries[$seriesKey]['series'][$segment]['title'];
              $label = $pTitle[$lang] ?? $pTitle['zh'] ?? $pTitle['en'] ?? $segment;
          }
      }
  }

  // URL
  $linkPath = implode('/', array_slice($segments, 0, $index + 1));

  $url = function_exists('buildUrl')
      ? buildUrl($linkPath, $lang)
      : (USE_MULTILANG ? "$basePath/$lang/$linkPath.html" : "$basePath/$linkPath.html");

  // 輸出 HTML label（允許 <span> <br> 等）
  if ($isLast) {
      echo "<li class='item active' aria-current='page'>" . outputLabel($label) . "</li>";
  } else {
      echo "<li class='item'><a href='$url'>" . outputLabel($label) . "</a></li>";
  }

  // JSON-LD 不允許 HTML → strip_tags()
  $breadcrumbItems[] = [
      "@type"    => "ListItem",
      "position" => $index + 2,
      "name"     => strip_tags($label),
      "item"     => $url
  ];
}

echo '</ul></div></section>';
?>
<!-- <section class="breadcrumb">
  <div class="container">
    <ul>
      <li><a href="" class="item">Home</a></li>
      <li><a href="" class="item active">About us</a></li>
    </ul>
  </div>
</section> -->