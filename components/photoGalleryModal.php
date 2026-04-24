<!-- photoGalleryModal -->
<div class="modal fade" id="photoGalleryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen"> 
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0 d-flex align-items-center">
        
        <div class="swiper modal-zoom-swiper">
          <div class="swiper-wrapper">
            <?php foreach ($finalImages as $index => $img): 
                // 標題回退邏輯
                $currentCaption = !empty($product['image_titles'][$index][$lang]) 
                                  ? $product['image_titles'][$index][$lang] 
                                  : $productTitle;
                
                // ⭐ 修正：Modal 內也應判斷是否有大圖路徑
                $zoomImgName = !empty($product['images_zoom'][$index]) ? $product['images_zoom'][$index] : $img;
                $zoomPath = asset("assets/img/products/$seriesKey/$productKey/$zoomImgName");
                $zoomClass = $product['image_zoom_class'][$index] ?? '';
            ?>
              <div class="swiper-slide text-center">

                <div class="zoom-slide-content">
                  <img src="<?= $zoomPath ?>" class="img-fluid <?= htmlspecialchars($zoomClass) ?>">
                  <div class="zoom-caption"><?= $currentCaption ?></div>
                </div>
              </div>
              
            <?php endforeach; ?>
          </div>
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        </div>

      </div>
    </div>
  </div>
</div>