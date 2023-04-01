<?php
$title = "Авторизация";
require "bloks/header.php";
?>

<body>
<?php
if ($_COOKIE['user'] == ''):
    ?>
    <div class="auto">
        <div class="auto_nazv">Авторизация</div>
        <form action="check/check_auto.php" method="post">
            <div><div class="auto_div">Логин</div><input type="text" class="auto_input" name="user_name" id="user_name" placeholder="Введите логин"></div>
            <div><div class="auto_div">Пароль</div><input type="password" class="auto_input" name="password" id="password" placeholder="Введите пароль"></div>
            <div><input type="submit" class="auto_submit" value="Войти"></div>
            <div class="auto_submit"><a href="regis.php">Регистрация</a></div>
        </form>
    </div>
<?php else: ?>
    <?php header('Location: /'); ?>
<?php endif;?>
</body>

