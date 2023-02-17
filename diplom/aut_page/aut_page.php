<?php 
session_start();

// подключение базы данных
require_once("../assets/db_connect.php");

// авторизация
if (isset($_POST["auth-sent"])) {
    $login = $_POST["login"];
    $pass = $_POST["pass"];
    

    $result = $mysql->query("SELECT * FROM `user` WHERE `email_user` = '$login' AND `password_user` = '$pass'");
    // конвертируем в массив
    $user = $result->fetch_assoc(); 
    
    if ($user) {
        $_SESSION['logged_user'] = $user['ID_user'];
        header('Location: ../index1.php');
    } else {
        echo "Такой пользователь не найден.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="aut_page.css" type="text/css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="_wrapper">
            <div class="logo">
                <img src="../img/logo.png" height="70px"  />
            </div>
            <div class="main-header">
                <p><a href="../index.php" >Назад</a></p>
                </div>
            </div>
        </div>
        
    </header>
    <main>
    <div class="auth" style="margin-top:100px">
    <h1 style="font-family:'Raleway' font-size: 30px margin-bottom: 14px ">Вход</h1>
        <form method="POST">
            <div class="loginLabel" style="font-size: 20px; font-weight: 400; margin-bottom: 10px;">Email</div>
            <input type="email" class="form-control" name="login" id="login">
            <div class="pswrdLabel" style="font-size: 20px; font-weight: 400; margin-bottom: 10px;">Пароль</div>
            <input type="password" class="form-control" name="pass" id="pass">
            <br>
            <input type="submit" class="btn-auth" name="auth-sent" value="Войти">
            <br>
            <a href="../reg_page/reg_page.php">Нет аккаунта? Зарегистрироваться</a>
        </form>
    </div>

        <!--<article>
            <div class="aut">
                <h1 style=" font-size: 36px; margin-bottom: 14px;margin-top: 10px;">Вход</h1>
                <form action="/log-in?task=user.login" method="post" class="form-validate"></form>
                <div class="form-group">
                    <label style="font-size: 20px; font-weight: 400; margin-bottom: 10px;" id="username-lbl" for="login" class="required invalid">Email</label>
                    <input style="margin-bottom: 10px;" type="text" name="login" id="login" size="30" required="required" aria-required="true" autofocus aria-invalid="true">
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; font-weight: 400; margin-bottom: 10px;" id="password-lbl" for="password" class="required">Пароль</label>
                    <input style="margin-bottom: 10px;" type="password" name="password" id="password" size="30" maxlength="99" required="required" aria-required="true">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn" id="pass-btn"> Войти </button>
                </div>
                <a href="C:\Users\Гульфия\Desktop\diplom\reg-page\index.html">Нет аккаунта? Зарегистрироваться</a>
            </div>
        </article>-->
    </main>
</body>
</html>