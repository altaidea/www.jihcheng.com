document.addEventListener('DOMContentLoaded', function () {
// ⭐ 有縮圖連動的產品圖
// 1. 先初始化小圖 (Thumbs)
// thumbs-photo-swiper
  const swiperThumbs = new Swiper(".thumbs-photo-swiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    // 確保沒有開啟會導致寬度異常的參數
    // freeMode: true,
    // 確保沒有開啟會導致寬度異常的參數
    watchSlidesProgress: true,
  });

// 2. 初始化大圖，並將小圖設為 thumbs 參數
// main-photo-swiper
  const swiperMain = new Swiper(".main-photo-swiper", {
    spaceBetween: 10,
    // ⭐ 核心參數：讓 Swiper 容器高度隨當前 Slide 改變
    autoHeight: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiperThumbs, // 這裡建立聯動關係
    },
  });

// ⭐ 新增：放大鏡彈窗邏輯
  const galleryModal = document.getElementById('photoGalleryModal');
  if (!galleryModal) return;

  const swiperModal = new Swiper(".modal-zoom-swiper", {
    loop: false,
    spaceBetween: 0, // 全螢幕建議 0
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    keyboard: { enabled: true },

    // ⭐ 新增：監聽點擊事件
    on: {
        click: function (swiper, event) {
            // 判斷點擊的對象是不是圖片 (IMG)
            // 如果不是點擊圖片，也不是點擊導覽按鈕，就關閉 Modal
            const isImage = event.target.tagName.toLowerCase() === 'img';
            const isNavNext = event.target.classList.contains('swiper-button-next');
            const isNavPrev = event.target.classList.contains('swiper-button-prev');

            if (!isImage && !isNavNext && !isNavPrev) {
                // 取得 Bootstrap Modal 實例並關閉它
                const modalInstance = bootstrap.Modal.getInstance(document.getElementById('photoGalleryModal'));
                if (modalInstance) {
                    modalInstance.hide();
                }
            }
        },
    },
  });

  // ⭐ 修改開啟邏輯：動態同步索引
  galleryModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    let targetIndex = 0;

    // 如果點擊的是全域按鈕
    if (button.id === 'globalZoomBtn') {
        // 使用 realIndex (如果你有 loop: true) 或 activeIndex
        targetIndex = swiperMain.realIndex; 
    } else {
        // 保留相容性，萬一其他地方還有帶 index 的按鈕
        targetIndex = parseInt(button.getAttribute('data-bs-index')) || 0;
    }

    setTimeout(() => {
        swiperModal.update();
        swiperModal.slideTo(targetIndex, 0); // 瞬間跳轉到目前主圖的那一張
    }, 250);
  });

  // 關閉邏輯 (維持你原本的，反向同步主圖)（選配）
  // galleryModal.addEventListener('hidden.bs.modal', function () {
  //   const modalCurrentIndex = swiperModal.activeIndex;
  //   swiperMain.slideTo(modalCurrentIndex, 0);
  //   if (document.activeElement) document.activeElement.blur();
  //   if (typeof swiperThumbs !== 'undefined') swiperThumbs.slideTo(modalCurrentIndex, 0);
  // });

// Products Series Swiper ---
  var productsSwiper = new Swiper('.products-series-swiper', {
      slidesPerView: 1, 
      spaceBetween: 20,
      pagination: {
          el: '.swiper-pagination',
          clickable: true,
      },
      breakpoints: {
          992: {
              slidesPerView: 3,
              spaceBetween: 24,
          },
          1200: {
              slidesPerView: 3,
              spaceBetween: 30,
          },
          1366: {
              slidesPerView: 4,
              spaceBetween: 30,
          },
          1440: {
              slidesPerView: 5,
              spaceBetween: 30,
          },
      },
  });

// Bootstrap 5 Collapse 百葉窗控制 // 控制產品選單指定按鈕不要有開合功能
  const firstCollapse = document.getElementById('flush-collapseOne');
  
  // 1. 監聽隱藏事件
  firstCollapse.addEventListener('hide.bs.collapse', function (e) {
    // 2. 阻止它收縮
    e.preventDefault();
  });
});