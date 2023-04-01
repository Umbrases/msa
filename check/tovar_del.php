<?php


$nazvanie = filter_var(trim($_POST['nazvanie']), FILTER_SANITIZE_STRING);
$id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);


//if(mb_strlen($username) < 5 || mb_strlen($username) > 90){
//    echo "Вы ввели неверный логин или пароль!";
//    exit();
//}else if (mb_strlen($password) < 5 || mb_strlen($password) > 90) {
//    echo "Вы ввели неверный логин или пароль!";
//    exit();
//}

    require "../config/connect.php";

 ////////////////////////////////////////////////Проверка подключения к базе
//if ($mysql->connect_error) {
//    die('Ошибка подключения (' . $mysql->connect_errno . ') '
//        . $mysql->connect_error);
//}
//echo '<p>Соединение установлено... ' . $mysql->host_info . "</p>";
//$result = $mysql->query("SHOW TABLES;");
//while ($row = $result->fetch_row()) {
//    echo "<p>Таблица: {$row[0]}</p>";
//}
//echo 'Версия MYSQL сервера: ' . $mysql->server_info . "\n";
//print_r($id);
/////////////////////////////////////////////////


    $mysql->query("DELETE FROM `tovar` WHERE `tovar`.`id` = '$id'");
    $mysql->close();

header('Location: /admin.php');
