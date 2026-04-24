/**
 * Protocol: Pure init.js
 * 2026-02-11 Optimized Version
 * 確保所有邏輯在私有作用域執行，不污染 window 對象。
 */

// 1. 網址淨化與環境預設 (立即執行，不等待 DOM)
(function() {
    'use strict'; // 啟動嚴格模式，防止靜默錯誤

    // 移除無意義的 "?"
    if (window.location.search === '?') {
        history.replaceState(null, '', window.location.pathname + window.location.hash);
    }
    
    // 這裡可以放置其他不需要 DOM 的初始化邏輯
})();

// 2. DOM 相關邏輯封裝
document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // --- AOS 初始化 ---
    const initAOS = () => {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                once: true,
                duration: 800,
                easing: 'ease-in-out',
                offset: window.innerWidth < 768 ? 40 : 120
            });
        }
    };
    initAOS();
  
  // --- Sticky Navbar & Logo Swap (修正版) ---
  (() => {
      const header = document.querySelector('.sticky-navbar');
      const offcanvasEl = document.getElementById('offcanvasNavbar');
      const searchLayer = document.getElementById('searchLayer');
      const searchInput = searchLayer ? searchLayer.querySelector('.search-input') : null; // 抓取 input
      
      if (!header || !offcanvasEl || !searchLayer || !searchInput) return;

      let lastScrollY = window.scrollY;
      let isInputFocused = false; // ⚡ 新增：監測輸入框是否被點擊

      // 監聽輸入框狀態
      searchInput.addEventListener('focus', () => { isInputFocused = true; });
      searchInput.addEventListener('blur', () => { isInputFocused = false; });

      const updateHeader = () => {
          const scrollY = window.scrollY;
          
          // ⚡ 核心修正 1：偵測滾動位移
          const scrollDiff = Math.abs(scrollY - lastScrollY);
          
          // 只有在「沒有獲得焦點」的情況下，捲動才會觸發關閉
          if (!isInputFocused && scrollDiff > 10) { 
              if (searchLayer.classList.contains('active')) {
                  searchLayer.classList.remove('active');
              }
          }

          // --- 以下維持原邏輯 ---
          if (scrollY > 20) {
              header.classList.add('is-scrolled');
          } else {
              header.classList.remove('is-scrolled');
          }

          const isSearchActive = searchLayer.classList.contains('active');
          const isMenuOpen = offcanvasEl.classList.contains('show') || offcanvasEl.classList.contains('showing');

          // 隱藏＋幽靈模式
          // if (isSearchActive || isMenuOpen) {
          //     header.classList.remove('nav-hide', 'nav-show-ghost');
          // } else {
          //     const threshold = 120;
          //     const diff = scrollY - lastScrollY;

          //     if (scrollY > threshold) {
          //         if (diff > 10) {
          //             header.classList.add('nav-hide');
          //             header.classList.remove('nav-show-ghost');
          //         } else if (diff < -5) {
          //             header.classList.remove('nav-hide');
          //             header.classList.add('nav-show-ghost');
          //         }
          //     } else {
          //         header.classList.remove('nav-hide', 'nav-show-ghost');
          //     }
          // }

          // 無幽靈模式
          if (isSearchActive || isMenuOpen) {
              header.classList.remove('nav-hide');
          } else {
              const threshold = 120;
              const diff = scrollY - lastScrollY;

              if (scrollY > threshold) {
                  if (diff > 10) {
                      header.classList.add('nav-hide');
                  } else if (diff < -5) {
                      header.classList.remove('nav-hide');
                  }
              } else {
                  header.classList.remove('nav-hide');
              }
          }

          lastScrollY = scrollY;
      };

      window.addEventListener('scroll', () => {
          window.requestAnimationFrame(updateHeader);
      }, { passive: true });

      window.toggleSearch = () => {
          searchLayer.classList.toggle('active');
          if (searchLayer.classList.contains('active')) {
              header.classList.remove('nav-hide');
              header.classList.remove('nav-show-ghost');
              // ⚡ 自動聚焦，提升主人使用體驗
              // setTimeout(() => searchInput.focus(), 300); 
          }
      };
  })();

  /**
   * 💎 整合模組：Jih Cheng 搜尋與導覽切換器
   * 整合功能：
   * 1. 行動端搜尋區塊 (nav-tools-block) 控制
   * 2. 輸入狀態監測 (防止行動端鍵盤彈出誤觸捲動隱藏)
   * 3. 漢堡選單與搜尋按鈕的狀態切換 (Switch 邏輯)
   */

  const NavSearchManager = (() => {
      // 1. 配置參數
      const CONFIG = {
          blockId: 'navSearchBlock',      // 行動端搜尋區塊 ID
          inputId: '.nav-search-input',   // 搜尋輸入框 Class
          searchLayerId: 'searchLayer',    // 桌面端搜尋手風琴 ID
          activeClass: 'active',
          focusDelay: 300
      };

      let isFocused = false;

      // 2. 內部私有函式：初始化
      const init = () => {
          const block = document.getElementById(CONFIG.blockId);
          const offcanvasEl = document.getElementById('offcanvasNavbar');
          
          if (block) {
              const input = block.querySelector(CONFIG.inputId);
              if (input) {
                  // ⚡ 監控輸入框焦點狀態
                  input.addEventListener('focus', () => { isFocused = true; });
                  input.addEventListener('blur', () => { isFocused = false; });
              }
          }

          // ⚡ 監聽 Bootstrap Offcanvas 事件 (漢堡選單)
          if (offcanvasEl) {
              // 當選單「即將顯示」時
              offcanvasEl.addEventListener('show.bs.offcanvas', () => {
                  // 🔄 切換 Body 類別，控制兩顆搜尋按鈕的顯隱
                  document.body.classList.add('is-menu-open');
                  
                  // 🔄 選單開啟時，若桌面端搜尋層開著，強制關閉以保持視覺乾淨
                  const searchLayer = document.getElementById(CONFIG.searchLayerId);
                  if (window.toggleSearch && searchLayer?.classList.contains(CONFIG.activeClass)) {
                      window.toggleSearch();
                  }
                  
                  // 🔄 選單開啟時，確保行動端搜尋區塊也是收合狀態
                  const navBlock = document.getElementById(CONFIG.blockId);
                  if (navBlock?.classList.contains(CONFIG.activeClass)) {
                      navBlock.classList.remove(CONFIG.activeClass);
                  }
              });

              // 當選單「即將隱藏」時
              offcanvasEl.addEventListener('hide.bs.offcanvas', () => {
                  // 回歸預設狀態
                  document.body.classList.remove('is-menu-open');
              });
          }
          
          console.log("NavSearchManager: 聖殿導覽邏輯已全數同步。");
      };

      // 3. 公開介面：切換行動端搜尋區塊
      const toggle = () => {
          const block = document.getElementById(CONFIG.blockId);
          if (!block) return;

          const input = block.querySelector(CONFIG.inputId);
          const isActive = block.classList.toggle(CONFIG.activeClass);

          if (isActive) {
              // 開啟時：延遲聚焦以喚起鍵盤
              setTimeout(() => input?.focus(), CONFIG.focusDelay);
          } else {
              // 關閉時：移除焦點收起鍵盤
              input?.blur();
          }
      };

      // 4. 公開介面：判斷當前是否正在輸入 (供 Navbar 捲動隱藏邏輯判定)
      const isTyping = () => isFocused;

      // 啟動初始化
      if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', init);
      } else {
          init();
      }

      return {
          toggle,
          isTyping
      };
  })();

  // ⚡ 暴露給 HTML onclick 調用
  window.toggleNavSearch = NavSearchManager.toggle;

  // --- Go To Top (jQuery 作用域隔離) ---
  if (typeof jQuery !== 'undefined') {
      (function($) {
          const $btn = $("#gototop");
          $(window).scroll(function() {
              $(this).scrollTop() > 200 ? $btn.fadeIn() : $btn.fadeOut();
          });
          $btn.click(function() {
              $("html, body").animate({ scrollTop: 0 }, 0);
          });
      })(jQuery);
  }
  
  // --- Scroll Down 邏輯 ---
  (() => {
    const trigger = document.querySelector('.scrolldown-block');
    if (!trigger) return;

    trigger.addEventListener('click', () => {
        // 1. 抓取目標與 Header
        const target = document.querySelector('.home .products');
        const header = document.querySelector('.sticky-navbar');
        if (!target) return;

        // 2. 計算動態偏移量 (Offset)
        // ⚡️ 修正邏輯：先判斷裝置寬度，再決定偏移數值
        // const offset = window.innerWidth < 768 ? 手機版預設 : 桌面版數值;
        const offset = window.innerWidth < 768 ? -90 : -200;
        
        // 3. 取得 Header 真實高度 (若不存在則為 0)
        const headerH = header ? header.offsetHeight : 0;
        
        // 4. ⚡️ 核心修正：只宣告一次 targetTop，並整合所有變數
        // 計算公式：目標絕對位置 + 當前捲動位置 - Navbar高度 - 自定義偏移
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerH - offset;

      // 5. 執行絲滑捲動
      window.scrollTo({ 
          top: targetPosition, 
          behavior: 'smooth' 
      });
    });
  })();
});

// 3. LINE 側邊連結初始化
//    功能：判斷行動裝置/電腦版跳轉邏輯，並處理點擊事件
document.addEventListener('DOMContentLoaded', () => {
    const defaultLineID = "@eow7138b";
    const lineLinks = document.querySelectorAll('.line-btn-link');
    
    // 精準設備判定
    const ua = navigator.userAgent;
    const isIOS = /iPhone|iPad|iPod/i.test(ua);
    const isAndroid = /Android/i.test(ua);
    const isWindows = /Windows/i.test(ua);
    // 排除 iPad 桌面模式誤判為 Mac 的情況
    const isMac = /Macintosh/i.test(ua) && !("ontouchend" in document);

    lineLinks.forEach(link => {
        let rawID = link.getAttribute('data-line-id') || defaultLineID;
        rawID = rawID.trim();
        const formattedID = rawID.startsWith('@') ? rawID : '@' + rawID;
        
        // 定義 URL
        const universalUrl = `https://line.me/R/ti/p/${formattedID}`;
        const appScheme = `line://ti/p/${rawID.startsWith('@') ? rawID : '~' + rawID}`;

        // --- 核心邏輯：靜態賦值 ---
        // iOS 和 Mac 絕對不能用 JS 動態觸發 window.open，必須讓 href 本身就是有效跳轉
        if (isIOS || isMac || isAndroid) {
            link.href = universalUrl; 
            // 官方 HTTPS 連結在行動端會自動問「是否開啟 LINE」，這是最穩且不被擋的做法
        } else if (isWindows) {
            link.href = appScheme;
        } else {
            link.href = universalUrl;
        }

        // --- 核心邏輯：動態備案 (僅針對 Windows) ---
        link.addEventListener('click', function(e) {
            // 如果是 iOS 或 Mac，我們完全不做 e.preventDefault()，讓 href 正常發揮作用
            if (isIOS || isMac || isAndroid) return;

            if (isWindows) {
                e.preventDefault();
                let hasLeftPage = false;
                const handleBlur = () => {
                    hasLeftPage = true;
                    window.removeEventListener('blur', handleBlur);
                };
                window.addEventListener('blur', handleBlur);

                // 嘗試喚起 Windows App
                window.location.href = appScheme;

                // 備案：Windows Chrome/Edge 允許在異步中開啟新分頁
                setTimeout(() => {
                    window.removeEventListener('blur', handleBlur);
                    if (!hasLeftPage && !document.hidden) {
                        window.open(universalUrl, '_blank');
                    }
                }, 2000);
            }
        });
    });
});