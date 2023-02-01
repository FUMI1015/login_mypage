<?php
mb_internal_encoding("utf8");

session_start();

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    
<body>
    <header>
            <img src="4eachblog_logo.jpg">
    </header>
<main>
    <div class="box">
         <h2>会員情報<div class="logout"><a href="log_out.php">ログアウト</a></div></h2>
        <div class="hello">
            <?php echo"こんにちは！".$_SESSION['name']."さん";?>
            </div>
    <form action="mypage_update.php" method="post">
        <div class="profile_pic">
        <img src="<?php echo $_SESSION['picture'];?>">
        </div>
        <div class="basic_info">
            <p>氏名:<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name ="name"></p>
            <p>メール:<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name ="mail"></p>
            <p>パスワード:<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name ="password"></p>
            <input type="hidden" value="<?php echo rand(1,10);?>" name="from_mypage_hensyu">
            <div class="comments">
                    <label>コメント</label><br>
                    <textarea rows="5" cols="45" name="comments"><?php echo $_SESSION['comments']?></textarea>
            <div class="kononaiyounihennkousurubutton">
            <input type="submit" class="sumbit_button" size="35" value="この内容に変更する">
        </div>
            </div>
        </div>
    </form>
    </div>
</main>
</body>
    <footer>
        ©︎ 2018 InterNous.inc. all rights reserved
        </footer>
</html>