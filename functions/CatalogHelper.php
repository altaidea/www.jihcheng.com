<?php
class CatalogHelper {
    public static function getLangContent($data, $currentLang, $basePath = '') {
        if (!is_array($data)) return $data;

        // 定義實體路徑，用來檢查檔案是否真的存在
        // 假設檔案放在 /public_html/assets/files/
        $publicPath = $_SERVER['DOCUMENT_ROOT'] . '/assets/files/';

        // 1. 嘗試目前語系
        if (!empty($data[$currentLang])) {
            $file = $data[$currentLang];
            // 如果是檔案類型，多做一個物理檢查
            if (strpos($file, '.pdf') !== false) {
                if (file_exists($publicPath . $file)) return $file;
            } else {
                return $file; // 標題或描述直接回傳
            }
        }

        // 2. 物理回退：當目前語系檔案不存在時，尋找另一個語系
        $altLang = ($currentLang === 'zh') ? 'en' : 'zh';
        if (!empty($data[$altLang])) {
            $altFile = $data[$altLang];
            if (strpos($altFile, '.pdf') !== false) {
                if (file_exists($publicPath . $altFile)) return $altFile;
            } else {
                return $altFile;
            }
        }

        // 3. 終極保險
        return '';
    }
}