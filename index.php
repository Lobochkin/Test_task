<?php
    //Подключение шапки
    require_once("header.php");
?>

        <div class="table-responsive">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>avatar</th>
                    </tr>
                </thead>
<?php if(isset($_SESSION['email']) && isset($_SESSION['password'])){?>
                <tbody class="dataTable">         
                </tbody>
            </table>
        </div>
        <script src="js/load.js"></script>
        <script src="js/createTable.js"></script>
<?php } else { ?>
        </div>
        <p class="load-message">Для загрузки таблицы необходимо авторизоваться</p>

<?php } ?>
<?php
    //Подключение подвала
    require_once("footer.php");
?>


