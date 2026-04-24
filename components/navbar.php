<?php
// ⭐ 裝置斷點為 max-width: 1200px
/**
 * ⭐ Navbar 語系切換修正版
 * ⭐ Navbar 語系持久化修正
 * 直接使用 index.php 算好的 $lang 與 $safePath
 */

// 1. 建立一個即時的語系偵測（不依賴全域變數，直接看 URL）
$uri = $_SERVER['REQUEST_URI'];
$scriptName = dirname($_SERVER['SCRIPT_NAME']);
$currentRelativePath = trim(str_replace($scriptName, '', $uri), '/');
$pathSegments = explode('/', $currentRelativePath);

// 抓取網址第一段
$detectedUrlLang = $pathSegments[0] ?? '';

// 2. 修正 $lang 變數的穩定性
// 如果全域 $lang 消失了，我們從 URL 強制抓回來
if (!isset($lang) || empty($lang)) {
    // 這裡要對應您的 $reverseLangMapping
    if ($detectedUrlLang === 'zh-TW') {
        $lang = 'zh';
    } elseif (in_array($detectedUrlLang, ['en', 'cn', 'ko'])) {
        $lang = $detectedUrlLang;
    } else {
        $lang = $defaultLang ?? 'en';
    }
}

// 3. 確保 $safePath 的解析正確（避免靜置後抓到空值）
if (!isset($safePath) || empty($safePath)) {
    $isLang = ($detectedUrlLang === 'zh-TW' || in_array($detectedUrlLang, ['zh', 'en', 'cn', 'ko']));
    $safeSegments = $isLang ? array_slice($pathSegments, 1) : $pathSegments;
    // 排除 search 之後的參數
    $safePath = explode('?', implode('/', $safeSegments))[0] ?: 'home';
}

// ⭐ 用來處理 active 狀態的變數
// 判斷主選單 (home, about, products, news...)
$firstSegment = explode('/', $safePath)[0];
?>

<header class="fixed-top sticky-navbar">
  <div class="top-header">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div class="sns-links">
        <a href="#" target="_blank" class="line-btn-link" rel="noopener" data-line-id="@eow7138b"><i class="bi bi-line"></i></a>
        <a href="https://www.facebook.com/JihCheng1972" target="_blank" class=""><i class="bi bi-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCV2vCfwGDwa-T2IRLLBmSAA/featured" class="" target="_blank"><i class="bi bi-youtube"></i></a>
      </div>

      <div class="top-tools d-flex align-items-center">
        <a href="tel:+886-2-2675-8968" class="phone-call"><i class="bi bi-telephone-fill me-1"></i><span>+886-2-2675-8968</span></a>

        <!-- 桌面端搜尋觸發按鈕 -->
        <a href="javascript:void(0)" onclick="toggleSearch()" class="search-btn text-white"><i class="bi bi-search"></i></a>

        <!-- 行動端搜尋觸發按鈕 -->
        <a href="javascript:void(0)" onclick="toggleNavSearch()" class="search-sp-btn text-white">
          <i class="bi bi-search"></i>
        </a>

        <!-- 桌面端搜尋框 -->
        <div id="searchLayer" class="search-accordion-layer">
          <button type="button" class="search-layer-x-btn" onclick="toggleSearch()">
              <i class="bi bi-x-lg"></i>
          </button>
          <div class="search search-inner">
            <?php 
              // ⭐ 核心修正：取得 URL 專用的語系代碼 (例如 zh -> zh-TW)
              $urlLang = isset($langMapping[$lang]) ? $langMapping[$lang] : $lang;
              
              // ⭐ 安全檢查：確保 $basePath 不是硬碟路徑。
              // 如果你在 config.php 裡寫 $basePath = __DIR__，請改成網頁路徑 (例如 /demo/www.jihcheng.com)
            ?>
            <form method="get" onsubmit="return goSearch(this)">
              <input name="keyword" type="text" class="search-input" 
                    placeholder="<?= $langStrings['search_placeholder'] ?>" 
                    value="<?= htmlspecialchars($keyword ?? '') ?>" required>
              <button type="submit" class="search-submit-btn"><i class="bi bi-arrow-right"></i></button>
            </form>
          </div>
        </div>

        <!-- 語言切換控制 -->
        <?php 
          if (defined('USE_MULTILANG') && USE_MULTILANG): 
            // 定義一個局部陣列，不要動到全域變數
            $langTextMap = array(
                'zh' => '繁中',
                'cn' => '简中',
                'en' => 'EN',
                'ko' => '한국어'
            );
        ?>
        <div class="dropdown me-2">

          <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <i class="bi bi-globe2 me-1"></i>
            <?php 
              // 直接從對應表抓，如果找不到就顯示預設
              echo isset($langTextMap[$lang]) ? $langTextMap[$lang] : 'EN'; 
            ?>
          </button>

          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <?php 
            // 使用一個獨立的變數名 $code，不要用 $lang
            foreach ($langTextMap as $code => $text): 
                if ($lang === $code) continue; // 跳過當前語系
            ?>
              <li>
                <a class="dropdown-item" href="<?= buildUrl($safePath, $code) ?>">
                  <?= $text ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>

        </div>
        <?php endif; ?>

      </div>
    </div>
  </div>

  <div class="navbar navbar-expand-xl bg-body-tertiary shadow-sm">
    <div class="container-fluid">

      <a href="<?= buildUrl('home', $lang) ?>">
        <div class="navbar-brand">
          <div class="company-logo"><?= icon('icon-logo', 'icon-logo default'); ?></div>
          <div class="company-name">
            <span class="text-zh">紀正機械有限公司</span>
            <span class="text-en">Jih Cheng Machinery Co., Ltd.</span>
            <?php /*
            <span class="text-zh"><?= $langStrings['logo-company'] ?? '紀正機械有限公司' ?></span>
            <?php if ($lang !== 'en'): ?>
              <span class="text-en">
                Jih Cheng Machinery Co., Ltd.
              </span>
            <?php endif; ?>
            */?>
          </div>
        </div>
      </a>

      <!-- 漢堡選單按鈕 -->
      <button class="custom-hamburger" id="hamburgerBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
          <span class="hamburger-line line-1"></span>
          <span class="hamburger-line line-2"></span>
          <span class="hamburger-line line-3"></span>
        </button>
      </div>

      <!-- offcanvas -->
      <div class="offcanvas offcanvas-end full-screen" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header">
          <a href="<?= buildUrl('home', $lang) ?>">
            <div class="navbar-brand">
              <div class="company-logo"><?= icon('icon-logo', 'icon-logo default'); ?></div>
              <div class="company-name">
                <span class="text-zh">紀正機械有限公司</span>
                <span class="text-en">Jih Cheng Machinery Co., Ltd.</span>
              </div>
            </div>
          </a>
        </div>

        <!-- NAV // offcanvas-body -->
        <nav class="offcanvas-body">

          <!-- 行動端搜尋區塊 -->
          <div id="navSearchBlock" class="nav-tools-block">
            <div class="search-box position-relative">
              <!-- <input class="form-control nav-search-input" type="search" placeholder="Enter keywords to search..."> -->
              <form method="get" onsubmit="return goSearch(this)">
              <input name="keyword" 
                     type="text" 
                     class="search-input form-control nav-search-input" 
                     placeholder="<?= $langStrings['search_placeholder'] ?>" 
                     value="<?= htmlspecialchars($keyword ?? '') ?>" required>
              </form>
              <button type="submit" class="btn btn-search-icon"><i class="bi bi-search"></i></button>
            </div>
          </div>

          <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item">
              <a class="nav-link <?= $firstSegment === 'home' ? 'active' : '' ?>" href="<?= buildUrl('home', $lang) ?>">
                <?= $langStrings['home_title'] ?? '首頁' ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $firstSegment === 'about' ? 'active' : '' ?>" href="<?= buildUrl('about', $lang) ?>">
                <?= $langStrings['about_title'] ?? '關於紀正' ?>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?= buildUrl('products', $lang) ?>" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $langStrings['products_title'] ?? '產品索引' ?>
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li><a class="dropdown-item" href="<?= buildUrl('products/cartoning', $lang) ?>"><?= $langStrings['products-series-menu1'] ?? '' ?></a></li>
                  <li><a class="dropdown-item" href="<?= buildUrl('products/filling', $lang) ?>"><?= $langStrings['products-series-menu2'] ?? '' ?></a></li>
                  <li><a class="dropdown-item" href="<?= buildUrl('products/capping', $lang) ?>"><?= $langStrings['products-series-menu3'] ?? '' ?></a></li>
                  <li><a class="dropdown-item" href="<?= buildUrl('products/labeling', $lang) ?>"><?= $langStrings['products-series-menu4'] ?? '' ?></a></li>
                  <li><a class="dropdown-item" href="<?= buildUrl('products/airWashing', $lang) ?>"><?= $langStrings['products-series-menu5'] ?? '' ?></a></li>
                  <li><a class="dropdown-item" href="<?= buildUrl('products', $lang) ?>"><?= $langStrings['products-series-menu-all'] ?? '' ?></a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $firstSegment === 'catalog' ? 'active' : '' ?>" href="<?= buildUrl('catalog', $lang) ?>">
                <?= $langStrings['catalog_title'] ?? '線上型錄' ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $firstSegment === 'news' ? 'active' : '' ?>" href="<?= buildUrl('news', $lang) ?>">
                <?= $langStrings['news_title'] ?? '最新消息' ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $firstSegment === 'contact' ? 'active' : '' ?>" href="<?= buildUrl('contact', $lang) ?>">
                <?= $langStrings['contact_title'] ?? '聯絡我們' ?>
              </a>
            </li>
          </ul>
          
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- 搜尋 -->
<script>
  function sanitizeKeyword(v) {
    return v
      .replace(/[\/\\]/g, ' ')
      .replace(/\s+/g, ' ')
      .trim();
  }

  function goSearch(form) {
    const kw = sanitizeKeyword(form.keyword.value);
    if (!kw) return false;

    // ⭐ 修正：使用 $urlLang 而不是 $lang
    // 並且確保 $basePath 是相對網址路徑
    const basePath = "<?= rtrim($basePath, '/') ?>";
    const urlLang = "<?= $urlLang ?>";
    
    // 組合最終網址：/demo/www.jihcheng.com/zh-TW/search/關鍵字
    const targetUrl = basePath + "/" + urlLang + "/search/" + encodeURIComponent(kw);
    
    window.location.href = targetUrl;
    return false;
  }
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const offcanvasEl = document.getElementById('offcanvasNavbar');
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    // 直接統一抓取這個 ID
    const productsDropdown = document.getElementById('productsDropdown');

    // 1. 同步漢堡動畫狀態
    offcanvasEl.addEventListener('show.bs.offcanvas', () => hamburgerBtn.classList.add('active'));
    offcanvasEl.addEventListener('hide.bs.offcanvas', () => hamburgerBtn.classList.remove('active'));

    // 2. 混合邏輯：桌機與行動行為切換
    function handleNavBehavior() {
        if (window.innerWidth >= 1200) {
            productsDropdown.removeAttribute('data-bs-toggle');
            // 移除手機端可能留下的 show class
            productsDropdown.nextElementSibling.classList.remove('show');
        } else {
            productsDropdown.setAttribute('data-bs-toggle', 'dropdown');
        }
    }

    // 3. 行動端專屬絲滑點擊
    productsDropdown.addEventListener('click', function(e) {
        if (window.innerWidth < 1200) {
            // 讓 Bootstrap 的預設行為處理選單開關，我們只負責滑動的順暢感
            // 由於 CSS 已經處理了 max-height，這裡不需要額外 JS 介入
            console.log("機械核心：移動端下拉觸發");
        }
    });

    handleNavBehavior();
    window.addEventListener('resize', handleNavBehavior);
});
</script>

<script>
  // 1. 搜尋層開關
  function toggleSearch() {
      // ⚡ 核心修正：阻止事件冒泡到 document
      const e = window.event;
      if (e) {
          e.stopPropagation();
      }
      document.getElementById('searchLayer').classList.toggle('active');
  }

  // 2. 漢堡與 Offcanvas 同步 (維持原樣)
  const offcanvas = document.getElementById('mobileMenu');
  const burger = document.getElementById('hamburgerBtn');
  if (offcanvas && burger) {
      offcanvas.addEventListener('show.bs.offcanvas', () => burger.classList.add('active'));
      offcanvas.addEventListener('hide.bs.offcanvas', () => burger.classList.remove('active'));
  }

  // 3. 點擊外部關閉搜尋
  document.addEventListener('click', (e) => {
      const layer = document.getElementById('searchLayer');
      
      // 如果層級存在且正在顯示
      if (layer && layer.classList.contains('active')) {
          // 判定：點擊位置不在層級內，且不是那個觸發按鈕 (.search-btn)
          if (!layer.contains(e.target) && !e.target.closest('.search-btn')) {
              layer.classList.remove('active');
          }
      }
  });
</script>

<script>
  // 在 DOMContentLoaded 內加入
  const navSearchInput = document.querySelector('.nav-search-input');
  const navSearchBtn = document.querySelector('.btn-search-icon');

  if (navSearchBtn) {
      navSearchBtn.addEventListener('click', function() {
          const kw = sanitizeKeyword(navSearchInput.value);
          if (kw) {
              const basePath = "<?= rtrim($basePath, '/') ?>";
              const urlLang = "<?= isset($langMapping[$lang]) ? $langMapping[$lang] : $lang ?>";
              window.location.href = `${basePath}/${urlLang}/search/${encodeURIComponent(kw)}`;
          }
      });
  }
</script>