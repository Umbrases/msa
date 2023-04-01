<?php
$title = "Каталог";
require "bloks/header.php";
require "check/tovar.php";


?>
<form action="check/tovar.php" class="catalog">
    <?php while ($tovar = $result->fetch_assoc()){
?>
            <div class="tovar">
<!--                    <div class="div-img"></div>-->
                <div class="img">
                    <a href="cinema.php?id=<?=$tovar["id"]?>">
                        <img class="img" style="border-radius: 3px;width: 16.5rem;height: 18rem;" src="<?=$tovar["img"]?>">
                    </a>
                </div>
                    <div class="nazvanie">
                        <a href="cinema.php?id=<?=$tovar["id"]?>" style="color: #fff;"><?=$tovar["nazvanie"]?>
                        </a>
                    </div>

<!--                    <div class="cena">--><?//=$tovar['cena']?><!--</div>-->
<!--                    <div class="cena"><a href="cinema.php?id=--><?//=$tovar["id"]?><!--">Кнопка</a></div>-->
                  </div>
<?php
    };?>

</form>
