<?php
require "../config/connect.php";
$username = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$id = $_COOKIE['id'];

//print_r($username);
//print_r($email);
//print_r($id);

$password = md5($password."ds546f546sdf3231");

$mysql->query("UPDATE `users` SET `login` = '$username', `password` = '$password' , `email` = '$email' WHERE `users`.`id` = '$id'");
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$username' AND `password` = '$password'");
$user = $result->fetch_assoc();

setcookie('user', $user['login'], time() + 3600, "/");
setcookie('admin', $user['admin'], time() + 3600, "/");
setcookie('post', $user['post'], time() + 3600, "/");
setcookie('id', $user['id'], time() + 3600, "/");

$mysql->close();

header('Location: /');