<?php
include __DIR__ . '/../config.php';
include_once __DIR__ . '/../functions/helpers.php';

/**
 * 判斷是否為英文 / 拉丁字母組成的單字
 * Robotic, Arm, Bottle-Washer → true
 * 洗瓶系統, 理瓶 → false
 */
function isLatinWord($str) {
  return preg_match('/^[A-Za-z0-9\-]+$/', $str);
}

// ✅ 取得語言與安全路徑
$rawPath = trim($_GET['path'] ?? '', '/');
$segments = explode('/', $rawPath);

// 支援從 URL 取得 zh-TW 並轉回內部使用的 zh // URL 中的第一段，例如 'zh-TW', 'cn', 'ko'
$urlLang = $segments[0] ?? ''; 

// 1. 初始化語言為預設值 // 尋找映射表反查
$lang = $defaultLang;

// 2. 核心判定邏輯
if (!empty($urlLang)) {
    // A. 檢查是否在映射表中 (處理 zh-TW -> zh)
    $foundInMapping = false;
    foreach ($langMapping as $internal => $external) {
        if ($external === $urlLang) {
            $lang = $internal;
            $foundInMapping = true;
            break;
        }
    }

    // B. 如果映射表沒找到，檢查是否直接屬於支援語系 (處理 cn, ko, en, zh)
    if (!$foundInMapping && in_array($urlLang, $supportedLangs)) {
        $lang = $urlLang;
    }
}

// 3. 定義安全內容路徑 (排除語言段)
if (defined('USE_MULTILANG') && USE_MULTILANG === true) {
    $safePath = implode('/', array_slice($segments, 1));
} else {
    $safePath = $rawPath;
}

// ✅ 載入語言檔 (這之後 $lang 就是正確的 'zh' 了)
$langFile = __DIR__ . "/../lang/{$lang}.php";
$langStrings = file_exists($langFile) ? include $langFile : [];

// ✅ 關鍵字處理
// 優先從 ?keyword= 拿，如果沒有（路徑式），則從 $segments[2] 拿
// 路徑結構：[0]zh-TW / [1]search / [2]關鍵字
// segments[0] = zh-TW
// segments[1] = search
// segments[2] = 關鍵字
$keyword = $_GET['keyword'] ?? ($segments[2] ?? '');
$keyword = trim(urldecode($keyword));

/**
 * ① 先用「非字母數字」拆
 *    Robotic Arm → Robotic, Arm
 *    理瓶 / 洗瓶系統 → 理瓶, 洗瓶系統
 */
$parts = preg_split('/[^\p{L}\p{N}]+/u', $keyword);
$parts = array_filter(array_map('trim', $parts));

$expanded = [];

foreach ($parts as $p) {
  $expanded[] = $p;

  /**
   * ② 只有「非英文」才允許做中文複合詞拆解
   */
  if (!isLatinWord($p) && mb_strlen($p, 'UTF-8') >= 4) {
    // 例如：洗瓶系統 → 洗瓶 + 系統
    for ($i = 2; $i <= mb_strlen($p, 'UTF-8') - 2; $i++) {
      $expanded[] = mb_substr($p, 0, $i, 'UTF-8');
      $expanded[] = mb_substr($p, $i, null, 'UTF-8');
    }
  }
}

$keywords = array_values(array_unique($expanded));
$formattedKeywords = implode(', ', $keywords);

// ✅ 載入資料：修正 products-data 的讀取路徑
$productsRaw = @include __DIR__ . '/../data/products-data.php';
// 確保取得的是 all_series 內部的資料陣列
$products = isset($productsRaw['all_series']) ? $productsRaw['all_series'] : (is_array($productsRaw) ? $productsRaw : []);

$projects = @include __DIR__ . '/../data/projects-data.php';
$news     = @include __DIR__ . '/../data/news-data.php';
$faq      = @include __DIR__ . '/../data/faq-data.php';

$products = is_array($products) ? $products : [];
$projects = is_array($projects) ? $projects : [];
$news     = is_array($news) ? $news : [];
$faq     = is_array($faq) ? $faq : [];

// =============================================
// ✅ 修正後的搜尋邏輯：符合兩層結構 (Category -> Series/Product)
// =============================================
function searchProducts($keywords, $productsData, $lang) {
    $results = [];
    foreach ($productsData as $catKey => $category) {
        $catHit = false;
        $matches = [];

        // 1. 檢查大分類名稱 (如：裝盒機)
        $catTitle = implode(' ', $category['title'] ?? []);
        foreach ($keywords as $kw) {
            if (stripos($catTitle, $kw) !== false) {
                $catHit = true; break;
            }
        }

        // 2. 檢查分類下的產品 (對應資料中的 'series' 鍵值)
        if (!empty($category['series'])) {
            foreach ($category['series'] as $pKey => $pData) {
                $productPool = [$pKey]; // 型號
                if (!empty($pData['title'])) $productPool = array_merge($productPool, array_values($pData['title']));
                if (!empty($pData['intro'])) $productPool = array_merge($productPool, array_values($pData['intro']));
                
                // 檢查 Features (特色介紹)
                if (!empty($pData['features'])) {
                    foreach ($pData['features'] as $f) {
                        if (!empty($f['title'])) $productPool = array_merge($productPool, array_values($f['title']));
                        if (!empty($f['description'])) $productPool = array_merge($productPool, array_values($f['description']));
                    }
                }

                $pHit = false;
                foreach ($productPool as $text) {
                    $normText = mb_strtolower(strip_tags((string)$text), 'UTF-8');
                    foreach ($keywords as $kw) {
                        $normKw = mb_strtolower($kw, 'UTF-8');
                        if ($normKw !== '' && mb_strpos($normText, $normKw, 0, 'UTF-8') !== false) {
                            $pHit = true;
                            break 2;
                        }
                    }
                }

                if ($pHit) {
                    $matches[$pKey] = $pData;
                    $catHit = true;
                }
            }
        }

        if ($catHit) {
            $results[$catKey] = $category;
            $results[$catKey]['__matched_products'] = $matches; // 暫存命中的產品
        }
    }
    return $results;
}

// ✅ 執行搜尋
$matchedProducts = searchProducts($keywords, $products, $lang);
// $matchedProjects = searchData($keywords, $projects);
$matchedNews     = searchData($keywords, $news);
// $matchedfaq      = searchFAQ($keywords, $faq);

// ✅ 頁面 Meta
$langStrings['page_description'] = $langStrings['page_keywords'] = (
  ($langStrings['search_title'] ?? '搜尋結果') . ($formattedKeywords ? ('：' . $formattedKeywords) : '')
);
?>

<section class="search-section">
  <div class="container-fluid content">
    <h1 class="mb-4">
      <?= $langStrings['search_results'] ?? '搜尋結果' ?>：
    </h1>
    <h3>
      <?= $lang === 'zh-TW' ? '搜尋內容：' : ($lang === 'cn' ? '搜索内容：' : ($lang === 'ko' ? '검색 내용：' : 'Search Results：')) ?>  
      <strong><?= htmlspecialchars($formattedKeywords) ?></strong>
    </h3>

    <?php if ($keyword && empty($matchedProducts) && empty($matchedNews) && empty($matchedProjects)): ?>
      <p class="text-muted"><?= $langStrings['no_results'] ?? '查無資料。請嘗試其他關鍵字。' ?></p>
    <?php endif; ?>

    <!-- ✅ 產品搜尋結果 -->
    <?php if (!empty($matchedProducts)): ?>
      <h3 class="mt-4"><?= $langStrings['products_title'] ?? 'Products' ?></h3>
      <?php foreach ($matchedProducts as $catKey => $category): ?>
        <div class="search-result-item mb-4">
          <h5 class="fw-bold">
            <a href="<?= buildUrl("products/{$catKey}", $lang) ?>" class="text-primary">
              <?= highlightKeyword($category['title'][$lang] ?? $category['title']['en'] ?? $catKey, $keyword) ?>
            </a>
          </h5>

          <?php if (!empty($category['__matched_products'])): ?>
            <div class="ms-4">
              <?php foreach ($category['__matched_products'] as $pKey => $pData): ?>
                <div class="mb-2">
                  <a href="<?= buildUrl("products/{$catKey}/{$pKey}", $lang) ?>" class="d-block fw-semibold">
                    • <?= highlightKeyword($pData['title'][$lang] ?? $pData['title']['en'] ?? $pKey, $keyword) ?>
                  </a>
                  <div class="small text-muted">
                    <?= $lang === 'zh-TW' ? '型號' : ($lang === 'cn' ? '型号' : ($lang === 'ko' ? '모델' : 'Model')) ?>
                    <?= highlightKeyword($pKey, $keyword) ?>
                  </div>
                  <?php if (!empty($pData['intro'][$lang])): ?>
                    <div class="small text-secondary">
                      <?= highlightKeyword(mb_strimwidth(strip_tags($pData['intro'][$lang]), 0, 150, '...'), $keyword) ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

    

    <!-- ✅ 最新消息 -->
    <?php if (!empty($matchedNews)): ?>
      <h3><?= $langStrings['news_title'] ?? '最新消息' ?></h3>
      <ul class="list-group mb-5">
        <?php foreach ($matchedNews as $key => $item): ?>
          <li class="list-group-item">
            <a href="<?= buildUrl("news/{$key}", $lang) ?>">
              <?= highlightKeyword($item['title'][$lang] ?? $item['title']['zh'] ?? ucfirst($key), $keyword) ?>
            </a>
            <small class="text-muted d-block"><?= $item['date'] ?? '' ?></small>
            <p class="mb-1 text-muted">
              <?= highlightKeyword(mb_strimwidth(strip_tags($item['content'][$lang] ?? $item['content']['zh'] ?? ''), 0, 120, '...'), $keyword) ?>
            </p>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <!-- ✅ 實績案例 -->
    <?php if (!empty($matchedProjects)): ?>
      <h3 class="mt-4"><?= $langStrings['projects_title'] ?? '實績案例' ?></h3>
      <ul class="list-group">
        <?php foreach ($matchedProjects as $key => $item): ?>
          <li class="list-group-item">
            <a href="<?= buildUrl("projects/{$key}", $lang) ?>">
              <?= highlightKeyword($item['title'][$lang] ?? $item['title']['zh'] ?? ucfirst($key), $keyword) ?>
            </a>
            <p class="mb-1 text-muted">
              <?= highlightKeyword(mb_strimwidth(strip_tags($item['content'][$lang] ?? $item['content']['zh'] ?? ''), 0, 120, '...'), $keyword) ?>
            </p>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <!-- ✅ FAQ 搜尋結果 -->
    <?php if (!empty($matchedfaq)): ?>
      <h3 class="mt-4"><?= $langStrings['faq_title'] ?? '常見問題 (FAQ)' ?></h3>
      <ul class="list-group mb-5">
        <?php foreach ($matchedfaq as $key => $item): ?>
          <li class="list-group-item">
            <a href="<?= buildUrl("faq", $lang) ?>#faq-<?= $item['slug'] ?>">
              <?= highlightKeyword(
                    $item['question'][$lang] 
                    ?? $item['question']['zh'] 
                    ?? ucfirst($key),
                    $keyword
              ) ?>
            </a>

            <p class="mb-1 text-muted small">
              <?= highlightKeyword(
                    mb_strimwidth(
                        strip_tags($item['answer'][$lang] ?? $item['answer']['zh'] ?? ''),
                        0,
                        120,
                        '...'
                    ),
                    $keyword
              ) ?>
            </p>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    
  </div>
</section>
