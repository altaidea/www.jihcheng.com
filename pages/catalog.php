<?php
  if (session_status() === PHP_SESSION_NONE) { session_start(); }

  // --- 伎倆：網址清洗重定向 ---
  if (isset($_GET['page'])) {
      $_SESSION['catalog_last_page'] = (int)$_GET['page'];
      $cleanUrl = strtok($_SERVER['REQUEST_URI'], '?');
      header("Location: " . $cleanUrl);
      exit;
  }

  // 1. 載入資料
  $allCatalog = include __DIR__ . '/../data/catalogs-data.php';
  $currentLang = $lang ?? 'en'; 

  // 2. 分頁設定
  $itemsPerPage = 10;
  $totalItems   = is_array($allCatalog) ? count($allCatalog) : 0;
  $totalPages   = ceil($totalItems / $itemsPerPage);

  $currentPage  = $_SESSION['catalog_last_page'] ?? 1;
  $currentPage  = max(1, min($totalPages, (int)$currentPage));

  $startIndex   = ($currentPage - 1) * $itemsPerPage;
  $pagedCatalog = array_slice($allCatalog, $startIndex, $itemsPerPage);
?>
      
<section class="catalog-section page-wrapper-inner">

  <div class="container">
    <div class="row gutter-40-60">
      <?php foreach ($pagedCatalog as $item): 
        // 🛡️ 自動判斷是陣列還是字串，防止 Fatal Error
        $itemTitle = is_array($item['title']) ? ($item['title'][$currentLang] ?? $item['title']['en']) : $item['title'];
        $itemSeries = is_array($item['series']) ? ($item['series'][$currentLang] ?? $item['series']['en']) : $item['title'];
        $itemFile  = is_array($item['file'])  ? ($item['file'][$currentLang]  ?? $item['file']['en'])  : $item['file'];
        $imgName   = is_array($item['img'])   ? ($item['img'][$currentLang]   ?? $item['img']['en'])   : $item['img'];
        // ⚡ 使用 asset() 工具處理路徑與版號
        // 圖片路徑
        $imgSrc  = asset("/assets/img/catalog/" . $imgName);
        // 檔案路徑 (PDF 下載也用 asset 工具確保版號統一)
        $fileSrc = asset("/assets/files/" . $itemFile);
      ?>
      <div class="col-xxl-6 col-md-6 catalog-card-wrapper">
        <div class="catalog-card">
          <div class="card-body">
            <div class="catalog-cover">
              <img src="<?= $imgSrc ?>" alt="<?= htmlspecialchars($itemTitle) ?>">
            </div>
            <div class="catalog-info">
              <span><?= htmlspecialchars($itemSeries) ?></span>
              <div class="title">
                <?= $itemTitle ?>
              </div>
              <div class="btn-group-custom">
                  <a href="<?= $basePath ?>/assets/files/<?= $itemFile ?>" class="download-btn" download>
                      <i class="bi bi-cloud-arrow-down"></i>
                      <span><?= $currentLang === 'zh' ? '檔案下載' : 'Download' ?></span>
                  </a>
                  <a href="<?= $basePath ?>/assets/files/<?= $itemFile ?>" target="_blank" class="preview-btn">
                      <i class="bi bi-eye"></i>
                      <span><?= $currentLang === 'zh' ? '線上預覽' : 'View' ?></span>
                  </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <?php if ($totalPages > 1): ?>
  <div aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item <?= ($currentPage <= 1) ? 'disabled' : '' ?>">
        <a class="page-link prev-next" href="?page=<?= $currentPage - 1 ?>">
          <?= $currentLang === 'zh' ? '« 上一頁' : '« Previous' ?>
        </a>
      </li>
      
      <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
          <?php if ($i == $currentPage): ?>
            <span class="page-link"><?= $i ?></span>
          <?php else: ?>
            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
          <?php endif; ?>
        </li>
      <?php endfor; ?>
      
      <li class="page-item <?= ($currentPage >= $totalPages) ? 'disabled' : '' ?>">
        <a class="page-link prev-next" href="?page=<?= $currentPage + 1 ?>">
          <?= $currentLang === 'zh' ? '下一頁 »' : 'Next »' ?>
        </a>
      </li>
    </ul>
  </div>
  <?php endif; ?>

</section>