<?php
    //Запускаем сессию
    session_start();
    if (isset($_GET["logout"])) {
            session_destroy();
            unset($_GET["logout"]);
            header('Location:/?');            
    }
?>
<!doctype html>
<html lang="ru">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Тестовое задание</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="header" id="header"> 
                <h2 class="header__main-title">Тестовое задание</h2>
<?php //проверяем на какой странице мы находимся, если на главной то убираем ссылку "главная"
if ($_SERVER['REQUEST_URI'] == "/?" || $_SERVER['REQUEST_URI'] == "/index.php") { 
} else { ?>
                <a class="header__link" href="/index.php">Главная страница</a> 
<?php } ?>
                <ul class="header__block-button" id="auth_block"> 

<?php
    //Проверяем авторизован ли пользователь
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
?>
                    <li id="link_register">
                        <a class="btn btn-primary" href="/form_register.php">Регистрация</a>
                    </li>     
                    <li id="link_auth">
                        <a class="btn btn-info" href="/form_auth.php">Авторизация</a>
                    </li>
<?php
    }else{
        //Если пользователь авторизован, то выводим ссылку Выход
?> 
                    <li id="link_logout">
                        <a class="btn btn-warning" href="/?logout=yes">Выход</a>
                    </li>
<?php } ?>
                </ul>
            </header>
            <div class="wrapper">
        