！！！注意事項
data會產生記錄檔，請勿從主機端直接整個資料夾覆蓋，避免客戶檔案被覆蓋

維修網站公告用：
將maintenance.lock鑰匙的註解文字（_維修網站公告用）刪除即可，自動載入維修頁面。

網站移到本機端測試，需要更改以下檔案
.htaccess
config.php

Sitrmap
https://www.xml-sitemaps.com/

Schema
綱要、結構描述，用來描述資料或系統的組成方式。核心概念為定義格式、結構、規則。
https://schema.org/

頁面 include 流程
ob_start();
include $pageFile;
$pageContent = ob_get_clean();
include __DIR__ . '/layouts/layout.php';

20250918 新增測試轉正式通道

# 更改預設語系需要異動的檔案
1、
config.php
$defaultLang = 'zh'; // 預設中文，改 en 就變成預設英文
$supportedLangs = ['zh', 'en'];

2、
layout.php
$defaultLang = 'zh'; // 預設中文，改 en 就變成預設英文
# END -------------------------------------------------------------------------------------------

# 調整語系
1、config.php
2、nav.php 最上面的設定以及切換語系選單

# -----------------------------------------------------------------------------------------------
目前主機（伺服器）的版本
常見是 PHP 7.3（或更低）
而 fn 需要 PHP 7.4+，上線後就會噴出像是 Parse error: syntax error, unexpected 'fn' (T_FN) 的錯誤。
因此有針對products-menu.php 更新為相容版本
把 fn($v)=>... 全部換成傳統匿名函式 function($v){ ... }。
其餘 IIFE 包裝、變數隔離與迴圈變數改名（$_seriesKey / $_productKey）都保留，避免覆蓋你產品頁面的變數。
# END -------------------------------------------------------------------------------------------


# 表單布局
/captcha.php
/data/contact_records.json   ← 寫入資料
/phpMailer/class.phpmailer.php
/view_records.php            ← (可選) 後台瀏覽頁





robots.txt
User-agent: *
Disallow: /