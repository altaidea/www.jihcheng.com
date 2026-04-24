<?php
// 1. 協定判斷 (加入 Proxy 檢查更安全)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || 
             (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')) 
             ? "https://" : "http://";

// 2. 主機名稱
$host = $_SERVER['HTTP_HOST'];

// 3. 抓取專案目錄 (改用 SCRIPT_NAME 避免路由干擾)
$scriptName = $_SERVER['SCRIPT_NAME'];
$projectPath = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');

// 4. 定義路徑
$basePath = $protocol . $host . $projectPath;

// 用於 Router 解析的根目錄
$routerRoot = $projectPath;

// -------------------------------
// ✅ 多語系設定 (使用 array() 以嚴守 PHP 5 兼容性)
// -------------------------------
$defaultLang = 'en';
$supportedLangs = array('zh', 'en', 'cn', 'ko');

/**
 * ⭐ 語系顯示映射表
 * 鍵：程式內部代碼 (2碼)
 * 值：URL 顯示路徑 (符合 SEO 規範)
 */
$langMapping = array(
    'zh' => 'zh-TW',
    'cn' => 'cn',
    'en' => 'en',
    'ko' => 'ko'
);

// 反向映射 (用於路由解析)
$reverseLangMapping = array_flip($langMapping);

// -------------------------------
// ✅ 多語系設定 // false 不使用多語言網址層級 或 true 使用多語言網站層級
// ✅ Preloading 動畫開關 // false 或 true
// -------------------------------
if (!defined('USE_MULTILANG')) {
  define('USE_MULTILANG', true); 
}

if (!defined('ENABLE_TRANSITION_OVERLAY')) {
  define('ENABLE_TRANSITION_OVERLAY', false);
}

// -------------------------------
// 💡 小技巧：預防變數污染
// -------------------------------
// 在 config 結尾可以明確初始化 $lang，確保 index.php 沒抓到網址前，系統有預設語系
$lang = $defaultLang;
?>