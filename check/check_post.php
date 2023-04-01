<?php
    $post = filter_var(trim(mb_strtolower($_POST['post'])), FILTER_SANITIZE_STRING);
    $sotr = filter_var(trim($_POST['sotr']), FILTER_SANITIZE_STRING);
    $admin = filter_var(trim($_POST['admin']), FILTER_VALIDATE_BOOLEAN);
    print_r($sotr);
    print_r($admin);
    print_r($post);

    require "../config/connect.php";
    $result = $mysql->query("UPDATE `users` SET  `admin` = '$admin', `post` = '$post' WHERE `users`.`login` = '$sotr'");



    $mysql->close();
    header('Location: ../admin.php');
