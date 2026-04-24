    <div class="hero-banner"> 
      <div id="swiper" class="swiper hero-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="title-block">
              <div class="main-title">
                <?php
                    // 定義產品名稱各語系資料 (PHP 5.6 array 語法)
                    $heroBannerTitle = array(
                        'zh' => '<span>自動</span><span>液體充填機</span>',
                        'cn' => '<span>自动</span><span>液体充填机</span>',
                        'en' => '<span>Automatic Liquid</span><span>Filling Machine</span>',
                        'ko' => '<span>자동</span><span>액체충전기</span>'
                    );
                    // 取得當前語系資料，若無匹配則預設為英文
                    $currentTitle = isset($heroBannerTitle[$lang]) ? $heroBannerTitle[$lang] : $heroBannerTitle['en'];
                ?>
                <?php echo $currentTitle; ?>
              </div>
            </div>
            <img src="<?= $basePath ?>/assets/img/home/20190426142028fwmTzhY.jpg" alt="">
          </div>

          <!-- 水平式自動裝盒機 -->
          <div class="swiper-slide">
            <div class="title-block">
              <div class="main-title">
                <?php
                    // 定義產品名稱各語系資料 (PHP 5.6 array 語法)
                    $heroBannerTitle = array(
                        'zh' => '<span>水平式</span><span>自動裝盒機</span>',
                        'cn' => '<span>水平式</span><span>自动装盒机</span>',
                        'en' => '<span>Automatic Horizontal</span><span>Cartoning Machine</span>',
                        'ko' => '<span>수평</span><span>형자동포장기</span>'
                    );
                    // 取得當前語系資料，若無匹配則預設為英文
                    $currentTitle = isset($heroBannerTitle[$lang]) ? $heroBannerTitle[$lang] : $heroBannerTitle['en'];
                ?>
                <?php echo $currentTitle; ?>
              </div>
            </div>
            <img src="<?= $basePath ?>/assets/img/home/20190424134347LrEY2gw.jpg" alt="">
          </div>

          <div class="swiper-pagination-wrapper">
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>

      <!-- ScrollDown Icon Btn -->
      <div class="scrolldown-block">
          <div class='scrolldown'>
          <!-- <div class="chevrons">
              <div class='chevrondown'></div>
              <div class='chevrondown'></div>
          </div> -->
          </div>
      </div>
    </div>