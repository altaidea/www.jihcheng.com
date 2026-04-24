<?php
$news = include __DIR__ . '/../data/news-data.php';

// ---------------------------
// ⭐ 功能開關
// ---------------------------
$showPerPageSelector = false; // 設為 true 顯示，false 隱藏

// ---------------------------
// ⭐ 1. 取得目前頁碼與每頁筆數
// ---------------------------
$perPageOptions = [10, 20, 30];
$perPage = isset($_GET['per']) && in_array((int)$_GET['per'], $perPageOptions)
    ? (int)$_GET['per']
    : 9;

// 這裡維持抓取 $_GET['page']，因為路由會把 /page/n 轉換進來
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;

// ---------------------------
// ⭐ 2. 分頁邏輯
// ---------------------------
$totalItems = count($news);
$totalPages  = ceil($totalItems / $perPage);

// ⚡ 防禦：如果總頁數為 0 (沒新聞)，確保頁碼至少為 1，避免 offset 算出負值
if ($totalPages < 1) $totalPages = 1;
// 限制頁碼不要超過
if ($page > $totalPages) $page = $totalPages;

// 取出分頁後的資料
$offset = ($page - 1) * $perPage;
$currentNews = array_slice($news, $offset, $perPage, true);

// ======================================================
// ⭐ News 列表頁 SEO 注入
// ======================================================

// 1. 取得當前頁面所有新聞標題 (作為 Description 與 Keywords 的素材)
$newsTitles = array();
foreach ($currentNews as $item) {
    $titleText = $item['title'][$lang] ?? $item['title']['zh'] ?? '';
    if ($titleText) $newsTitles[] = trim(strip_tags($titleText));
}
$titlesString = implode(', ', $newsTitles);

// 2. 定義基礎標題 (根據語系)
$baseNewsTitle = ($lang === 'en') ? 'Latest News' : '最新消息';
$pageSuffix = ($page > 1) ? " - Page $page" : "";

// 3. 淨化文字 (清除所有換行與多餘空白)
$seoTitle = $baseNewsTitle . $pageSuffix . ' | 紀正機械有限公司';
$seoDesc  = ($lang === 'en' ? 'Stay updated with ' : '掌握紀正機械最新動態：') . $titlesString;
$seoDesc  = preg_replace('/\s+/', '', $seoDesc); // 清除空白
$seoDesc  = mb_strimwidth($seoDesc, 0, 160, "...", "UTF-8");

$seoKeys  = $baseNewsTitle . ',' . implode(',', $newsTitles);
$seoKeys  = preg_replace('/\s+/', '', $seoKeys); // 清除空白

// 4. ✨ 核心注入：同步至全域與 langStrings
$GLOBALS['page_title']       = $seoTitle;
$GLOBALS['page_description'] = $seoDesc;
$GLOBALS['page_keywords']    = $seoKeys;

$langStrings['page_title']       = $seoTitle;
$langStrings['page_description'] = $seoDesc;
$langStrings['page_keywords']    = $seoKeys;
?>

<!-- ⭐ 顯示每頁筆數下拉 -->
<?php /*
<div class="container perpage" data-aos="fade-up">
  <form method="get">
    <label class="fw-bold">Items per page : </label>
    <select name="per" class="form-select w-auto" onchange="this.form.submit()">
      <option value="">10</option>
    </select>
  </form>
</div>
*/?>

<section class="news-section section page-wrapper-inner">

  <!-- 最新消息卡片 -->
  <div class="container">
    <div class="row news-list">
      <?php 
        $delay = 0;
        foreach ($currentNews as $key => $item): 
        // 預抓取標題與內容以確保語系安全
        $displayTitle = $item['title'][$lang] ?? $item['title']['zh'];
        $displayInfo = $item['info'][$lang] ?? $item['info']['zh'];
        $displayContent = $item['content'][$lang] ?? $item['content']['zh'];
      ?>
      <a href="<?= buildUrl("news/$key", $lang) ?>" 
        class="col-lg-4 col-md-6 card-block" 
        data-aos="fade-up"
        data-aos-delay="<?= $delay ?>">
        
        <div class="card news-card">
          <div class="news-card-body">
            <div class="news-card-content">
              <h5 class="news-title"><?= $displayTitle ?></h5>
              <div class="news-excerpt">
                <?= $displayInfo ?>
              </div>
            </div>
          </div>

          <div class="news-card-img">
            <img src="<?= $basePath ?>/assets/img/news/<?= $item['images'] ?>" 
                alt="<?= $displayTitle ?>">
          </div>

          <div class="news-card-body">
            <div class="new-more-btn marquee-style">
              <span class="btn-text">
                <?= $langStrings['learn_more'] ?? 'Learn more' ?>
              </span>
              <div class="icon-circle">
                <div class="icon-group">
                  <i class="bi bi-arrow-right"></i>
                  <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <?php 
        $delay += 50; // ⭐ AOS delay 每則 +50ms
        endforeach; 
      ?>
      
    </div>
  </div>

  <!-- ⭐ pagination 分頁選單 -->
  <?php if ($totalPages > 1): ?>
  <div class="container" data-aos="fade-up">
    <ul class="pagination justify-content-center">

      <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
        <?php 
          // ⚡ 依照 Search 邏輯生成路徑 /news/page/n.html
          $prevUrl = ($page > 1) ? buildUrl("$safePath/page/" . ($page - 1), $lang) : 'javascript:void(0)';
        ?>
        <a class="page-link" href="<?= $prevUrl ?>">&laquo;</a>
      </li>

      <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <li class="page-item <?= $i == $page ? 'active' : '' ?>">
          <a class="page-link" href="<?= buildUrl("$safePath/page/$i", $lang) ?>">
            <?= $i ?>
          </a>
        </li>
      <?php endfor; ?>

      <li class="page-item <?= $page >= $totalPages ? 'disabled' : '' ?>">
        <?php 
          $nextUrl = ($page < $totalPages) ? buildUrl("$safePath/page/" . ($page + 1), $lang) : 'javascript:void(0)';
        ?>
        <a class="page-link" href="<?= $nextUrl ?>">&raquo;</a>
      </li>

    </ul>
  </div>
  <?php endif; ?>

</section>