<?php
$title = "Регистрация";
require "bloks/header.php";
?>

<body>
<?php
if ($_COOKIE['user'] == ''):
    ?>
    <div class="auto">
        <div class="auto_nazv">Регистрация</div>
        <form action="check/check_regis.php" method="post">
            <div><div class="auto_div">Логин</div><input type="text" class="auto_input" name="user_name" id="user_name" placeholder="Введите логин"></div>
            <div><div class="auto_div">Email</div><input type="email" class="auto_input" name="email" id="email" placeholder="Введите email"></div>
            <div><div class="auto_div">Пароль</div><input type="password" class="auto_input" name="password" id="password" placeholder="Введите пароль"></div>
            <div><input type="submit" class="auto_submit" value="Зарегистрироваться"></div>
            <div class="auto_submit"><a href="auto.php">Авторизация</a></div>
        </form>
    </div>
<?php else: ?>
    <?php header('Location: /'); ?>
<?php endif;?>
</body>
