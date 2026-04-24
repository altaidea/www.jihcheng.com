# VS Code Settings 說明文件

## SCSS 基礎設定
- 使用 Live Sass Compiler
- 同時輸出：
  - expanded → .css
  - compressed → .min.css
- 輸出目錄：/assets/css
- 啟用 source map（generateMap: true）

---

## 主題設定
- 使用主題：Default Dark Modern
- 屬於個人偏好，可依成員自行調整

---

## 編輯器顯示與斷行規範
- rulers: 80 / 120
- 啟用自動換行（wordWrap: on）
- 實際換行欄位：120
- 英文單字不強制斷字（wordBreak: normal）

---

## 縮排與空白（多人協作必設）
- tabSize: 2
- 使用空白取代 tab
- 關閉自動偵測縮排
- 全域關閉 format on save（避免互相洗版）

---

## 語言專屬設定
### PHP
- 使用 VS Code 內建 PHP formatter
- 不啟用自動格式化

### HTML
- 不自動格式化
- 保留 tag attributes 原始排列（不強制換行）

### SCSS
- 不自動格式化
- 僅由 Live Sass Compiler 處理

---

## 搜尋與效能
- 搜尋時排除：
  - node_modules
  - vendor
  - assets/css（編譯結果）

# VS Code Extension 設定說明

本專案使用 `.vscode/extensions.json` 提供必要的擴充套件建議。
此清單僅作為「專案級工具推薦」，不會自動安裝。

---

## 一、SCSS / 前端相關

### ritwickdey.live-sass
- SCSS 即時編譯工具
- 輸出 .css / .min.css
- 為本專案 SCSS 工作流核心

### syler.sass-indented
- 支援 .sass（縮排語法）
- 若專案中有使用 .sass 檔案則需要

### ecmel.vscode-html-css
- HTML / CSS class、id 智慧提示
- 有助於樣式與結構對齊

---

## 二、Git 工具

### mhutchie.git-graph
- 視覺化 Git 分支與 commit 紀錄

### donjayamanne.githistory
- 檢視單一檔案或行的修改歷史

### McCarter.start-git-bash
- Windows 環境快速開啟 Git Bash

---

## 三、本地開發

### ritwickdey.LiveServer
- 啟動本地靜態伺服器
- 適用於 HTML / 傳統網站專案

---

## 四、資料與媒體輔助

### kisstkondoros.vscode-gutter-preview
- 在行號旁即時預覽圖片

### mechatroner.rainbow-csv
- CSV 欄位顏色分隔，提升可讀性

### redhat.vscode-xml
- XML 語法高亮與結構檢視
- 常用於 sitemap、設定檔

---

## 五、語言介面（選用）

### MS-CEINTL.vscode-language-pack-zh-hant
- VS Code 繁體中文介面
- 屬於個人偏好，非必要工具

---

## 六、生產力輔助

### christian-kohler.path-intellisense
- 自動補全檔案路徑
- 適用於 include / src / href 等

### gruntfuggly.todo-tree
- 集中顯示 TODO / FIXME 標記
- 有助於長期專案維護

---

## 七、不建議使用的擴充

以下擴充套件不符合本專案「手動控格式」的原則：

- sibiraj-s.vscode-scss-formatter
- esbenp.prettier-vscode
- rvest.vs-code-prettier-eslint

請勿在本專案中啟用自動格式化功能。