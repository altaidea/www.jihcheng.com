/**
 * Home Page Exclusive Scripts
 * 專屬於首頁的互動邏輯
 */

document.addEventListener('DOMContentLoaded', () => {

  // 0. Hero Swiper
  const heroSwiper = new Swiper('.hero-swiper', {
    // 基本設定
    loop: true,               // 循環播放
    speed: 1000,              // 切換速度 (ms)
    effect: 'fade',           // 建議使用淡入淡出效果
    fadeEffect: {
      crossFade: true         // 交叉淡入
    },
    
    // 自動播放
    autoplay: {
      delay: 5000,            // 每 5 秒切換一次
      disableOnInteraction: false, // 使用者操作後不停止自動播放
    },

    on: {
      init: function() {
        // 確保載入後，強迫重繪一次第一顆進度條
        const activeBullet = document.querySelector('.swiper-pagination-bullet-active::before');
        if (activeBullet) {
          activeBullet.style.animation = 'none';
          activeBullet.offsetHeight; /* 觸發重繪 */
          activeBullet.style.animation = null;
        }
      }
    },

    // 如果您之後想加分頁圓點或左右箭頭，可以在此開啟
    
    pagination: {
      el: '.hero-swiper .swiper-pagination',
      clickable: true,
    },
    /*
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    */

    // 響應式調整 (如需針對手機版做不同設定)
    breakpoints: {
      576: {
        allowTouchMove: true,  // 手機版允許滑動
      }
    },

    
  });
  
  // 1. 產品輪播 (機器展示)
  const productSwiper = new Swiper('.products-swiper', {
    initialSlide: 0,
    slidesPerView: 'auto', 
    loop: true,
    slideToClickedSlide: true,

    // ⭐ 全域預設開啟（確保手機版可以拖曳）
    allowTouchMove: true,

    breakpoints: {
      576: { 
        slidesPerView: 1
      },
      768: { 
        slidesPerView: 1.5,
        spaceBetween: 30
      },
      1024: { 
        slidesPerView: 2.5, // 1920 下的比例
        spaceBetween: 30,
        allowTouchMove: false
      }
    },
    pagination: {
      el: '.products-swiper .swiper-pagination', // 建議指定具體分頁
      clickable: false,
    },
    navigation: {
      nextEl: '.products-swiper-block .next-btn',
      prevEl: '.products-swiper-block .prev-btn',
    },
    autoplay: { delay: 3000, disableOnInteraction: false },

    // 防FOUC
    on: {
      afterInit: function() {
        this.el.style.opacity = "1";
      }
    }
  });

  // 2. 型錄輪播 (卡片展開效果)
  const catalogSwiper = new Swiper('.catalog-swiper', {
    speed: 600,
    loop: false,
    slideToClickedSlide: true,

    // 強制設定為單張顯示
    slidesPerView: 1, 
    spaceBetween: 0, // 既然只有一張，間距設為0以防偏移
    centeredSlides: true,

    // 全域預設
    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      
      768: { 
        slidesPerView: 1,
        spaceBetween: 0
      },

      1024: { 
        slidesPerView: 1,
        spaceBetween: 0
      }
    },
    pagination: {
      el: '.catalog-swiper .swiper-pagination',
      clickable: true,
    },
    autoplay: { 
      delay: 4000, 
      disableOnInteraction: false,
      pauseOnMouseEnter: true // ⭐ 加入此行：滑鼠進入後暫停自動播放
    }
  });

  // 3. 影片輪播 (搭配 overflow: visible 效果)
  const videoSwiper = new Swiper('.video-swiper', {
    slidesPerView: 1.2,
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    slideToClickedSlide: true, // 💡 點擊旁邊的 Slide 會自動移到中間
    speed: 400, // 設定位移速度，讓動畫更俐落
    
    // ⭐ 關鍵設定：允許在觸摸 iframe 邊緣時不阻斷滑動
    touchStartPreventDefault: false,

    // 如果您希望更好滑，可以增加滑動敏感度
    touchRatio: 1,
    longSwipes: true,

    // 如果想要在滑動時停止影片 (選配)
    on: {
        slideChangeTransitionStart: function () {
            // 如果主人希望滑走就暫停，可以在這裡寫邏輯
        }
    },
    
    breakpoints: {
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 2.6, spaceBetween: 40 }
    },

    pagination: {
      el: '.video-swiper .swiper-pagination',
      clickable: true,
    },

    // ⭐ 核心修正：滑鼠懸停時停止自動播放
    autoplay: { 
      delay: 3000, 
      disableOnInteraction: false,
      pauseOnMouseEnter: true, // 💡 滑鼠在上面就不要滑動
    },
  });

  // 🚀 4. 最新消息輪播 (News Swiper) - 新增
  const newsSwiper = new Swiper('.news-swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: false,             // 新聞建議不循環，讓使用者滑到最後看到全部
    speed: 800,

    // 預防圖片加載延遲導致的計算錯誤
    observer: true,
    observeParents: true,

    watchSlidesProgress: true,
    grabCursor: true,

    pagination: {
      el: '.news-swiper .swiper-pagination',
      clickable: true,
    },

    // 確保 Swiper 在所有圖片與內容加載完後重新計算
    on: {
      init: function () {
        this.update(); // 強制在初始化後進行一次更新
      },
    },

    autoplay: { 
      delay: 4500, // 考慮到新聞有文字閱讀時間，稍微增加停頓
      disableOnInteraction: false,
      pauseOnMouseEnter: true, 
    },

    breakpoints: {
      // 576px 以下（手機橫屏）
      576: {
        slidesPerView: 1, // ⭐ 建議：露出一點下一張的邊緣，暗示可以滑動
        spaceBetween: 20
      },
      768: { 
        slidesPerView: 2,
        spaceBetween: 20 
      },
      1200: { 
        slidesPerView: 3,    // 1920 螢幕顯示 3 則最能展現卡片質感
        spaceBetween: 20 
      }
    }
  });
});

function playJulietVideo(overlay, playerId) {
    // 讓遮罩徹底消失，不佔位也不擋滑鼠
    overlay.style.opacity = '0';
    overlay.style.pointerEvents = 'none'; // 👈 就是這一行！讓滑鼠穿透去點 YT
    setTimeout(() => { overlay.style.display = 'none'; }, 500);

    // 啟動 API 播放
    if (players[playerId] && players[playerId].playVideo) {
        players[playerId].playVideo();
    }
}