<?php
    //Подключение шапки
    require_once("header.php");
?>
 
<!-- Блок для вывода сообщений -->
<div class="block_for_messages">
    <?php
 
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>
 
<?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
    //иначе выводим сообщение о том, что он уже авторизован
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
 
 
    <div id="form_auth">
        <h3>Форма авторизации</h3>
        <form action="/site/test/auth.php" method="post" name="form_auth">
            <div class="form-group">
                <label for="form-group__email">E-mail:</label>
                <input id="form-group__email" class="form-control" type="email" name="email" required="required"><br>
                <span id="valid_email_message" class="mesage_error"></span>
            </div>
            <div class="form-group">
                <label for="form-group__password">Пароль:</label>
                <input id="form-group__password" class="form-control" type="password" name="password" placeholder="минимум 6 символов" required="required"><br>
                <span id="valid_password_message" class="mesage_error"></span>
            </div>
                <input class="btn btn-primary" type="submit" name="btn_submit_auth" value="Войти">
        </form>
    </div>
 
<?php
    }else{
?>
 
    <div id="authorized">
        <h2>Вы уже авторизованы</h2>
    </div>
 
<?php
    }
?>
<script src="js/valid_form.js"></script> 
<?php
    //Подключение подвала
    require_once("footer.php");
?>