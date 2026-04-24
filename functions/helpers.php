<?php
if (!function_exists('buildUrl')) {
    /**
     * 生成規範化的多語系網址
     * 修正：強制排除實體路徑 (Physical Path) 混入
     */
    function buildUrl(string $path = '', string $lang = null): string {
        global $basePath, $defaultLang, $supportedLangs;

        // 1. 取得顯示語系映射
        $langMap = ['zh' => 'zh-TW', 'en' => 'en'];

        // 2. 核心防禦：確保 basePath 不含實體路徑 (如 C:/...)
        // 如果 basePath 意外包含了硬碟代號，則嘗試修復它
        $safeBase = $basePath;
        if (preg_match('/^[a-zA-Z]:/', $safeBase)) {
            // 僅保留 URL 部分，移除實體路徑特徵
            $safeBase = preg_replace('/^[a-zA-Z]:.*htdocs/i', '', $safeBase);
        }

        $urlBase = rtrim($safeBase, '/');

        // 3. 路徑與語系清洗
        $path = trim($path, '/');
        $currentLang = $lang ?? ($GLOBALS['lang'] ?? $defaultLang);
        $validLang = in_array($currentLang, $supportedLangs) ? $currentLang : $defaultLang;
        $displayLang = isset($langMap[$validLang]) ? $langMap[$validLang] : $validLang;

        // 4. 補完 .html (排除首頁)
        if ($path !== '' && !preg_match('/\.html$/i', $path)) {
            $path .= '.html';
        }

        // 5. 組裝完整網址
        if (defined('USE_MULTILANG') && USE_MULTILANG === true) {
            $finalPath = ($path === '' || $path === 'home.html') ? 'home.html' : $path;
            // 確保拼接時不會出現多重斜線
            return $urlBase . '/' . $displayLang . '/' . $finalPath;
        }

        return $urlBase . ($path === '' ? '' : '/' . $path);
    }
}

// 專案管理套件
function getProjectField($project, $key, $lang) {
  return $project[$key][$lang] ?? $project[$key]['zh'] ?? '';
}

// 自動抓對應的語言包文案
// 20250918 新增，對應元件 components/products-menu.php 
if (!function_exists('__')) {
    /**
     * 多語系字串取值
     *
     * @param string $key  文案 key
     * @param string|null $lang 指定語系（可選，預設用全域 $lang）
     * @return string
     */
    function __(string $key, ?string $lang = null): string {
        global $uiLang, $lang; // $lang 代表目前使用的語系
        $lang = $lang ?? 'zh';
        if (isset($uiLang[$lang][$key])) {
            return $uiLang[$lang][$key];
        }
        // fallback 英文或 key 本身
        return $uiLang['en'][$key] ?? $key;
    }
}
?>

<?php
// ==== Helper functions (PHP 7.0+ compatible) ====

// ✅ 統一文字正規化（搜尋用：忽略大小寫、空白、連字號、底線）
if (!function_exists('normalize_text')) {
  function normalize_text(string $s): string {
    $s = mb_strtolower($s, 'UTF-8');
    $s = str_replace(['％'], ['%'], $s);
    $s = preg_replace('/[\s\-\_\x{00A0}]+/u', '', $s);
    return $s;
  }
}

// ✅ 搜尋結果高亮（支援多關鍵字，避免 XSS）
if (!function_exists('highlightKeyword')) {
  function highlightKeyword(string $text, string $rawQuery): string {
    if ($rawQuery === '') return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $safe = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $parts = preg_split('/[,\s]+/u', $rawQuery);
    $parts = is_array($parts) ? $parts : [];
    $parts = array_map('trim', $parts);
    $parts = array_filter($parts, function($s){ return $s !== ''; });
    $words = array_values(array_unique($parts));
    if (empty($words)) return $safe;
    foreach ($words as $w) {
      $escaped = preg_quote($w, '/');
      $safe = preg_replace("/({$escaped})/iu", '<mark>$1</mark>', $safe);
    }
    return $safe;
  }
}

// ✅ 搜尋資料（支援系列、系列下產品）
if (!function_exists('searchData')) {
  function searchData(array $keywords, array $data): array {
    if (empty($keywords) || empty($data)) return [];

    $normKeywords = array_map('normalize_text', $keywords);
    $results = [];

    foreach ($data as $equipmentKey => $equipment) {

      $hitEquipment = false;
      $hasProductHit = false;
      $productHits = [];

      /* =========================
       * Equipment 層搜尋
       * ========================= */
      $equipPool = [];

      if (isset($equipment['title'])) {
        $equipPool = array_merge(
          $equipPool,
          is_array($equipment['title']) ? array_values($equipment['title']) : [$equipment['title']]
        );
      }

      if (isset($equipment['info'])) {
        $equipPool = array_merge(
          $equipPool,
          is_array($equipment['info']) ? array_values($equipment['info']) : [$equipment['info']]
        );
      }

      foreach ($equipPool as $text) {
        $normText = normalize_text(strip_tags((string)$text));
        foreach ($normKeywords as $nk) {
          if ($nk !== '' && mb_strpos($normText, $nk, 0, 'UTF-8') !== false) {
            $hitEquipment = true;
            break 2;
          }
        }
      }

      /* =========================
       * Series / Products 層搜尋
       * ========================= */
      if (isset($equipment['series']) && is_array($equipment['series'])) {
        foreach ($equipment['series'] as $seriesKey => $series) {

          $hitSeries = false;

          // series title / description
          $seriesPool = [];

          if (isset($series['title'])) {
            $seriesPool = array_merge(
              $seriesPool,
              is_array($series['title']) ? array_values($series['title']) : [$series['title']]
            );
          }

          if (isset($series['description'])) {
            $seriesPool = array_merge(
              $seriesPool,
              is_array($series['description']) ? array_values($series['description']) : [$series['description']]
            );
          }

          foreach ($seriesPool as $text) {
            $normText = normalize_text(strip_tags((string)$text));
            foreach ($normKeywords as $nk) {
              if ($nk !== '' && mb_strpos($normText, $nk, 0, 'UTF-8') !== false) {
                $hitSeries = true;
                break 2;
              }
            }
          }

          /* -------- Products -------- */
          if (isset($series['products']) && is_array($series['products'])) {
            foreach ($series['products'] as $productKey => $product) {

              $pHit = false;
              $productPool = [];

              /* === 型號類（一定要先加） === */
              $productPool[] = $productKey; // EZS-H130

              if (!empty($product['typename'])) {
                $productPool[] = $product['typename'];
              }

              if (!empty($product['type'])) {
                $productPool[] = $product['type'];
              }

              /* === 內容類 === */
              foreach (['title', 'description', 'features'] as $field) {
                if (isset($product[$field])) {
                  $productPool = array_merge(
                    $productPool,
                    is_array($product[$field]) ? array_values($product[$field]) : [$product[$field]]
                  );
                }
              }

              foreach ($productPool as $text) {
                $normText = normalize_text(strip_tags((string)$text));
                foreach ($normKeywords as $nk) {
                  if ($nk !== '' && mb_strpos($normText, $nk, 0, 'UTF-8') !== false) {
                    $pHit = true;
                    $hasProductHit = true;
                    break 2;
                  }
                }
              }

              if ($pHit) {
                $productHits[] = [
                  'equipmentKey' => $equipmentKey,
                  'seriesKey'    => $seriesKey,
                  'productKey'   => $productKey,
                  'title'        => $product['title'] ?? [],
                  'description'  => $product['description'] ?? [],
                ];
              }
            }
          }

          if ($hitSeries) {
            $hitEquipment = true;
          }
        }
      }

      /* =========================
       * 收斂結果
       * ========================= */
      if ($hitEquipment || $hasProductHit) {
        $equipment['__has_product_hit'] = $hasProductHit;
        if ($hasProductHit) {
          $equipment['__hits'] = $productHits;
        }
        $results[$equipmentKey] = $equipment;
      }
    }

    return $results;
  }
}

// ✅ 自動載入 news-data.php、補上 timestamp、排序、擷取最新 N 則，並保留正確鍵名
if (!function_exists('get_latest_news')) {
  /**
   * 取得最新的新聞資料（自動依 timestamp 排序，保留鍵名）
   *
   * @param int $limit 要取幾則（預設 2）
   * @return array 最新新聞資料
   */
  function get_latest_news(int $limit = 2): array {
    $file = __DIR__ . '/../data/news-data.php';
    if (!file_exists($file)) return [];

    $news = include $file;

    // 確保每筆都有 timestamp
    foreach ($news as &$n) {
      if (empty($n['timestamp'])) {
        $y = $n['date-y'] ?? '1970';
        $m = $n['date-m'] ?? 'Jan';
        $d = $n['date-d'] ?? '01';
        $n['timestamp'] = strtotime("$y $m $d") ?: 0;
      }
    }
    unset($n);

    // 依 timestamp 降冪排序（保留鍵名）
    uasort($news, function ($a, $b) {
      return ($b['timestamp'] ?? 0) <=> ($a['timestamp'] ?? 0);
    });

    // 只取指定數量，保留鍵名
    return array_slice($news, 0, $limit, true);
  }
}

// ===============================
// 🔧 SEO 共用文字清洗工具
// PHP 5.4+ 相容
// ===============================

if (!function_exists('cleanText')) {

    /**
     * 清洗 HTML / 換行 / 多餘空白，適用於 SEO meta / JSON-LD
     *
     * @param string $text
     * @param int    $limit 字數限制（0 = 不限制）
     * @return string
     */
    function cleanText($text, $limit = 0) {

        if (!$text) return '';

        // 移除 HTML
        $text = strip_tags($text);

        // 解碼 HTML entities
        $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');

        // 移除換行、tab、多重空白
        $text = preg_replace('/\s+/u', ' ', $text);

        $text = trim($text);

        // SEO description 字數限制（可選）
        if ($limit > 0 && mb_strlen($text, 'UTF-8') > $limit) {
            $text = mb_substr($text, 0, $limit, 'UTF-8');
        }

        return $text;
    }
}

/**
 * 優化後的資源路徑工具 - 減少硬碟讀取
 * PHP 5 OK
 */
if (!function_exists('asset')) {
  function asset($path) {
    global $basePath;
    static $version = null; // ⭐ 使用靜態變數緩存

    // 如果是開發環境，可以維持自動檢測；
    // 如果是為了流暢度，我們在第一次執行時設定一次即可
    if ($version === null) {
        // 您也可以直接手動寫死版本號，例如 $version = '20260414';
        // 這樣完全不讀取硬碟，速度最快
        $version = '1.0.1'; 
    }

    $relativePath = ltrim($path, '/');
    $urlPath = rtrim($basePath, '/') . '/' . $relativePath;

    return $urlPath . '?v=' . $version;
  }
}
?>