<?php
require "bloks/header.php";
require "config/connect.php";
$name = $_COOKIE['user'];
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$name';");
$result = $result->fetch_assoc();
$mysql->close();
if($_COOKIE['user']){
?>

<form action="check/check_profile.php" class="catalog" method="post">
    <div class="cinema">
        <div class="prof-name">
            Имя
            <input type="text" name="user_name" class="prof-input" id="user_name" value="<?=$_COOKIE['user']?>">
        </div>
        <div class="prof-name">
            Должность
            <input type="text" class="prof-input" value="<?=$result['post']?>">
        </div>
        <div class="prof-name">
            Email
            <input type="text" name="email" class="prof-input" id="email" value="<?=$result['email']?>">
        </div>
        <div class="prof-name">
            Пароль
            <input type="text" name="password" class="prof-input" id="password">
        </div>
        <div class="prof-name">
            <input type="submit" class="prof-input" value="Изменить">
        </div>
    </div>
</form>
<?php
} else {
    header("Location: /");
}