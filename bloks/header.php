<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <title><?=$title?></title>
</head>
<body>
    <header>
        <a href="#" class="logo">LOGO</a>

        <nav>
            <ul>
                <li><a href="../index.php">Главная</a></li>
                <li><a href="../catalog.php">Каталог</a></li>
                <li><a href="../contact.php">Контакты</a></li>
            </ul>
        </nav>
        <div>
            <ul>
                <?php
                if ($_COOKIE['user'] == ''):
                ?>

                <li><a href="auto.php">Войти</a></li>
                <?php else: ?>
                <li class="prof"><h1><a href=""><?=$_COOKIE['user']?>&#9660;</a></h1>
                    <ul>
                        <li><a href="profile.php">Профиль</a></li>
                        <?php if($_COOKIE['admin']){echo '<li><a href="../admin.php">Админка</a></li>';} ?>
                        <li><a href="../check/exit.php">Выход</a></li>
                    </ul>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </header>

<?php
