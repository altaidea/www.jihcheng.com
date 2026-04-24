<?php
  // 在 PHP 標籤內部，直接調用函數並串接字串即可
  $pageScripts = array(
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    asset('assets/js/pages/home.js') 
  );

  // 2. 語言包：必須賦值給變數，且整體是一個大陣列
    $homeLang = array(
      // 繁體中文
      'zh' => array(
          'home_prod_title' => '產品介紹',
          'home_prod_desc'  => '紀正機械為製藥、食品及化妝品行業提供符合 cGMP 標準的自動化解決方案。我們融合了歐美日的先進技術，在台灣製藥業擁有超過 80% 的市場份額，確保為全球客戶提供卓越的精度、安全性與運營效率。',
          'home_about_title' => '關於紀正',
          'home_about_desc'  => '紀正機械專精於提供符合 cGMP 標準的充填、鎖蓋、貼標及裝盒自動化設備。我們在台灣製藥領域擁有超過 80% 的領先地位，是全球食品、化妝品及化工企業信賴的合作夥伴。我們的出口網絡橫跨北美、中東及東南亞；憑藉 2001 年成立的上海分公司，我們能為全球客戶提供無縫的技術支援與高效能的自動化解決方案。',

          'home_company_belief_title' => '品質政策',
          'home_company_belief_subtitle' => '顧客滿意的笑容，是我們服務的動力',
          'home_company_belief_icon1' => '提升生產效率',
          'home_company_belief_icon2' => '降低能源損耗',
          'home_company_belief_icon3' => '提升產品品質',
          'home_company_belief_icon4' => '符合衛生安全標準',

          'home_catalog_title' => '線上型錄',
          'home_catalog_desc'  => '我們的自動化生產線——涵蓋液體充填、粉末充填、鎖蓋、貼標及裝盒——完全符合 cGMP 與 GMP 規範。',
          'home_learn_more' => '了解更多',
      ),

      // 簡體中文
      'cn' => array(
        'home_prod_title' => '产品介绍',
        'home_prod_desc'  => '纪正机械为制药、食品及化妆品行业提供符合 cGMP 标准的自动化解决方案。我们融合了欧美日的先进技术，在台湾制药业拥有超过 80% 的市场份额，确保为全球客户提供卓越的精度、安全性与运营效率。',
        'home_about_title' => '关于纪正',
        'home_about_desc'  => '纪正机械专精于提供符合 cGMP 标准的灌装、旋盖、贴标及装盒自动化设备。我们在台湾制药领域拥有超过 80% 的领先地位，是全球食品、化妆品及化工企业信赖的合作伙伴。我们的出口网络横跨北美、中东及东南亚；凭借 2001 年成立的上海分公司，我们能为全球客户提供无缝的技术支持与高效能的自动化解决方案。',

        'home_company_belief_title' => '品质政策',
        'home_company_belief_subtitle' => '顾客满意的笑容，是我们服务的动力',
        'home_company_belief_icon1' => '提升生产效率',
        'home_company_belief_icon2' => '降低能源损耗',
        'home_company_belief_icon3' => '提升产品品质',
        'home_company_belief_icon4' => '符合卫生安全标准',

        'home_catalog_title' => '在线型录',
        'home_catalog_desc'  => '我们的自动化生产线——涵盖液体灌装、粉末灌装、旋盖、贴标及装盒——完全符合 cGMP 与 GMP 规范。',
        'home_learn_more' => '了解更多',
      ),
      
      // 英文
      'en' => array(
        'home_prod_title' => 'Products',
        'home_prod_desc'  => 'Jih Cheng Machinery provides cGMP-compliant automation for the pharma, food, and cosmetic sectors. Integrating technologies from Europe, the US, and Japan, we hold over 80% market share in Taiwan\'s pharmaceutical industry, ensuring superior precision, safety, and operational efficiency worldwide.',
        'home_about_title' => 'About Jih Cheng',
        'home_about_desc'  => 'Jih Cheng Machinery Technologies specializes in cGMP-compliant automation for filling, capping, labeling, and cartoning. With an 80%+ dominance in Taiwan\'s pharmaceutical sector, we are the trusted partner for leading food, cosmetic, and chemical enterprises worldwide. Our robust export network reaches from North America to the Middle East and Southeast Asia. Supported by our Shanghai branch (est. 2001), we provide seamless technical assistance and high-performance solutions to a growing global clientele.',

        'home_company_belief_title' => 'Company Belief',
        'home_company_belief_subtitle' => 'We help our customers become more competitive by',
        'home_company_belief_icon1' => 'Improving productivity',
        'home_company_belief_icon2' => 'Decreasing financial consumption',
        'home_company_belief_icon3' => 'Yielding higher quality products',
        'home_company_belief_icon4' => 'Achieving hygienic and safety standards',

        'home_catalog_title' => 'Catalog',
        'home_catalog_desc'  => 'Our automated production lines—including liquid filling, powder filling, capping, labeling, and cartoning—are fully compliant with cGMP and GMP regulations.',
        'home_learn_more' => 'Learn more',
      ),

      // 韓文
      'ko' => array(
        'home_prod_title' => '제품소개',
        'home_prod_desc'  => '지정기계(Jih Cheng Machinery)는 제약, 식품 및 화장품 분야에 cGMP를 준수하는 자동화 솔루션을 제공합니다. 유럽, 미국, 일본의 선진 기술을 통합하여 대만 제약 업계에서 80% 이상의 시장 점유율을 보유하고 있으며, 전 세계적으로 우수한 정밀도, 안전성 및 운영 효율성을 보장합니다.',
        'home_about_title' => '지정기계 소개',
        'home_about_desc'  => '지정기계(Jih Cheng Machinery Technologies)는 cGMP를 준수하는 충전, 캡핑, 라벨링 및 카토닝 자동화 설비를 전문으로 합니다. 대만 제약 분야에서 80% 이상의 압도적인 점유율을 기록하고 있으며, 전 세계 식품, 화장품 및 화학 기업의 신뢰할 수 있는 파트너입니다. 북미부터 중동, 동남아시아에 이르는 강력한 수출 네트워크를 보유하고 있으며, 2001년 설립된 상해 지사를 통해 글로벌 고객에게 완벽한 기술 지원과 고성능 자동화 솔루션을 제공합니다.',

        'home_company_belief_title' => '품질정책',
        'home_company_belief_subtitle' => '고객의 미소는 우리 서비스의 원동력입니다.',
        'home_company_belief_icon1' => '생산성 향상',
        'home_company_belief_icon2' => '에너지 소비 감소',
        'home_company_belief_icon3' => '고품질 제품 생산',
        'home_company_belief_icon4' => '위생 및 안전 표준 달성',

        'home_catalog_title' => '온라인 카탈로그',
        'home_catalog_desc'  => '액체 충전, 분말 충전, 캡핑, 라벨링 및 카토닝을 포함한 당사의 자동화 생산 라인은 cGMP 및 GMP 규정을 완벽하게 준수합니다.',
        'home_learn_more' => '자세히 보기',
      ),
    );

  // 3. 建議操作：將首頁專用語言合併到全域語言包 $langStrings
  if (isset($homeLang[$lang])) {
      $langStrings = array_merge($langStrings, $homeLang[$lang]);
  }

  // 產品專區
  // 1. 載入總資料
  $productsRaw = include __DIR__ . '/../data/products-data.php';
  $allSeries = $productsRaw['all_series'] ?? [];

  // 2. 攤平並過濾出要在首頁顯示的產品
  $homeProducts = [];

  foreach ($allSeries as $catKey => $category) {
      if (isset($category['series'])) {
          foreach ($category['series'] as $pKey => $product) {
              
              // ✅ 修正 1：安全檢查 home_show 是否存在且為 true
              // 使用 (?? false) 確保即便沒建置這個 Key，也會回傳 false
              if (($product['home_show'] ?? false) === true) {
                  
                  // ✅ 修正 2：補齊 home_sort 預設值
                  // 如果沒填 home_sort，預設給 9999 (保證沒填的會排在最後面)
                  $product['home_sort'] = $product['home_sort'] ?? 9999;
                  
                  $product['parent_cat'] = $catKey; 
                  $homeProducts[] = $product;
              }
          }
      }
  }

  // ✅ 修正 3：執行排序（現在保證每個項目都有 home_sort 了）
  usort($homeProducts, function($a, $b) {
      return $a['home_sort'] <=> $b['home_sort'];
  });

  // 型錄專區
  // 1. 載入型錄資料
  $catalogData = include __DIR__ . '/../data/catalogs-data.php';

  // 2. 過濾出需要在首頁顯示的項目
  $homeCatalogs = array_filter($catalogData, function($item) {
      return isset($item['homeshow']) && $item['homeshow'] === true;
  });

  // 最新消息專區
  // 1. 載入新聞資料
  $newsData = include __DIR__ . '/../data/news-data.php';

  // 2. 篩選出標註為 home_show 的文章
  $homeNews = array_filter($newsData, function($item) {
      return isset($item['home_show']) && $item['home_show'] === true;
  });

  // 3. 依據日期 (date) 進行排序 (由新到舊)
  uasort($homeNews, function($a, $b) {
      return strcmp($b['date'], $a['date']); // $b 在前表示降冪排序
  });

  // 4. (選填) 如果首頁只想顯示前 5 則
  $homeNews = array_slice($homeNews, 0, 5, true);
?>

<!-- Home // Products -->
<section class="section products">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-4 products-info-block">
        <article>
          <h2 class="title"><?php echo isset($langStrings['home_prod_title']) ? htmlspecialchars($langStrings['home_prod_title']) : 'Products'; ?></h2>
          <p>
            <?php echo isset($langStrings['home_prod_desc']) ? htmlspecialchars($langStrings['home_prod_desc']) : ''; ?>
          </p>
        </article>
        <a href="<?= buildUrl('products', $lang) ?>">
          <div class="more-btn">
            <span><?php echo isset($langStrings['home_learn_more']) ? htmlspecialchars($langStrings['home_learn_more']) : 'Learn More'; ?></span>
          </div>
        </a>
      </div>
      <div class="col-xl-8 products-swiper-block">

        <div class="custom-nav-btn-group">
          <div class="custom-nav-btn prev-btn">
            <i class="bi bi-chevron-left"></i>
          </div>

          <div class="custom-nav-btn next-btn">
            <i class="bi bi-chevron-right"></i>
          </div>
        </div>

        <div id="swiper" class="swiper products-swiper">
          <div class="swiper-wrapper">

            <?php foreach ($homeProducts as $p): ?>
            <div class="swiper-slide">
              <div class="products-card">
                <?php 
                  // 1. 取得分類 Slug 與產品 Slug 組合 URL
                  $pUrl = "products/{$p['parent_cat']}/{$p['slug']}";

                  // 2. 取得標題
                  $pTitle = $p['title'][$lang] ?? $p['title']['en'] ?? $p['title']['zh'] ?? 'Product';

                  // 3. 處理圖片
                  $homeImgArray = $p['images_ml'][$lang] ?? $p['images'] ?? [];
                  $pImg = !empty($homeImgArray[0]) ? $homeImgArray[0] : 'default.jpg';

                  // ⭐ 核心追加：提取該產品第一張圖對應的 CSS Class
                  // 邏輯：抓取該產品 image_class 陣列中的索引 0
                  $pImgClass = $p['image_class'][0] ?? '';

                  // 4. 組合完整路徑
                  $pImgPath = $basePath . '/assets/img/products/' . $p['parent_cat'] . '/' . $p['slug'] . '/' . $pImg;
                ?>
                <a href="<?= buildUrl($pUrl, $lang) ?>">
                  <div class="products-img">
                    <img src="<?= $pImgPath ?>" 
                        title="<?= htmlspecialchars(strip_tags($pTitle)) ?>" 
                        alt="<?= htmlspecialchars(strip_tags($pTitle)) ?>"
                        class="<?= htmlspecialchars($pImgClass) ?>">
                  </div>
                  <div class="products-name"><?= htmlspecialchars(strip_tags($pTitle)) ?></div>
                </a>
              </div>
            </div>
            <?php endforeach; ?>

          </div>
          <div class="swiper-pagination"></div>  
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Home // About -->
<section class="section about">
  <div class="container about-card">
    <div class="row">
      <div class="col-xl-5 text-block">
        <article>
          <h2 class="title">
              <?php echo isset($langStrings['home_about_title']) ? htmlspecialchars($langStrings['home_about_title']) : 'About Jih Cheng'; ?>
          </h2>
          <p>
              <?php echo isset($langStrings['home_about_desc']) ? htmlspecialchars($langStrings['home_about_desc']) : ''; ?>
          </p>
        </article>
        <a href="<?= buildUrl('about', $lang) ?>">
          <div class="more-btn">
            <span><?php echo isset($langStrings['home_learn_more']) ? htmlspecialchars($langStrings['home_learn_more']) : 'Learn More'; ?></span>
          </div>
        </a>
      </div>
      <div class="col-xl-7 img-block">
        <img src="<?= $basePath ?>/assets/img/home/20190424134347LrEY2gw.jpg" alt="" class="">
      </div>
    </div>
  </div>
  <div class="container company-belief">
    <article>
      <h2 class="title"><?php echo isset($langStrings['home_company_belief_title']) ? htmlspecialchars($langStrings['home_company_belief_title']) : 'Company Belief'; ?></h2>
      <h5>
        <?php echo isset($langStrings['home_company_belief_subtitle']) ? htmlspecialchars($langStrings['home_company_belief_subtitle']) : ''; ?>
      </h5>
    </article>
    <div class="row">
      <div class="col-lg-6 col-xxl-3 icon-group">
        <div class="icon-block"><img src="<?= $basePath ?>/assets/img/home/ivon-belief-1.png" alt=""></div>
        <p><span></span><span></span><?php echo isset($langStrings['home_company_belief_icon1']) ? htmlspecialchars($langStrings['home_company_belief_icon1']) : 'Improving productivity'; ?></p>
      </div>
      <div class="col-lg-6 col-xxl-3 icon-group">
        <div class="icon-block"><img src="<?= $basePath ?>/assets/img/home/ivon-belief-2.png" alt=""></div>
        <p><span></span><span></span><?php echo isset($langStrings['home_company_belief_icon2']) ? htmlspecialchars($langStrings['home_company_belief_icon2']) : 'Decreasing financial consumption'; ?></p>
      </div>
      <div class="col-lg-6 col-xxl-3 icon-group">
        <div class="icon-block"><img src="<?= $basePath ?>/assets/img/home/ivon-belief-3.png" alt=""></div>
        <p><span></span><span></span><?php echo isset($langStrings['home_company_belief_icon3']) ? htmlspecialchars($langStrings['home_company_belief_icon3']) : 'Yielding higher quality products'; ?></p>
      </div>
      <div class="col-lg-6 col-xxl-3 icon-group">
        <div class="icon-block"><img src="<?= $basePath ?>/assets/img/home/ivon-belief-4.png" alt=""></div>
        <p><span></span><span></span><?php echo isset($langStrings['home_company_belief_icon4']) ? htmlspecialchars($langStrings['home_company_belief_icon4']) : 'Achieving hygienic and safety standards'; ?></p>
      </div>
    </div>
  </div>

  <div class="container about-img">
    <img src="<?= $basePath ?>/assets/img/home/20190506104453H-4XU-6.jpg" alt="">
  </div>
</section>

<!-- Home // Catalog -->
<section class="section catalog">
  <div class="container">
    <div class="row">
      <div class="col-xxl-5 col-xl-3 catalog-info-block">
        <article>
          <h2 class="title"><?php echo isset($langStrings['home_catalog_title']) ? htmlspecialchars($langStrings['home_catalog_title']) : 'Catalog'; ?></h2>
          <p><?php echo isset($langStrings['home_catalog_desc']) ? htmlspecialchars($langStrings['home_catalog_desc']) : ''; ?></p>
        </article>
        <a href="<?= buildUrl('catalog', $lang) ?>">
          <div class="more-btn">
            <span><?php echo isset($langStrings['home_learn_more']) ? htmlspecialchars($langStrings['home_learn_more']) : 'Learn More'; ?></span>
          </div>
        </a>
      </div>

      <div class="col-xxl-7 col-xl-9 catalog-swiper-block">
        <div id="swiper" class="swiper catalog-swiper">
          <div class="swiper-wrapper">

            <?php foreach ($homeCatalogs as $item): ?>
              <?php 
                // 取得當前語系的資料，若無則回退英文
                $series = $item['series'][$lang] ?? $item['series']['en'];
                $title = $item['title'][$lang] ?? $item['title']['en'];
                $img   = $item['img'][$lang] ?? $item['img']['en'] ?: 'catalog-default.webp';
                $file  = $item['file'][$lang] ?? $item['file']['en'];
                $filePath = $basePath . '/assets/files/' . $file;
              ?>
              <div class="swiper-slide">
                <div class="catalog-card">
                  <div class="card-body">
                    <div class="catalog-cover">
                      <img src="<?= $basePath ?>/assets/img/catalog/<?= $img ?>" title="<?= htmlspecialchars($title) ?>" alt="<?= htmlspecialchars($title) ?>" class="img-fluid">
                    </div>
                    <div class="catalog-info">
                      <span><?= htmlspecialchars($series) ?></span>
                      <div class="title">
                        <?= $title ?>
                      </div>
                      <div class="btn-group-custom">
                          <a href="<?= $filePath ?>" class="download-btn" download>
                              <i class="bi bi-cloud-arrow-down"></i>
                              <span><?= $langStrings['download-catalog'] ?? 'Download'; ?></span>
                          </a>
                          <a href="<?= $filePath ?>" class="preview-btn" target="_blank">
                              <i class="bi bi-eye"></i>
                              <span><?= $langStrings['view-catalog'] ?? 'View'; ?></span>
                          </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- Home // News -->
<section class="section news">
  <div class="container">
    <h2 class="title">News</h2>
    <div id="swiper" class="swiper news-swiper">

      <div class="swiper-wrapper">

        <?php foreach ($homeNews as $key => $news): ?>
          <div class="swiper-slide">
            <div class="news-card">
              <a href="<?= buildUrl('news/' . $key, $lang) ?>">
                <div class="news-card-img">
                  <img src="<?= asset("assets/img/news/" . $news['images']) ?>" 
                      alt="<?= $news['title'][$lang] ?? $news['title']['en'] ?>">
                </div>
                <div class="news-card-body">
                  <div class="news-card-content">
                    <h5 class="news-title">
                      <?= $news['title'][$lang] ?? $news['title']['en'] ?>
                    </h5>
                    <div class="news-excerpt">
                      <?= $news['info'][$lang] ?? $news['info']['en'] ?>
                    </div>
                  </div>
                  <div class="new-more-btn marquee-style">
                    <span class="btn-text">
                      <?= $langStrings['learn-more'] ?? 'Learn more' ?>
                    </span>
                    
                    <div class="icon-circle">
                      <div class="icon-group">
                        <i class="bi bi-arrow-right"></i>
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
      
      <div class="swiper-pagination"></div>
    
    </div>
    
  </div>
</section>