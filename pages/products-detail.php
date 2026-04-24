<?php
  /**
   * Products Detail Refactoring
   * 依賴變數: $lang (預設 'en' 或 'zh'), $basePath
   */

  // 告訴 layout.php，這一頁需要這些特供的腳本
  $pageScripts = array(
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    'pages/products-detail.js',
  );

  // 1. 載入資料
  $allProductsResult = include __DIR__ . '/../data/products-data.php';

  // ⭐ 關鍵修正：指向正確的資料房間，同時保持變數名稱不變以相容後續邏輯
  $allProductsData = isset($allProductsResult['all_series']) ? $allProductsResult['all_series'] : $allProductsResult;

  // 2. 取得路由參數 (假設 URL 為 products/seriesKey/productKey)
  $seriesKey  = $_GET['seriesKey'] ?? '';
  $productKey = $_GET['productKey'] ?? '';

  // 3. 提取當前產品資料
  $seriesData = $allProductsData[$seriesKey] ?? null;
  $product    = $seriesData['series'][$productKey] ?? null;

  // 4. 安全檢查：若找不到產品則導向 404
  if (!$seriesData || !$product) {
      include __DIR__ . '/404.php';
      return;
  }

  // ======================================================
  // ⭐ 備份並還原變數以供麵包屑使用
  // ======================================================
  // 備份關鍵變數
  $_backup_seriesKey = $seriesKey;
  $_backup_productKey = $productKey;

  // 將完整資料暫存給麵包屑使用
  $productsData = $allProductsResult;

  // 還原變數，確保後續圖片路徑正確
  $seriesKey = $_backup_seriesKey;
  $productKey = $_backup_productKey;

  // =============================================================
  // ⭐ 提取原始資料 (取得時同步進行語系化空白清理)
  // =============================================================

  // 1. 產品名稱與系列名稱 (中文清除所有空格，英文保留)
  $rawName = $product['title'][$lang] ?? $product['title']['en'] ?? '';

  // 修改這裡：在產品詳情頁面，我們允許特定標籤通過，不直接全部 strip_tags
  $allowed_tags = '<br><br/><sub><sup><span>';

  $productNameRaw = ($lang === 'zh') 
    ? preg_replace('/[\s　]+/u', '', strip_tags($rawName, $allowed_tags)) 
    : trim(strip_tags($rawName, $allowed_tags));

  $rawSeriesName = $seriesData['title'][$lang] ?? $seriesData['title']['zh'] ?? '';
  $seriesNameRaw = ($lang === 'zh') 
      ? preg_replace('/[\s　]+/u', '', strip_tags($rawSeriesName)) 
      : trim(strip_tags($rawSeriesName));

  // 2. 產品型號/類型 (通常包含斜線或英文，中文版同樣建議清除空格以保持緊湊)
  $typeTextRaw = ($lang === 'zh') 
      ? preg_replace('/[\s　]+/u', '', strip_tags($product['type'] ?? '')) 
      : trim(strip_tags($product['type'] ?? ''));

  // 3. 特色介紹與適用範圍 (針對 Meta Description 使用，清除空格可增加資訊密度)
  $rawFeatures = $product['features']['intro'][$lang] ?? '';
  $featuresIntroRaw = ($lang === 'zh') 
      ? preg_replace('/[\s　]+/u', '', strip_tags($rawFeatures)) 
      : trim(strip_tags($rawFeatures));

  $rawApps = $product['applications']['intro'][$lang] ?? '';
  $applicationsIntroRaw = ($lang === 'zh') 
      ? preg_replace('/[\s　]+/u', '', strip_tags($rawApps)) 
      : trim(strip_tags($rawApps));

  // 4. 取得影片資料陣列
  $videos = isset($product['video']) && is_array($product['video']) ? $product['video'] : []; 

  // ======================================================
  // ⭐ 注入路徑校正 (影響 Body Class 與 Meta)
  // ======================================================

  // 判定軌道
  $routeSource = isset($_GET['from']) ? $_GET['from'] : 'products';
  $isAppTrack  = ($routeSource === 'application');

  if (!isset($path)) {
      if ($isAppTrack) {
          // 取得分類 (優先從 Session 拿，否則從資料拿)
          $activeCat = $_SESSION['last_category'] ?? $seriesData['category_tags'][0] ?? 'others';
          $path = "application/{$activeCat}/{$seriesKey}/{$productKey}";
      } else {
          $path = "products/{$seriesKey}/{$productKey}";
      }
  }

  // 讓 Layout 知道目前的純路徑（不含 .html）
  $currentPath = $path;

  // ======================================================
  // ⭐ Products Swiper 判定最終要使用的圖片陣列
  // ⭐ 保持 HTML 代碼乾淨
  // ======================================================
  // ⭐ 核心邏輯：判斷要使用的圖片陣列
  // 檢查 images_ml[$lang] 是否存在且為非空陣列
  if (!empty($product['images_ml'][$lang]) && is_array($product['images_ml'][$lang])) {
      $finalImages = $product['images_ml'][$lang];
  } else {
      // 若為空字串、Null 或沒設定，則取用通用圖片
      $finalImages = $product['images'] ?? [];
  }

  // 取得產品名稱 (SEO 使用)
  $productTitle = $product['title'][$lang] ?? $product['title']['en'] ?? '';

  // ======================================================================
  // ⭐ SEO Meta 注入 (比照成功案例：純淨文字處理)
  // ⭐ SEO Meta 注入 (優先取用資料庫設定，其次自動串接) ⭐ 20260420 更新版本
  // ======================================================================

  // --- 取得當前語系 ---
  $l = $lang; // 簡寫以便閱讀

  // --- A. Meta Title 判定 ---
  $customTitle = $product['seo_title'][$l] ?? '';
  if (!empty($customTitle)) {
      $finalTitle = $customTitle;
  } else {
      // 沒設就自動抓產品名
      $finalTitle = $productNameRaw;
  }
  $langStrings['page_title'] = htmlspecialchars(strip_tags($finalTitle), ENT_QUOTES, 'UTF-8');


  // --- B. Meta Description 判定 ---
  $customDesc = $product['seo_description'][$l] ?? '';
  if (!empty($customDesc)) {
      $finalDesc = $customDesc;
  } else {
      // 沒設就自動串接：系列簡介 + 特色介紹 + 適用範圍
      // ⭐ 將原本的 $seriesData['intro'] 改為 $product['intro']
      $rawProductIntro = $product['intro'][$l] ?? '';
      $seriesIntroRaw = ($l === 'zh') 
          ? preg_replace('/[\s　]+/u', '', strip_tags($rawProductIntro)) 
          : trim(strip_tags($rawProductIntro));

      $descriptionParts = array_filter([
          $seriesIntroRaw,
          $featuresIntroRaw,
          $applicationsIntroRaw,
      ]);
      $finalDesc = implode(', ', $descriptionParts);
  }
  
  // ⭐ 重點：這裡移除 htmlspecialchars，只保留 strip_tags，確保變數內是純文字
  $langStrings['page_description'] = trim(strip_tags($finalDesc));


  // --- C. Meta Keywords 判定 ---
  $customKeys = $product['seo_keywords'][$l] ?? '';
  if (!empty($customKeys)) {
      $finalKeys = $customKeys;
  } else {
      // 沒設就自動串接
      $keywordsParts = array_filter([
          $productNameRaw,
          $seriesNameRaw,
          $typeTextRaw,
      ]);
      $finalKeys = implode(', ', $keywordsParts);
  }
  $langStrings['page_keywords'] = htmlspecialchars(strip_tags($finalKeys), ENT_QUOTES, 'UTF-8');

  // ======================================================
  // ⭐ 注入給 layout.php 的第一順位變數 ($path_title)
  // ======================================================
  if (!isset($path)) { $path = $currentPath ?? "products/{$seriesKey}/{$productKey}"; }

  $langStrings[$path . '_title']       = $langStrings['page_title'];
  $langStrings[$path . '_description'] = $langStrings['page_description'];
  $langStrings[$path . '_keywords']    = $langStrings['page_keywords'];

  // 覆蓋全局變量：讓 Page Header 顯示產品名稱
  // $pageTitle = strip_tags($productNameRaw); // 移除html標籤
  $pageTitle = $productNameRaw;

  // ⭐ 語言包 // 規格表標題 ⭐⭐⭐ 優先補齊
  $featureTitle = [
    'zh' => '產品特色',
    'cn' => '产品特色',
    'en' => 'FEATURES',
    'ko' => '제품 특징'
    // 'sample' => '' // 這裡是空字串，不是 NULL
  ];

  $specTitle = [
    'zh' => '規格說明',
    'cn' => '规格说明',
    'en' => 'SPECIFICATIONS',
    'ko' => '사양 정보'
  ];

  $viderTitle = [
    'zh' => '影片介紹',
    'cn' => '视频介绍',
    'en' => 'VIDEO',
    'ko' => '동영상 소개'
  ];

  $downloadBtn = [
    'zh' => '型錄下載',
    'cn' => '型录下载',
    'en' => 'Download',
    'ko' => '카탈로그 다운로드'
  ];

  $productswipermenu = [
    'zh' => '產品系列',
    'cn' => '产品系列',
    'en' => 'Products Series',
    'ko' => '제품 시리즈'
  ];
?>

<section class="page-wrapper-inner">
  <!-- #1 產品介紹區塊 -->
  <div class="product-wrapper">
    <div class="container">

      <div class="row">
        
        <div class="col-lg-6 products-photo-wrapper">

          <!-- main-photo-swiper -->
          <div class="swiper main-photo-swiper">
            <div class="swiper-wrapper">
              <?php 
                foreach ($finalImages as $index => $img):
                if (empty($img)) continue;

                // 樣式與標題邏輯
                $customClass = $product['image_class'][$index] ?? '';
                $currentCaption = !empty($product['image_titles'][$index][$lang]) 
                                  ? $product['image_titles'][$index][$lang] 
                                  : $productTitle;
              ?>
                <div class="swiper-slide">
                  <div class="main-img-container" style="position: relative;">
                    <img src="<?= asset("assets/img/products/$seriesKey/$productKey/$img") ?>" 
                        title="<?= htmlspecialchars(strip_tags($productTitle)) ?>" 
                        alt="<?= htmlspecialchars(strip_tags($productTitle)) ?>" 
                        class="<?= htmlspecialchars($customClass) ?>"
                        loading="lazy">
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <button type="button" id="globalZoomBtn" class="zoom-trigger-btn" 
                    data-bs-toggle="modal" 
                    data-bs-target="#photoGalleryModal">
              <i class="bi bi-search"></i> 
            </button>
          </div>
          
          <!-- 原本photoGalleryModal的位置 -->
        </div>

        <div class="col-lg-6 products-intro">
          <div class="header-wrapper">
            <div class="series-name"><?= $seriesData['title'][$lang] ?></div>
            <div class="downloadBtn-wrapper">
              <?php 
                // 1. 取得當前語系的下載清單 (備援機制同前)
                $currentLangDownloads = $product['download'][$lang] ?? ($product['download']['en'] ?? []);

                if (!empty($currentLangDownloads) && is_array($currentLangDownloads)):
                    foreach ($currentLangDownloads as $dl): 
                        $fileName = $dl['file'] ?? '';
                        $label    = trim($dl['label'] ?? ''); // 確保移除空白
                        
                        if (empty($fileName)) continue;

                        // 2. ⭐ 核心邏輯修正：如果 $label 有資料，則不顯示 $downloadBtn
                        // 如果 $label 為空，則顯示預設的「型錄下載 (Download)」
                        if (!empty($label)) {
                            $btnText = htmlspecialchars($label);
                        } else {
                            $btnText = $downloadBtn[$lang] ?? $downloadBtn['en'];
                        }

                        $filePath = $basePath . '/assets/files/' . $fileName;
              ?>
                <a href="<?= $filePath ?>" class="download-btn" download title="<?= $btnText ?>">
                    <i class="bi bi-cloud-arrow-down"></i>
                    <span><?= $btnText ?></span>
                </a>
              <?php 
                endforeach;
                endif; 
              ?>
            </div>
          </div>
          <!-- 產品 標題 -->
          <h1 class="product-title"><?= $product['title'][$lang] ?></h1>
          <!-- 產品 說明 -->
          <div class="product-description">
            <?= $product['intro'][$lang] ?? $product['intro']['en'] ?>
          </div>
          <!-- 產品 Swiper Thumbs Photo -->
          <div thumbsSlider="" class="swiper thumbs-photo-swiper">
            <div class="swiper-wrapper">
              <?php foreach ($finalImages as $img): ?>
                <?php if (empty($img)) continue; ?>
                <div class="swiper-slide">
                  <div class="thumb-box">
                    <img src="<?= asset("assets/img/products/$seriesKey/$productKey/$img") ?>" 
                        title="<?= htmlspecialchars(strip_tags($productTitle)) ?>"     
                        alt="<?= htmlspecialchars(strip_tags($productTitle)) ?>" 
                        class="img-fluid <?= htmlspecialchars($customClass) ?>"
                        loading="lazy">
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  
  <!-- #2 產品詳細說明介紹 -->
  <div class="product-info">
    <div class="container">

    <div class="feature-wrapper">
        <div class="title">
            <h4><?= !empty($featureTitle[$lang]) ? $featureTitle[$lang] : $featureTitle['en']; ?></h4>
        </div>

        <?php 
          $features = isset($product['features']) ? $product['features'] : []; 
          
          // 重置索引計數，確保隱藏某些項目後，左右順序（奇偶數）依然是正確交錯的
          $displayIndex = 0;

          foreach ($features as $f): 
            // 1. 處理語系文字內容 (不設定 Default，因為我們要判斷是否為空)
            $fTitle = $f['title'][$lang] ?? '';
            $fDesc  = $f['description'][$lang] ?? '';

            // ⭐ 核心邏輯：如果標題或描述為空，則直接跳過不顯示這一列
            if (empty(trim($fTitle)) || empty(trim($fDesc))) {
                continue;
            }

            // 2. 處理語系圖片 (優先抓當前語系圖片，若沒設則抓預設 image)
            // 優先順序：當前語系圖片 > 英文圖片 > 繁中圖片 > 該陣列第一個圖片
            $fImg = !empty($f['images'][$lang]) ? $f['images'][$lang] : ($f['images']['en'] ?? $f['images']['zh'] ?? reset($f['images']));

            // 3. 計算排版方向 // 判斷奇偶數 (以實際顯示的數量來計算)
            $isEven = ($displayIndex % 2 === 0);
            $reverseClass = $isEven ? "" : "flex-column-reverse flex-lg-row-reverse";
            
            // 增加顯示計數
            $displayIndex++;
        ?>
        <div class="row <?= $reverseClass ?>"> 
      
          <div class="col-lg-6 inner-bolck">
            <div class="info-block" data-aos="<?= $isEven ? 'fade-right' : 'fade-left' ?>">
              <h5><?= htmlspecialchars($fTitle) ?></h5>
              <p>
                <?= nl2br(htmlspecialchars($fDesc)) ?>
              </p>
            </div>
          </div>

          <div class="col-lg-6 inner-bolck">
            <div class="img-block" data-aos="<?= $isEven ? 'fade-left' : 'fade-right' ?>">
              <?php 
                // 1. 取得當前語系的圖片資料
                // 優先順序：當前語系資料 > 英文資料 > 繁中資料 > 陣列第一個
                $fImgData = !empty($f['images'][$lang]) 
                            ? $f['images'][$lang] 
                            : ($f['images']['en'] ?? $f['images']['zh'] ?? reset($f['images']));

                // 2. 分解出圖片名稱與 Class
                // 如果資料結構是新的陣列格式，則取 src；如果是舊的純字串，則直接用字串
                $fImgName  = is_array($fImgData) ? ($fImgData['src'] ?? '') : $fImgData;
                $fImgClass = is_array($fImgData) ? ($fImgData['class'] ?? '') : '';

                // 3. 組合完整路徑
                $fImgPath = asset("assets/img/products/{$seriesKey}/{$productKey}/{$fImgName}");
                $cleanTitle = htmlspecialchars(strip_tags($fTitle));
              ?>
              <img src="<?= $fImgPath ?>" 
                  title="<?= $cleanTitle ?>" 
                  alt="<?= $cleanTitle ?>" 
                  class="<?= htmlspecialchars($fImgClass) ?>"
                  loading="lazy">
            </div>
          </div>

        </div>
        <?php endforeach; ?>
    </div>
      
      <!-- 產品規格表 -->
      <div class="spec-wrapper">
        <div class="title"><h4><?= $specTitle[$lang] ?? $specTitle['en']; ?></h4></div>
        <div class="table-responsive">
          <?= $product['spec']['table'][$lang] ?? $product['spec']['table']['en'] ?>
        </div>
      </div>
      
      <!-- 產品影片 -->
      <?php if (!empty($videos)): ?>
      <div class="video-wrapper">
        <div class="title"><h4><?= $viderTitle[$lang] ?? $viderTitle['en']; ?></h4></div>
        <div class="container video-container">
          <div class="row justify-content-center">
            <?php 
              // 1. 先計算有效的影片數量
              $videoCount = count(array_filter($videos, function($v) { return !empty($v['id']); }));

              // 2. 根據數量設定 Bootstrap 的欄位寬度
              // lg 以上（電腦版）
              if ($videoCount === 1) {
                  $colClass = "col-lg-7"; // 只有一個時，佔據 9 份（很大）
              } elseif ($videoCount === 2) {
                  $colClass = "col-lg-5 gx-5"; // 兩個時，一人一半
              } else {
                  $colClass = "col-lg-4"; // 三個（或以上）時，三分之一
              }
            ?>

            <?php foreach ($videos as $v): ?>
            <?php 
                $vId = $v['id'] ?? '';
                $vTitle = $v['title'][$lang] ?? $v['title']['en'] ?? '';
                if (empty($vId)) continue;
            ?>
            <div class="<?= $colClass ?>">
                <div class="video-inner">
                    <iframe 
                      src="https://www.youtube.com/embed/<?= htmlspecialchars($vId) ?>?rel=0" 
                      title="<?= htmlspecialchars($vTitle) ?>" 
                      frameborder="0" 
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                      allowfullscreen>
                    </iframe>
                    <p><?= htmlspecialchars($vTitle) ?></p>
                </div>
            </div>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>

  <!-- #3 更多產品區塊 -->
  <div class="prodocts-series-wrapper">
    <div class="container">
      <div class="title"><h4><?= $productswipermenu[$lang] ?? $productswipermenu['en']; ?></h4></div>

      <div class="swiper products-series-swiper">
        <div class="swiper-wrapper">
          <?php 
              // 遍歷所有產品系列
              foreach ($allProductsData as $key => $series): 
              // 1. 取得系列標題
              $displayTitle = $series['title'][$lang] ?? $series['title']['en'] ?? $key;
              
              // 2. 取得圖片與 Class (從 images 陣列抓取第一筆資料)
              $firstImgData = $series['images'][0] ?? null;
              $fileName = !empty($firstImgData['src']) ? basename($firstImgData['src']) : '';
              
              // ⭐ 提取 CSS Class (如 bg-multiply)
              $catImgClass = $firstImgData['image_class'] ?? ''; 
              
              // 3. 路徑邏輯
              $imgSrc = $basePath . '/assets/img/products/' . $key . '/' . $fileName;
              $finalImgSrc = $imgSrc . '?v=' . time();
              
              // 5. 組合連結
              $seriesLink = buildUrl("products/$key", $lang);
          ?>
          <div class="swiper-slide product-slide">
              <a href="<?= $seriesLink ?>">
                  <div class="product-image-box">
                      <?php if (!empty($fileName)): ?>
                          <img src="<?= $finalImgSrc ?>" 
                              alt="<?= htmlspecialchars($displayTitle) ?>" 
                              class="img-fluid d-block <?= htmlspecialchars($catImgClass) ?>" 
                              loading="lazy">
                      <?php else: ?>
                          <img src="<?= $basePath ?>/assets/img/home/default-series.jpg" 
                              alt="No Image" 
                              class="img-fluid d-block">
                      <?php endif; ?>
                  </div>
                  <h3 class="product-title"><?= htmlspecialchars($displayTitle) ?></h3>
              </a>
          </div>
          <?php endforeach; ?>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>