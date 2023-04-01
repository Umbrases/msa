<?php
require ("../config/connect.php");

$username = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$login = $mysql->query("SELECT `login` FROM `users`");
while ($arr = $login->fetch_assoc()){
if(in_array("$username", $arr) == 1){
    echo 'Логин похожий';
    exit();
}}
$email_star = $mysql->query("SELECT `email` FROM `users`");
while ($arr2 = $email_star->fetch_assoc()){
    if(in_array("$email", $arr2)){
        echo 'Email похожий';
        exit();
    }}


if(mb_strlen($username) < 5 || mb_strlen($username) > 90){
    echo "Вы ввели неверный логин или пароль!";
    exit();
}else if (mb_strlen($password) < 5 || mb_strlen($password) > 90) {
    echo "Вы ввели неверный логин или пароль!";
    exit();
}

$password = md5($password."ds546f546sdf3231");


$mysql->query("INSERT INTO `users` (`login`, `password`, `admin`, `email`, `post`) value ('$username', '$password', 0, '$email', 'покупатель')");
$mysql->close();

header('Location: /');
