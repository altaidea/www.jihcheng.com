<?php 
  // 原始資料載入
  // 接收來自組件的 Return 值
  $cartoning    = include __DIR__ . '/../data/products-cartoning-data.php';
  $filling      = include __DIR__ . '/../data/products-filling-data.php';
  $capping      = include __DIR__ . '/../data/products-capping-data.php';
  $labeling     = include __DIR__ . '/../data/products-labeling-data.php';
  $airWashing   = include __DIR__ . '/../data/products-airWashing-data.php';

  $allSeries = array_merge(
    $cartoning,
    $filling,
    $capping,
    $labeling,
    $airWashing,
  );

  return array(
      'all_series' => $allSeries
  );
?>