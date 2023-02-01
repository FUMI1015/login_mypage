<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:http://localhost/login_mypage/mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
 <header>
    <img src="4eachblog_logo.jpg">
     <div class="login"><a href="login.php">ログイン</a></div>
    </header>

<main>
<form action="mypage.php" method="post">
    <div class="form_contents">
    <div class="mail">
        <label>メールアドレス</label><br>
        <input type="text" class="formbox" size="40"  name="mail">
    </div>
     <div class="password">
        <label>パスワード</label><br>
        <input type="password" class="formbox" size="40"  name="password">
     </div>
    <div class="login_check">
        <label><input type="checkbox" class="formbox" size="40" name="login_keep" value="login_keep">
        <?php
        if(isset($val)){
            echo"checked='checked'";
        }
    ?>>ログイン状態を保持する</label>
    </div>
    <div class="loginbutton">
        <input type="submit" class="sumbit_button" size="35"  value="ログイン">
    </div>
    </div>
</form>
</main>
<footer>
    ©︎ 2018 InterNous.inc all rights reserved
</footer>
</body>
</html>
    