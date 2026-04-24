<?php
// 1. 協定判斷 (加入 Proxy 檢查更安全)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || 
             (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')) 
             ? "https://" : "http://";

// 2. 主機名稱
$host = $_SERVER['HTTP_HOST'];

// 3. 抓取專案目錄 (改用 SCRIPT_NAME 避免路由干擾)
// 例如 /git/project/index.php -> 會抓到 /git/project
$scriptName = $_SERVER['SCRIPT_NAME'];
$projectPath = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');

// 4. 定義路徑
$basePath = $protocol . $host . $projectPath;
$routerRoot = $projectPath;

// -------------------------------
// ✅ 多語系設定
// -------------------------------
$defaultLang = 'en';
$supportedLangs = $allowedLangs = ['zh', 'en', 'cn', 'ko'];

/**
 * ⭐ 語系顯示映射表
 * 讓 URL 顯示 zh-TW，但程式內部運作維持 zh
 */
$langMapping = [
    'zh' => 'zh-TW',
    'cn' => 'cn',
    'en' => 'en',
    'ko' => 'ko'
];

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
?>