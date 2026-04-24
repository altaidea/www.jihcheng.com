<?php
// 確保語言與字串可用
$lang = $lang ?? 'zh';
$langFile = __DIR__ . '/../lang/' . $lang . '.php';
$langStrings = file_exists($langFile) ? include $langFile : [];
$path = '302';

// 設定 meta
// if ($lang === 'en') {
//     $langStrings['page_title'] = 'Maintenance Mode';
//     $langStrings['page_description'] = 'Our website is currently undergoing scheduled maintenance. Please check back later.';
//     $langStrings['page_keywords'] = 'maintenance, site update, system offline';
//     $title = 'Maintenance Mode';
//     $message = 'Our website is currently undergoing scheduled maintenance. Please check back later.';
// } else {
//     $langStrings['page_title'] = '系統維護中';
//     $langStrings['page_description'] = '我們的網站正在進行例行維護，請稍後再試';
//     $langStrings['page_keywords'] = '維護中, 系統維護, 網站更新';
//     $title = '系統維護中';
//     $message = '我們的網站正在進行例行維護，請稍後再試';
// }
if ($lang === 'en') {
    $langStrings['page_title'] = 'Site Under Construction';
    $langStrings['page_description'] = 'Our website is currently under construction. Please check back soon.';
    $langStrings['page_keywords'] = 'under construction, coming soon, site building';
    $title = 'Site Under Construction';
    $message = 'Our website is currently under construction. Please check back soon.';
} else {
    $langStrings['page_title'] = '網站建置中';
    $langStrings['page_description'] = '我們的網站正在建置中，敬請期待。';
    $langStrings['page_keywords'] = '建置中, 網站建置, 即將上線';
    $title = '網站建置中';
    $message = '我們的網站正在建置中，敬請期待。';
}
?>

<section class="maintenance-section">
  <div class="container centent">
    <div class="information">
      <!-- <h1><?= $langStrings['page_title'] ?></h1>
      <p><?= $langStrings['page_description'] ?></p> -->
    </div>
  </div>
</section>