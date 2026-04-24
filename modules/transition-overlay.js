(function () {
  // ⚡ 環境自檢：檢查 GSAP 是否存在
  if (typeof gsap === "undefined") {
      console.error("機械核心錯誤：GSAP 未安裝，強制拆除遮罩。");
      const overlay = document.getElementById("transition-overlay");
      const body = document.body;
      if (overlay) overlay.style.display = "none";
      body.classList.remove("no-scroll");
      return; // 終止後續動畫邏輯
  }

  /* ===============================
     變數與元素選取
  ================================ */
  const overlay = document.getElementById("transition-overlay");
  const wrapper = document.querySelector(".page-wrapper");
  const body = document.body;
  const storageKey = "Visited_Session";

  const perfNav = performance.getEntriesByType("navigation")[0];
  const isReload = perfNav ? perfNav.type === "reload" : false;
  const hasVisited = sessionStorage.getItem(storageKey);

  /* ===============================
     工具：重置頁面狀態（iOS bfcache）
  ================================ */
  function resetPageState() {
    if (wrapper) {
      wrapper.style.opacity = "1";
      wrapper.classList.remove("fade-out", "fade-in");
      wrapper.style.transform = "none";
    }
    if (overlay) overlay.style.display = "none";
    body.classList.remove("no-scroll");
  }

  window.addEventListener("pageshow", function (event) {
    if (event.persisted) resetPageState();
  });

  /* ===============================
    進場動畫（全新設計版）
  ================================ */
  function playIntroAnimation() {
    body.classList.add("no-scroll");
    if (overlay) overlay.style.display = "block";

    const solidLogo = document.getElementById("logo-solid");
    const logoWrapper = document.querySelector(".logo-wrapper");

    if (!solidLogo || !logoWrapper) {
      console.warn("Intro elements missing, skip animation.");
      resetPageState();
      return;
    }

    // ===== 初始狀態 =====
    gsap.set(wrapper, { opacity: 1, transform: "none" });
    wrapper.classList.remove("fade-in");

    gsap.set(overlay, {
      scale: 1.2,
      opacity: 1,
      transformOrigin: "50% 50%",
    });

    gsap.set(logoWrapper, {
      opacity: 1,
      scale: 0.92,
    });

    gsap.set(solidLogo, {
      opacity: 1,
      // filter: "blur(12px)",
      scale: 1.15,
    });

    const tl = gsap.timeline({
      defaults: { ease: "power3.out" },
      onComplete: finishIntro,
    });

    /* ===============================
      1. Overlay 聚焦縮放
    =============================== */
    tl.to(overlay, {
      scale: 1,
      duration: 1.4,
    });

    /* ===============================
      2. Logo 聚焦（Blur → Clear）
    =============================== */
    // tl.to(
    //   solidLogo,
    //   {
    //     filter: "blur(0px)",
    //     scale: 1,
    //     duration: 1.2,
    //   },
    //   "-=0.6"
    // );

    /* ===============================
      3. 停留節奏
    =============================== */
    tl.to({}, { duration: 1.0 });

    /* ===============================
      4. Overlay 溶解退場
    =============================== */
    // tl.to(overlay, {
    //   opacity: 0,
    //   duration: 1,
    //   ease: "power2.inOut",
    // });

    /* ===============================
      4. Overlay 六等分抽離退場
    ================================ */

    const slices = overlay.querySelectorAll(".slice");

    tl.to(slices, {
      y: (index) => (index % 2 === 0 ? "-100%" : "100%"),
      duration: 1.1,
      ease: "power3.inOut",
      stagger: {
        each: 0.08,
        from: "start"
      }
    });

    /* ===============================
      5. Logo Wrapper 淡出
    =============================== */
    tl.to(
      logoWrapper,
      {
        opacity: 0,
        duration: 0.6,
      },
      "-=0.6"
    );

    function finishIntro() {
      if (overlay) overlay.style.display = "none";
      body.classList.remove("no-scroll");
      sessionStorage.setItem(storageKey, "true");
    }
  }



  /* ===============================
     是否播放 intro
  ================================ */
  // ===== 全域防止 overlay 閃現 =====
  if (overlay) {
    overlay.style.display = "none";
  }

  if (!hasVisited || isReload) {
    playIntroAnimation();
  } else {
    if (overlay) overlay.style.display = "none";
    wrapper.style.opacity = "0";
    wrapper.classList.add("fade-in");
  }

  /* ===============================
     頁面跳轉淡出
  ================================ */
  document.addEventListener("click", function (e) {
    const link = e.target.closest("a");
    if (!link) return;

    const url = link.getAttribute("href");
    const target = link.getAttribute("target");

    if (
      !url ||
      url.startsWith("#") ||
      url.startsWith("mailto:") ||
      url.startsWith("tel:") ||
      target === "_blank" ||
      e.metaKey ||
      e.ctrlKey ||
      e.shiftKey
    ) {
      return;
    }

    e.preventDefault();

    gsap.to(".page-wrapper", {
      opacity: 0,
      duration: 0.35,
      ease: "power2.in",
      onComplete: () => {
        window.location.href = url;
      },
    });
  });
})();
