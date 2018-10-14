<?php

session_start();
$_SESSION=array();
if (isset($_COOKIE[session_name()])==true)
{
    setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ろくまる園</title>
</head>
<body>

カートを空にしました。<br />
<br />
<a href="shop_list.php">商品画面へ</a>
</body>
</html>