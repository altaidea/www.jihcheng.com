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

// 4. 定義路徑（建議 $basePath 保持為相對路徑，在內部跳轉較穩定）
// $basePath = $protocol . $host . $projectPath;
// $routerRoot = $projectPath;
$absoluteBase = $protocol . $host . $projectPath; // 完整的 URL
$basePath = $projectPath; // 用於 HTML 內部的路徑基準
$routerRoot = $projectPath;

// -------------------------------
// ✅ 多語系設定
// -------------------------------
$defaultLang = 'en';
$supportedLangs = $allowedLangs = ['zh', 'en', 'cn', 'ko'];
//⭐ 語系顯示映射表 // 讓 URL 顯示 zh-TW，但程式內部運作維持 zh
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

// -------------------------------
// ✅ 語系持久化邏輯
// -------------------------------
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ⭐ 精確抓取 URL 第一段：排除 projectPath 的影響
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // 排除 ?query_string
$relativeUri = ltrim(substr($requestUri, strlen($projectPath)), '/');
$uriSegments = explode('/', $relativeUri);
$urlFirstSegment = $uriSegments[0] ?? '';

// 判定語系優先級
if (isset($reverseLangMapping[$urlFirstSegment])) {
    $lang = $reverseLangMapping[$urlFirstSegment];
} elseif (in_array($urlFirstSegment, $supportedLangs)) {
    $lang = $urlFirstSegment;
} elseif (isset($_SESSION['lang']) && in_array($_SESSION['lang'], $supportedLangs)) {
    $lang = $_SESSION['lang'];
} elseif (isset($_COOKIE['site_lang']) && in_array($_COOKIE['site_lang'], $supportedLangs)) {
    $lang = $_COOKIE['site_lang'];
} else {
    $lang = $defaultLang;
}

// 更新持久化資料
$_SESSION['lang'] = $lang;
if (($_COOKIE['site_lang'] ?? '') !== $lang) {
    // 這裡的路徑建議設為 $projectPath ?: '/' 確保 Cookie 只在該專案有效
    setcookie('site_lang', $lang, time() + (3600 * 24 * 30), ($projectPath ?: '/'), '', false, true);
}
?>