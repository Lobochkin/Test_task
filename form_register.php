<?php
    //Подключение шапки
    require_once("header.php");
?>
<!-- Блок для вывода сообщений -->
<div class="block_for_messages">
    <?php
        //Если в сессии существуют сообщения об ошибках, то выводим их
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        //Если в сессии существуют радостные сообщения, то выводим их
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>
 
<?php
    //Проверяем, если пользователь не авторизован, то выводим форму регистрации, 
    //иначе выводим сообщение о том, что он уже зарегистрирован
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
        <div id="form_register">
            <h3>Форма регистрации</h3>
 
            <form action="register.php" method="post" name="form_register">
                <div class="form-group">
                    <label for="form-group__name">Имя:</label>
                    <input id="form-group__name" class="form-control" type="text" name="first_name" required="required">
                </div>
                <div class="form-group">
                    <label for="form-group__lastname">Фамилия:</label>
                    <input id="form-group__lastname" class="form-control" type="text" name="last_name" required="required">
                </div>
                <div class="form-group">
                    <label for="form-group__email">E-mail:</label>
                    <input id="form-group__email" class="form-control" type="email" name="email" required="required"><br>
                    <span id="valid_email_message" class="mesage_error "></span>
                </div>
                <div class="form-group">
                    <label for="form-group__password">Пароль:</label>
                    <input id="form-group__password" class="form-control" type="password" name="password" placeholder="минимум 6 символов" required="required"><br>
                    <span id="valid_password_message" class="mesage_error"></span>
                </div>
                    <input class="btn btn-primary" type="submit" name="btn_submit_register" value="Зарегистрироватся!">
            </form>
        </div>
<?php
    }else{
?>
        <div id="authorized">
            <h2>Вы уже зарегистрированы</h2>
        </div>
<?php
    }?>
<script src="js/valid_form_register.js"></script>
<?php  
    //Подключение подвала
    require_once("footer.php");
?>