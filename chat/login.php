<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Логин</title>
</head>
<body>
    <?php
        if (isset($_REQUEST["user"])) {
            $user = $_REQUEST["user"];
            $pwd = $_REQUEST["pwd"];

            if (hash("sha256",$pwd) == "8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92") {
                echo("Привет, $user!");
                $_SESSION["user"] = $user;
                echo('<meta http-equiv="refresh" content="3; url=chat.php"> ');
            }
            else
                echo("неверный пароль");
            }
    ?>
    <form method="post">
        <input name="user" />
        <input name="pwd" type="password" >
        <button>Войти</button>
    </form>
    
</body>
</html>