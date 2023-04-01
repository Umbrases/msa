<?php
require '../config/connect.php';
$id = $_POST['id'];
$comments = $_POST['body'];
$login = $_POST['login'];

if ($login == ""){
    $login = "noname";
    echo $login;
}

print_r($id);
print_r($comments);

$mysql->query("INSERT INTO `coments` (`id`, `product_id`, `coments`, `login`) VALUES (NULL, '$id', '$comments', '$login')");

header('Location: /cinema.php?id=' . $id);