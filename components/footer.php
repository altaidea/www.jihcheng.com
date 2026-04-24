<footer>
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-12 footer-company-block">
        <div class="logo-block">
          <div class="company-logo"><?= icon('icon-logo', 'icon-logo default'); ?></div>
          <div class="company-name">
            <span class="text-zh">紀正機械有限公司</span>
            <span class="text-en">Jih Cheng Machinery Co., Ltd.</span>
          </div>
        </div>
        <div class="company-info-block">
          
          <ul>
            <li>
              <i class="bi bi-geo-alt-fill contact-icon"></i>
              <a href="https://maps.app.goo.gl/spHdzaFU8iV21b5H8" target="_blank">
                <?= $langStrings['company_add'] ?? '7F., No.502, Da’an Rd., Shulin Dist., New Taipei City 238, Taiwan (R.O.C.)' ?></a>
            </li>
            <li class="phone">
              <i class="bi bi-telephone-fill contact-icon"></i>
              <a href="tel:+886226758968">886-2-2675-8968</a>
            </li>
            <li>
              <i class="fas fa-fax contact-icon"></i>
              <span>886-2-2675-8229</span>
            </li>
            <li>
              <i class="bi bi-envelope-fill contact-icon"></i>
              <a href="mailto:sales@jihcheng.com">sales@jihcheng.com</a>
            </li>
          </ul>

        </div>
      </div>
      <div class="col-xl-3 col-md-6 footer-menu-products">
        <div class="inner-block">
          <h3><a href="<?= buildUrl('products', $lang) ?>"><?= $langStrings['products_title'] ?? '產品索引' ?></a></h3>
          <ul>
            <li><a class="dropdown-item" href="<?= buildUrl('products/cartoning', $lang) ?>"><?= $langStrings['products-series-menu1'] ?? '' ?></a></li>
            <li><a class="dropdown-item" href="<?= buildUrl('products/gilling', $lang) ?>"><?= $langStrings['products-series-menu2'] ?? '' ?></a></li>
            <li><a class="dropdown-item" href="<?= buildUrl('products/capping', $lang) ?>"><?= $langStrings['products-series-menu3'] ?? '' ?></a></li>
            <li><a class="dropdown-item" href="<?= buildUrl('products/labeling', $lang) ?>"><?= $langStrings['products-series-menu4'] ?? '' ?></a></li>
            <li><a class="dropdown-item" href="<?= buildUrl('products/air-washing', $lang) ?>"><?= $langStrings['products-series-menu5'] ?? '' ?></a></li>
          </ul>
        </div>
      </div>
        
      <div class="col-xl-3 col-md-6 footer-menu">
        <ul>
          <li><a href="<?= buildUrl('about', $lang) ?>"><?= $langStrings['about_title'] ?? '關於紀正' ?></a></li>
          <li><a href="<?= buildUrl('catalog', $lang) ?>"><?= $langStrings['catalog_title'] ?? '線上型錄' ?></a></li>
          <li><a href="<?= buildUrl('news', $lang) ?>"><?= $langStrings['news_title'] ?? '最新消息' ?></a></li>
          <li><a href="<?= buildUrl('contact', $lang) ?>"><?= $langStrings['contact_title'] ?? '聯絡我們' ?></a></li>
          <li><a href="<?= buildUrl('home', $lang) ?>"><?= $langStrings['home_title'] ?? '首頁' ?></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="copyright">
    Copyright © <?= date('Y') ?> <?= $langStrings['company'] ?? 'Jih Cheng Machinery Co., Ltd.' ?> <?= $lang === 'zh' ? '版權所有' : ($lang === 'cn' ? '版权所有' : ($lang === 'ko' ? '모든 권리 보유' : 'All Rights Reserved.')) ?>
  </div>
</footer>