<?php
session_start();

// =========================
// 語系（AJAX 必須從 GET 接收）
// =========================
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'zh';

// =========================
// FAQ 資料
// =========================
$faqFile = __DIR__ . '/../../data/faq-data.php';
$faq = file_exists($faqFile) ? include $faqFile : array();

// =========================
// 參數
// =========================
$cat     = isset($_GET['cat']) ? $_GET['cat'] : 'all';
$page    = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = isset($_GET['perPage']) ? (int)$_GET['perPage'] : 10;

// =========================
// 類別比對（多語支援）
// =========================
function normalizeCat($label) {
    $map = array(
        '常見問題' => 'common',
        '常见问题' => 'common',
        'General Questions' => 'common',

        '顧問問題' => 'consult',
        '顾问问题' => 'consult',
        'Consultation Questions' => 'consult',
    );
    return isset($map[$label]) ? $map[$label] : '';
}

// =========================
// 過濾 & 排序
// =========================
// 系統邏輯說明
// faq-data.php（原始順序）
//         ↓
// array_reverse()  ← 最新在前
//         ↓
// 依 cat 過濾
//         ↓
// array_slice() 分頁
//         ↓
// 畫面顯示
// =========================

// $faq = array_reverse($faq); // 反序

// 控制排序
usort($faq, function($a, $b) {
    return ($a['order'] ?? 999) <=> ($b['order'] ?? 999);
});

$filtered = array();

foreach ($faq as $item) {

    $label = isset($item['category'][$lang]) ? 
                $item['category'][$lang] : 
                $item['category']['zh'];

    $norm = normalizeCat($label);

    if ($cat === 'all' || $cat === $norm) {
        $filtered[] = $item;
    }
}

// =========================
// 分頁
// =========================
$totalItems = count($filtered);
$totalPages = max(1, ceil($totalItems / $perPage));

$page = max(1, min($page, $totalPages));
$offset = ($page - 1) * $perPage;
$list = array_slice($filtered, $offset, $perPage);

// =========================
// 輸出 HTML
// =========================
?>

<div class="accordion" id="faqAccordion">

<?php
$index = $offset + 1;

foreach ($list as $i => $item):

    $q = $item['question'][$lang] ?? $item['question']['zh'];
    $a = $item['answer'][$lang]   ?? $item['answer']['zh'];
    $c = $item['category'][$lang] ?? $item['category']['zh'];
?>
    <div class="accordion-item faq-item" id="faq-<?= $item['slug'] ?>">

        <h2 class="accordion-header" id="h<?= $index ?>">
            <button class="accordion-button faq-header <?= ($i==0?'':'collapsed') ?>"
                data-bs-toggle="collapse"
                data-bs-target="#c<?= $index ?>"
                aria-expanded="<?= ($i==0?'true':'false') ?>">
                <span class="faq-a-title">Q<?= $index ?></span>
                <span class="faq-title-text"><?= htmlspecialchars($q) ?></span>
            </button>
        </h2>

        <div id="c<?= $index ?>" class="accordion-collapse collapse <?= ($i==0?'show':'') ?>">
            <div class="accordion-body faq-body">
                <span class="faq-a-title">A<?= $index ?></span>
                <div class="faq-content">
                    <?= $a ?>
                    <small># <?= htmlspecialchars($c) ?></small>
                </div>
            </div>
        </div>

    </div>
<?php
$index++;
endforeach;
?>
</div>

<?php if ($totalPages > 1): ?>
<div class="pagination-block">
    <ul class="pagination justify-content-center">

        <li class="page-item <?= ($page <= 1 ? 'disabled' : '') ?>">
            <a class="page-link faq-page" data-page="<?= $page - 1 ?>">
                « 上一頁</a>
        </li>

        <?php for ($p=1;$p<=$totalPages;$p++): ?>
            <li class="page-item <?= ($p==$page?'active':'') ?>">
                <a class="page-link faq-page" data-page="<?= $p ?>"><?= $p ?></a>
            </li>
        <?php endfor ?>

        <li class="page-item <?= ($page >= $totalPages ? 'disabled' : '') ?>">
            <a class="page-link faq-page" data-page="<?= $page + 1 ?>">
               下一頁 »
            </a>
        </li>

    </ul>
</div>
<?php endif; ?>
