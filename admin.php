<?php
    require "bloks/header.php";
    require "check/tovar.php";
    require "config/connect.php";

    if($_COOKIE['admin']){
//////////////////////////////// Добавление товара
        echo '<div class="admin_div">
                <form action="check/tovar_new.php" method="post">
                    <div class="auto_nazv">Добавление товара</div>
                    <input type="file" name="img" id="img" placeholder="Изображение">
                    <input type="text" name="nazvanie" id="nazvanie" placeholder="Название">
                    <input type="text" name="opisanie" id="opisanie" placeholder="Описание">
                    <input type="text" name="cena" id="cena" placeholder="Цена">
                    <button>Добавить</button>
                </form>';
///////////////////////////////

//////////////////////////////// Удаление товара
        echo '<div class="auto_nazv">Удаление товара</div>
        <form action="check/tovar_del.php" method="post">
                <table class="table">
               <tr>
                        <th>Галочка</th>
                        <th>Картинка</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Цена</th>
                     </tr> ';
        while ($tovar = $result->fetch_assoc()){

            echo '<tr>
                        <th><input type="checkbox" class="id" name="id" value="'.$tovar["id"].'"></th>
                        <th><input type="file" value="'.$tovar["img"].'"></th>
                        <th class="nazvanie"><input type="text" value="'.$tovar["nazvanie"].'"></th>
                        <th><input type="text" value="'.$tovar["opisanie"].'"></th>
                        <th>'.$tovar['cena'].'</th>
                  </tr>
                  ';

    };
        echo '</table>
<input type="submit" value="Удалить"></p>
        </form>';

////////////////////////////////


        if ($_COOKIE['post'] == "начальник"){
///////////////////////////////////изменение должности
      echo '
        
            <div class="auto_nazv">Изменение должности</div>
            <form action="check/check_post.php" method="post">
            <table class="table">
               <tr>
                        <th>Сотрудник</th>
                        <th>Должность</th>
                        <th>Админ</th>
                        <th>Изменить</th>
               </tr>';
                  $result = $mysql->query("SELECT `login` FROM `users`;");

                  while ($arr = $result->fetch_assoc()){
                          echo '
                                <tr><th><input class="sotr" name="sotr" value="'.$arr["login"].'"></th>
                                <th><select name="post" >
                                  <option class="post">Начальник</option>
                                  <option class="post">Сотрудник</option>
                                  <option class="post">Покупатель</option> 
                                </select></th>
                                <th><input type="checkbox" class="admin" name="admin">Админ</th>
                                <th><input type="submit" value="Изменить"></p> </th>
                                </tr>
                                ';
                                                      };
                echo'                                                            
               </table>
            </form>
        </div>';
         }
//////////////////
    } else{
        header("Location: /");
        }

?>
