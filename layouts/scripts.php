  <!-- ⭐ 404 不載入 GA -->
  <?php if (empty($is404) || !$is404): ?>
  <!-- GDPR GTM -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=GTM-K29Z5NM8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){ dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'GTM-K29Z5NM8');
  </script>
  <?php endif; ?>

  <!-- Organization JSON-LD -->
  <script type="application/ld+json">
  <?php
  // 抓取電話，並存入陣列
  $rawPhones = [
      $langStrings['phone'] ?? null,
      $langStrings['phone1'] ?? null,
      $langStrings['phone2'] ?? null
  ];

  // 關鍵動作：array_filter 去除空值，array_unique 去除重複，array_values 重新索引
  $cleanPhones = array_values(array_unique(array_filter($rawPhones)));

  // 根據數量決定輸出格式
  if (count($cleanPhones) === 1) {
      $finalPhone = $cleanPhones[0]; // 輸出單一字串
  } elseif (count($cleanPhones) > 1) {
      $finalPhone = $cleanPhones; // 輸出陣列
  } else {
      $finalPhone = null; // 完全沒電話
  }
  ?>
  <?php
    echo json_encode(array(
      "@context" => "https://schema.org",
      "@type" => "Organization",
      "@id" => (isset($langStrings['site']) ? rtrim($langStrings['site'], '/') : 'https://www.santung.com') . "/#organization",
      "name" => $langStrings['company'],
      "url" => $langStrings['site'],
      "logo" => rtrim($basePath, '/') . "/favicon.ico",
      "image" => rtrim($basePath, '/') . "/favicon.ico",
      "address" => array(
        "@type" => "PostalAddress",
        "streetAddress" => $langStrings['streetAddress'],
        "addressLocality" => $langStrings['addressLocality'],
        "postalCode" => $langStrings['postalCode'],
        "addressRegion" => $langStrings['addressRegion'],
        "addressCountry" => "TW"
      ),
      "contactPoint" => array(
        array(
          "@type" => "ContactPoint",
          "telephone" => $cleanPhones,
          "faxNumber" => $langStrings['fax'],
          "email" => $langStrings['email'],
          "contactType" => "customer service",
          "areaServed" => "TW",
          "availableLanguage" => array("zh","en")
        )
      ),
      "taxID" => $langStrings['taxID']
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
  ?>
  </script>

<?php if (empty($is404) || !$is404): ?>

  <!-- WebPage JSON-LD -->
  <script type="application/ld+json">
  <?php
    $title = isset($langStrings['page_title'])
        ? cleanText($langStrings['page_title'], 160)
        : '';

    $descA = isset($langStrings[$path . '_description'])
        ? cleanText($langStrings[$path . '_description'], 160)
        : '';

    $descB = isset($langStrings['page_description'])
        ? cleanText($langStrings['page_description'], 160)
        : '';

    $kwA = isset($langStrings[$path . '_keywords'])
        ? cleanText($langStrings[$path . '_keywords'])
        : '';

    $kwB = isset($langStrings['page_keywords'])
        ? cleanText($langStrings['page_keywords'])
        : '';

    $kwC = isset($langStrings['company'])
        ? cleanText($langStrings['company'])
        : '';

    // 建立結構化數據陣列
    // 假設您的完整網址是由 $basePath, $lang, $path 等組成的
    $currentFullUrl = "https://www.santung.com/" . $lang . "/" . $path . ".html";
    $webPageSchema = [
      "@context" => "https://schema.org",
      "@type" => "WebPage",
      "@id" => $currentFullUrl . "#webpage",
      "name" => $langStrings['company'] ?? '',
      "headline" => $langStrings['companySlogen'] ?? '',
      "url" => $currentFullUrl,
      // 使用 array_filter 確保空值不會留下多餘的逗號
      "description" => trim($desc1, " , \t\n\r\0\x0B"),
      "keywords" => $title,
      "publisher" => [
        "@type" => "Organization",
        "@id" => (isset($langStrings['site']) ? rtrim($langStrings['site'], '/') : 'https://www.santung.com') . "/#organization",
        "name" => $langStrings['company'] ?? ''
      ]
    ];

    echo json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
  ?>
  </script>

  <!-- Breadcrumb JSON-LD -->
  <?php 
    // 判定是否為首頁
    $isHomePage = (isset($path) && $path === 'home') || (empty($_GET['path']));

    // 情況 A：如果是首頁，強制生成首頁節點
    if ($isHomePage) {
        // 處理節點名稱 (首頁通常固定，但為了保險起見也跑一次邏輯)
        $homeName = ($lang === 'zh') ? "首頁" : "Home";
        
        $homeUrl = (isset($basePath) && isset($lang)) ? "$basePath/$lang/home.html" : "http://localhost/demo/www.santung.com/zh/home.html";
        $breadcrumbItems = [[
            "@type"    => "ListItem",
            "position" => 1,
            "name"     => $homeName,
            "item"     => $homeUrl
        ]];
    }
    
    // 情況 B：非首頁，對 breadcrumb.php 產生的 $breadcrumbItems 進行清理
    if (isset($breadcrumbItems) && !empty($breadcrumbItems)) {
        foreach ($breadcrumbItems as $key => $item) {
            if (isset($item['name'])) {
                // ⭐ 核心處理邏輯：中文清除所有空格，英文僅做 trim
                $breadcrumbItems[$key]['name'] = ($lang === 'zh') 
                    ? preg_replace('/[\s　]+/u', '', strip_tags($item['name'])) 
                    : trim(strip_tags($item['name']));
            }
        }
    }

    if (isset($breadcrumbItems) && !empty($breadcrumbItems)): 
  ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": <?php echo json_encode($breadcrumbItems, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
    }
    </script>
  <?php endif; ?>

<?php endif; ?>