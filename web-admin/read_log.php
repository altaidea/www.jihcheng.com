<?php
session_start();
header('Content-Type: text/plain; charset=utf-8');

if (empty($_SESSION['admin_logged_in'])) {
    http_response_code(403);
    exit('Permission denied.');
}

$logFile = dirname(__FILE__) . '/data/sitemap_report.log';
if (file_exists($logFile)) {
    readfile($logFile);
} else {
    echo "尚未生成 sitemap_report.log。";
}
?>
