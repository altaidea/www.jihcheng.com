<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // ✅ 設定管理員帳密
    if ($user === 'admin' && $pass === '123456') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: view_records.php');
        exit;
    } else {
        $error = '帳號或密碼錯誤';
    }
}
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>管理員登入</title>
    <style>
        body {font-family:"Microsoft JhengHei"; background:#f0f0f0; }
        input {display:block; max-width:100%; margin-bottom:15px; padding:10px;}
        button {width:100%; padding:10px; background:#333; color:#fff; border:none;}
        p{margin-top: 30px; font-size: .9rem; text-align:center;}
        h2{text-align:center;}
        .error {color:red; text-align:center;}
        .formlist{display:flex; justify-content:center; align-items:center; height:100vh;}
        .formbody{background:#fff; padding: 0 30px 0px 30px; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.1); display: block; overflow: hidden;}
        ul{list-style: none; margin: 0; padding: 0;}
    </style>
</head>
<body>
<div class="formlist">
    <div class="formbody">
    <form method="post">
        <h2>管理員登入</h2>
        <?php if (!empty($error)): ?><div class="error"><?= $error ?></div><?php endif; ?>
        <ul>
            <li><input type="text" name="username" placeholder="帳號" required></li>
            <li><input type="password" name="password" placeholder="密碼" required></li>
        </ul>
        <button type="submit">登入</button>
    </form>
    <p>帳號：admin 密碼：123456</p>
    </div>
</div>

</body>
</html>
