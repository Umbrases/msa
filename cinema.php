<?php
$title = "Каталог";
require "bloks/header.php";
require "check/tovar.php";
require "config/connect.php";

$product_id = $_GET['id'];
$product = mysqli_query($mysql, "SELECT * FROM `tovar` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

$comments = mysqli_query($mysql, "SELECT * FROM `coments` WHERE `product_id` = '$product_id'");
$comments = mysqli_fetch_all($comments);

$genres = mysqli_query($mysql, "SELECT * FROM `genres` WHERE `product_id` = '$product_id'");
$genres = mysqli_fetch_all($genres);
?>

<div class="cinema">
    <div class="img">
        <img  style="border-radius: 3px;width: 21.5rem;height: 26rem;" src="<?=$product["img"]?>">
    </div>
    <div class="nazvanie-cinema" >
        <?=$product["nazvanie"]?>
    </div>
    <div class="opisanie-cinema"><?=$product["opisanie"]?></div>
    <div class="cena"><?=$product['cena']?></div>

    <div class="genres">
        <?php
        foreach ($genres as $genre) {
            ?>

            <li><?='Жанр:   ' . $genre[2]?></li>
            <?php
        }
        ?>
    </div>

    <div class='comments'>
        <?php
        foreach ($comments as $comment) {
            ?>

                <li><?=$comment[3] .  ':   ' . $comment[2]?></li>
            <?php
        }
        ?>
    </div>


    <form action="check/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?=$product_id?>">
        <input type="hidden" name="login" value="<?=$_COOKIE['user']?>">
        <textarea name="body"></textarea>
        <button type="submit">Добавить коментарий</button>
    </form>

</div>

