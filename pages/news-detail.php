<?php
  $newsList = include __DIR__ . '/../data/news-data.php';

  $segments = explode('/', trim($_GET['path'], '/'));
  $newsKey = $_GET['newsKey'] ?? '';
  $news = $newsList[$newsKey] ?? null;

  if (!$news) {
    include __DIR__ . '/404.php';
    return;
  }

  // =======================
  // 上一則 / 下一則 計算
  // =======================
  $newsKeys = array_keys($newsList);
  $currentIndex = array_search($newsKey, $newsKeys, true);

  $prevKey = $currentIndex > 0
    ? $newsKeys[$currentIndex - 1]
    : null;

  $nextKey = ($currentIndex !== false && $currentIndex < count($newsKeys) - 1)
    ? $newsKeys[$currentIndex + 1]
    : null;

  // ---------------------------
  // ⭐ Meta SEO (優化版：清除冗餘空白)
  // ---------------------------
$l = $lang; // 當前語系代碼 (zh, en, cn, ko)

  // --- 1. Title 判定 ---
  if (!empty($news['seo_title'][$l])) {
      $seoTitle = trim($news['seo_title'][$l]);
  } else {
      // 沒自訂，沿用原本的標題
      $seoTitle = trim($news['title'][$l] ?? $news['title']['zh'] ?? '新聞內容');
  }

  // --- 2. Description 判定 ---
  if (!empty($news['seo_description'][$l])) {
      // 有自訂描述，直接使用
      $seoDesc = trim($news['seo_description'][$l]);
  } else {
      // 沒自訂，執行原本的「內文清洗」邏輯
      $rawContent = $news['content'][$l] ?? $news['content']['zh'] ?? '';
      $cleanContent = strip_tags($rawContent);

      if (in_array($l, ['zh', 'cn'])) {
          // 中文/簡中：移除所有空白
          $cleanContent = preg_replace('/[\s　]+/u', '', $cleanContent);
      } else {
          // 其他語系：縮減為單一空格
          $cleanContent = preg_replace('/\s+/', ' ', $cleanContent);
      }
      $seoDesc = mb_substr(trim($cleanContent), 0, 150, 'UTF-8'); // 自動生成的長度建議可設 150 字
  }

  // --- 3. Keywords 判定 ---
  if (!empty($news['seo_keywords'][$l])) {
      // 有自訂關鍵字
      $seoKeys = trim($news['seo_keywords'][$l]);
  } else {
      // 沒自訂，沿用描述或標題
      $seoKeys = $seoTitle; 
  }

  // --- 4. 終極清洗 (針對最終結果再次確保格式正確) ---
  if (in_array($l, ['zh', 'cn'])) {
      $seoDesc = preg_replace('/[\s　]+/u', '', $seoDesc);
      $seoKeys = preg_replace('/[\s　]+/u', '', $seoKeys);
  }

  // --- 5. ✨ 核心注入 ---
  $langStrings['page_title']       = $seoTitle;
  $langStrings['page_description'] = $seoDesc;
  $langStrings['page_keywords']    = $seoKeys;

  // 終極保險
  $GLOBALS['page_title']       = $seoTitle;
  $GLOBALS['page_description'] = $seoDesc;
  $GLOBALS['page_keywords']    = $seoKeys;
?>

<section class="news-detail-section page-wrapper-inner">
  <div class="container">
    <h2><?= trim($news['title'][$lang] ?? $news['title']['zh']) ?></h2>
    <div class="text-muted">
      <p class="data">
        <?= $lang === 'zh-TW' ? '發佈於：' : ($lang === 'cn' ? '发布于：' : ($lang === 'ko' ? '게시일:' : 'Published on:')) ?>
        <span><?= $news['date'] ?></span>
      </p>
    </div>
    <?= trim($news['content'][$lang] ?? $news['content']['zh']) ?>
  </div>

  <!-- 上一則 / 下一則 -->
  <div class="container page-back-wrapper">
    <!-- 上一則 -->
    <?php if ($prevKey && isset($newsList[$prevKey])): ?>
      <a class="btn-prev"
        href="<?= buildUrl("news/$prevKey", $lang) ?>">
        ← <?= $lang === 'cn' ? '上一页' : ($lang === 'en' ? 'Previous' : '上一頁') ?>
        <span>
          <?= htmlspecialchars($newsList[$prevKey]['title'][$lang] ?? $newsList[$prevKey]['title']['zh']) ?>
        </span>
      </a>
    <?php endif; ?>

    <!-- 返回 -->
    <a href="<?= buildUrl('news', $lang) ?>" class="btn-back-to-list">
      <?= $lang === 'cn' ? '回最新消息' : ($lang === 'en' ? 'Back to News' : '回最新消息') ?>
    </a>

    <!-- 下一則 -->
    <?php if ($nextKey && isset($newsList[$nextKey])): ?>
      <a class="btn-next text-end"
        href="<?= buildUrl("news/$nextKey", $lang) ?>">
        <span>
          <?= htmlspecialchars($newsList[$nextKey]['title'][$lang] ?? $newsList[$nextKey]['title']['zh']) ?>
        </span>
        <?= $lang === 'cn' ? '下一页' : ($lang === 'en' ? 'Next' : '下一頁') ?> →
      </a>
    <?php endif; ?>
  </div>
</section>