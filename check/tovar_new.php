<?php

$img = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
$nazvanie = filter_var(trim($_POST['nazvanie']), FILTER_SANITIZE_STRING);
$opisanie = filter_var(trim($_POST['opisanie']), FILTER_SANITIZE_STRING);
$cena = filter_var(trim($_POST['cena']), FILTER_SANITIZE_STRING);

$img = "img/".$img;

//if(mb_strlen($username) < 5 || mb_strlen($username) > 90){
//    echo "Вы ввели неверный логин или пароль!";
//    exit();
//}else if (mb_strlen($password) < 5 || mb_strlen($password) > 90) {
//    echo "Вы ввели неверный логин или пароль!";
//    exit();
//}

require "../config/connect.php";
$mysql->query("INSERT INTO `tovar` (`img`, `nazvanie`, `opisanie`, `cena`) VALUES ( '$img', '$nazvanie', '$opisanie', '$cena');");
$mysql->close();

header('Location: /admin.php');
