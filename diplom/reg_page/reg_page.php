<?php 
session_start();

// подключение базы данных
require_once("../assets/db_connect.php");

// регистрация
if (isset($_POST["reg-sent"])) {
    $login = $_POST["emailForm"];
    $pass = $_POST["passwordForm"];
    
    $update = $mysql->query(
        "INSERT INTO `user` SET `email_user` = '$login', `password_user` = '$pass'"
    );
    
    header('Location: ../aut_page/aut_page.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="reg_page.css" type="text/css"/>
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
    
    
    <!--<div class="jumbotron d-flex align-items-center min-vh-100 h-100 justify-content-center">
        <div class="p-3 text-center border border-dark align-items-center reg-div">
            <p class="text-center">Регистрация</p>

            <form method="POST">
                <div class="mb-3">
                    <p class="text-start"><label for="emailForm">Введите эл. почту</label></p>
                    <input type="email" class="form-control gray-bg" id="emailForm" name="emailForm" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <p class="text-start"><label for="passwordForm">Введите пароль</label></p>
                    <input type="password" class="form-control gray-bg" id="passwordForm" name="passwordForm" aria-describedby="emailHelp">
                    <br>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary text-dark" name="reg-sent" value="Зарегистрироваться">
                    <br> <br>
                </div>
                <a href="../aut_page/aut_page.php">Есть аккаунт? Войти</a>
            </form>
        </div>
    </div>-->
        <article>
            <div class="reg">
                <h1 style=" font-size: 36px; margin-bottom: 14px;margin-top: 10px;">Регистрация</h1>
                <form method="post">
                <div class="form-group">
                    <label style="font-size: 20px; font-weight: 400; margin-bottom: 10px;" id="username-lbl" for="login" class="required invalid">Email</label>
                    <br>
                    <input style="margin-bottom: 10px;" type="text" id="emailForm" name="emailForm"  size="30" required="required" aria-required="true" autofocus aria-invalid="true">
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; font-weight: 400; margin-bottom: 10px;" id="password-lbl" for="password" class="required">Пароль</label>
                    <br>
                    <input style="margin-bottom: 10px;" type="password" id="passwordForm" name="passwordForm" size="30" maxlength="99" required="required" aria-required="true">
                </div>
               
                <div class="form-group">
                    <input type="submit" class="btn btn-primary text-dark" name="reg-sent" value="Зарегистрироваться">
                </div>
                <a href="../aut_page/aut_page.php">Есть аккаунт? Войти</a>
           </form>
         </div>
        </article>
    </main>
</body>
</html>