<?php
// =========================
// 確保 $lang 存在
// =========================
if (!isset($lang)) {
    $lang = isset($faqLang) ? $faqLang : 'zh';
}

// 讀取 FAQ
$faqFile = __DIR__ . '/../../data/faq-data.php';
$faq = file_exists($faqFile) ? include $faqFile : array();

$faq = array_reverse($faq);
$list = array_slice($faq, 0, 10);
?>

<div class="accordion" id="faqAccordion">
<?php
$index = 1;
foreach ($list as $i => $item):

    $q = isset($item['question'][$lang]) ? $item['question'][$lang] : $item['question']['zh'];
    $a = isset($item['answer'][$lang])   ? $item['answer'][$lang]   : $item['answer']['zh'];
    $c = isset($item['category'][$lang]) ? $item['category'][$lang] : $item['category']['zh'];
?>
    <div class="accordion-item faq-item" id="faq-<?= $item['slug'] ?>">

        <h2 class="accordion-header" id="h<?= $index ?>">
            <button class="accordion-button faq-header <?= ($i==0?'':'collapsed') ?>"
                data-bs-toggle="collapse"
                data-bs-target="#c<?= $index ?>"
                aria-expanded="<?= ($i==0?'true':'false') ?>">
                <span class="faq-a-title">Q<?= $index ?></span>
                <?= htmlspecialchars($q) ?>
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
