<?php 
  // 獲取最終合併後的純淨陣列
  $productsData = include __DIR__ . '/../data/products-data.php';
  
  // 提醒：確保抓取的是 'all_series' 層級
  $allSeries = isset($productsData['all_series']) ? $productsData['all_series'] : $productsData;
  
  // 效能檢查
  if (empty($allSeries)) {
      error_log("Warning: product series data is empty.");
  }

  // 語言包
  $PageInfoTitle = [
    'zh' => '產品系列',
    'cn' => '产品系列',
    'en' => 'Products Series',
    'ko' => '제품 시리즈'
  ];

  $seriesLabels = [
    'zh' => '系列',
    'en' => 'Series',
    'ko' => '시리즈'
  ];
?>

<section class="page-wrapper-inner">
  <div class="container">
    <div class="title-wrapper">
      <h2><?= $PageInfoTitle[$lang] ?? ''; ?></h2>
      <p><?= $langStrings['products_description'] ?? '' ?></p>
    </div>

    <div class="row products-list-wrapper gutter-80">
      <?php foreach ($allSeries as $seriesKey => $series): ?>
        <?php 
          // 1. 取得系列標題
          $catTitle = $series['title'][$lang] ?? $series['title']['en'] ?? '';

          // 2. 取得系列描述 (若有專屬 description 欄位則取之，否則取 info)
          $catDesc = $series['description'][$lang] ?? $series['description']['en'] ?? $series['info'][$lang] ?? '';

          // 3. 取得該系列的首張圖片
          $firstImgData = $series['images'][0] ?? null;
          $catMainImg   = $firstImgData['src'] ?? 'img-product-demo.webp';

          // ⭐ 核心修正：取得資料結構中的 image_class
          $catImgClass  = $firstImgData['image_class'] ?? '';

          // 4. 格式化標題
          $formattedTitle = htmlspecialchars($catTitle, ENT_QUOTES, 'UTF-8');

          // 5. 連結至該系列的列表頁
          $seriesUrl = buildUrl("products/{$seriesKey}", $lang);
        ?>
        
        <div class="col-md-6 products-card-wrapper">
          <div class="card-product-series">
            <a href="<?= $seriesUrl ?>">
              <div class="products-card">
                <div class="card-img">
                  <?php 
                    // 這裡沿用您的路徑邏輯：/assets/img/products/系列Key/圖片名
                    $imgSrc = $basePath . '/assets/img/products/' . $seriesKey . '/' . $catMainImg. '?v=' . time();
                  ?>
                  <img src="<?= $imgSrc ?>" title="<?= $formattedTitle ?>" alt="<?= $formattedTitle ?>" loading="lazy" class="<?= htmlspecialchars($catImgClass) ?>">
                </div>

                <div class="card-body">
                  <span class="card-subtitle"><?= $seriesLabels[$lang] ?? $seriesLabels['en']; ?></span>
                  
                  <div class="card-title">
                    <?= $formattedTitle ?>
                  </div>

                  <?php if (!empty($catDesc)): ?>
                    <div class="card-content">
                      <?= mb_strimwidth(strip_tags($catDesc), 0, 180, '...') ?>
                    </div>
                  <?php endif; ?>

                  <div class="more-btn">
                    <span><?= $langStrings['learn_more'] ?? 'Learn More' ?></span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>