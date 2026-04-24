<?php 
  // 1. 取得資料
  $allProductsResult = include __DIR__ . '/../data/products-data.php';
  $allProductsData   = isset($allProductsResult['all_series']) ? $allProductsResult['all_series'] : $allProductsResult;
  
  // 取得參數
  $catKey           = $_GET['categoryType'] ?? ''; 
  $currentSeriesKey = $_GET['seriesKey'] ?? '';
  $seriesData       = isset($allProductsData[$currentSeriesKey]) ? $allProductsData[$currentSeriesKey] : null;

  // 🎯 判定當前模式：確保連結與來源一致
  $isApplicationMode = !empty($catKey);

  // 2. 安全檢查
  if (!$seriesData) { 
      include __DIR__ . '/404.php'; 
      exit; 
  }

  // 3. 準備麵包屑所需資料
  $productsData = $allProductsResult; 

  // 4. 系列資料處理 (保持單純)
  $seriesTitle     = $seriesData['title'][$lang] ?? $seriesData['title']['zh'] ?? '';
  $seriesTitleText = trim(strip_tags($seriesTitle));
  // $seriesIntro     = $seriesData['series']['intro'][$lang] ?? $seriesData['series']['intro']['zh'] ?? '';
  $seriesIntro     = $seriesData['intro'][$lang] ?? $seriesData['intro']['zh'] ?? '';

  // 產品列表 (排除 Metadata)
  $productsList = $seriesData['series'];
  unset($productsList['intro'], $productsList['slug']);

  // ======================================================
  // 5. Meta 與 Path 處理
  // ======================================================
  if (!isset($path)) { 
      $path = $isApplicationMode 
              ? "application/{$catKey}/{$currentSeriesKey}" 
              : "products/{$currentSeriesKey}";
  }

  $productTitlesText = [];
  foreach ($productsList as $product) {
      $pTitle = $product['title'][$lang] ?? $product['title']['en'] ?? '';
      if (!empty($pTitle)) { $productTitlesText[] = strip_tags($pTitle); }
  }
  $productsSuffix = !empty($productTitlesText) ? ', ' . implode(', ', $productTitlesText) : '';

  $langStrings['page_title']       = $seriesTitleText;
  $langStrings['page_keywords']    = $seriesTitleText;
  // $fullDescription                 = $seriesTitleText . $productsSuffix . ', ' . strip_tags($seriesIntro);
  $fullDescription                 = $seriesTitleText . $productsSuffix;
  // $langStrings['page_description'] = mb_strimwidth($fullDescription, 0, 160, "...", 'UTF-8');
  $langStrings['page_description'] = $fullDescription;

  $pageTitle = $seriesTitle;
?>

<section class="page-wrapper-inner">
  <div class="container">
    <div class="title-wrapper">
      <h2><?= $seriesTitle?></h2>
      <p><?= $seriesIntro?></p>
    </div>

    <div class="row products-list-wrapper gutter-80">
      <?php foreach ($productsList as $pKey => $product): ?>
        <?php 
          // 1. 基本資料解析
          $pSlug = $product['slug'] ?? $pKey;
          $pTitle = $product['title'][$lang] ?? $product['title']['en'];
          $pImg = isset($product['images'][0]) ? $product['images'][0] : 'default.jpg';

          // ⭐ 核心修正：取得第一張圖 (Index 0) 的客製化 Class
          $customClass = $product['image_class'][0] ?? '';
          
          // 2. 路由判斷邏輯
          if ($isApplicationMode) {
              $detailUrl = buildUrl("application/{$catKey}/{$currentSeriesKey}/{$pSlug}", $lang);
          } else {
              $detailUrl = buildUrl("products/{$currentSeriesKey}/{$pSlug}", $lang);
          }
        ?>
        <div class="col-md-6 products-series-card-wrapper">
          <a href="<?= $detailUrl ?>">
            <div class="products-series-card">
              <div class="card-body">
                <div class="card-img">
                  <?php 
                    $imgSrc = $basePath . "/assets/img/products/{$currentSeriesKey}/{$pSlug}/{$pImg}";
                  ?>
                  <img src="<?= $imgSrc ?>" 
                       title="<?= htmlspecialchars(strip_tags($pTitle)) ?>" 
                       alt="<?= htmlspecialchars(strip_tags($pTitle)) ?>" 
                       class="<?= htmlspecialchars($customClass) ?>"
                       loading="lazy">
                </div>
                <div class="card-title">
                  <p><?= $pTitle ?></p>
                </div>
              </div>
            </div>
          </a>
        </div> <?php endforeach; ?>
    </div>
  </div>
</section>