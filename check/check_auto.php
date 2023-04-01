<?php


    $username = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $password = md5($password."ds546f546sdf3231");

    $mysql = new mysqli("localhost", "root", "root", "magaz");

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$username' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('user', $user['login'], time() + 3600, "/");
    setcookie('admin', $user['admin'], time() + 3600, "/");
    setcookie('post', $user['post'], time() + 3600, "/");
    setcookie('id', $user['id'], time() + 3600, "/");

    $mysql->close();

    header('Location: /');

