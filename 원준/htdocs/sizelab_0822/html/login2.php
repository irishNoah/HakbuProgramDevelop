<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP Session Login Test</title>
    </head>
    <body>
        <h1>Hello, world!</h1>
        <hr />
        <h2>로그인</h2>
        <?php if(!isset($_SESSION['ID']) || !isset($_SESSION['password'])) { ?>
        <form method="post" action="login_server.php">
            <p>아이디: <input type="text" name="ID" /></p>
            <p>비밀번호: <input type="password" name="password" /></p>
            <p><input type="submit" value="로그인" /></p>
        </form>
        <?php } else {
            $ID = $_SESSION['ID'];
            $password = $_SESSION['password'];
            echo "<p><strong>$nickname</strong>($ID)님은 이미 로그인하고 있습니다. ";
            echo "<a href=\"../main.php\">[돌아가기]</a> ";
            echo "<a href=\"logout.php\">[로그아웃]</a></p>";
        } ?>
    </body>
</html>