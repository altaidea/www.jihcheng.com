document.addEventListener('DOMContentLoaded', function() {
  // --- 1. 語言切換邏輯 --- 靜態模擬使用，套用php的時候要移除
  // const dropdownItems = document.querySelectorAll('.dropdown-item');
  // const langDisplay = document.getElementById('current-lang');

  // dropdownItems.forEach(item => {
  //   item.addEventListener('click', function(e) {
  //     e.preventDefault();
  //     const selectedLang = this.getAttribute('data-lang');
      
  //     dropdownItems.forEach(el => el.classList.remove('d-none'));
  //     langDisplay.textContent = selectedLang;
  //     this.classList.add('d-none');
  //     // 如果需要切換語系頁面，在這裡加上跳轉邏輯
  //   });
  // });

  // --- 2. 導覽列 Active 自動追蹤 ---
  // const navLinks = document.querySelectorAll('.nav-link');
  // // 獲取當前檔案路徑，例如 "aboutus.php"，若根目錄則預設為 "index.php"
  // const currentPath = window.location.pathname.split('/').pop() || 'index.php';

  // navLinks.forEach(link => {
  //   link.classList.remove('active');
    
  //   // 獲取連結的檔案名稱
  //   const linkHref = link.getAttribute('href').split('/').pop();

  //   // 邏輯判斷：如果是根目錄連結對應 index，或是檔案名稱精確匹配
  //   if ((linkHref === '' || linkHref === './') && (currentPath === 'index.php' || currentPath === '')) {
  //     link.classList.add('active');
  //   } else if (linkHref !== '' && linkHref !== './' && currentPath.includes(linkHref)) {
  //     link.classList.add('active');
  //   }
  // });
  const navLinks = document.querySelectorAll('.nav-link');
  const currentPath = window.location.pathname;

  navLinks.forEach(link => {
    link.classList.remove('active');
    
    const href = link.getAttribute('href');
    if (!href) return;

    // 1. 取得連結中的「檔名」或「主要路徑」 (例如 products.php 或 products)
    // 分割斜線並取得最後一個非空片段
    const hrefParts = href.split('/').filter(Boolean);
    const linkTarget = hrefParts[hrefParts.length - 1] || 'index.php';

    // 2. 特殊處理：首頁
    const isHome = currentPath === '/' || currentPath.endsWith('index.php') || currentPath.endsWith('/');
    const linkIsHome = linkTarget.includes('index.php') || href === './' || href === '../';

    if (isHome) {
      if (linkIsHome) link.classList.add('active');
    } 
    // 3. 核心邏輯：只要當前網址路徑包含連結的目標文字 (排除 index)
    else if (linkTarget !== 'index.php' && currentPath.includes(linkTarget.replace('.php', '').replace('.html', ''))) {
      link.classList.add('active');
    }
  });
});