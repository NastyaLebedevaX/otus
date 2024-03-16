<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
require_once 'connect.php';
require_once 'functions.php';

if (isset($_POST["login"])) {
    login();
}
?>
<div class="container">
    <a style="width: 100%;" href="index.php">
        <button>Назад</button>
    </a>
    <div class="login-form">
        <form action="login.php" method="post">
            <h1>Авторизация</h1>
            <div class="content">
                <div class="input-field">
                    <input name="username" type="text" placeholder="Login" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input name="password" type="password" placeholder="Пароль" autocomplete="new-password">
                </div>
            </div>
            <div class="action">
                <button onclick="location.href='registration.php'" type="button">Регистрация</button>
                <button name="login" type="submit">Вход</button>
            </div>
        </form>
    </div>
</div>
</body>

</html>