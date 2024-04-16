<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_kat.css">
</head>
<body>
    <header>
        <div class="head">
            <a href="../index.html"><div class="logo">HOLYKON STORE</div></a>
            <ul>
                <li><a href="man.html">Мужское</a></li>
                <li><a href="#">Женское</a></li>
                <li><a href="#">Бренды</a></li>
                <li><a href="news.html">Новости</a></li>
            </ul>
            <div class="r_header">
                <a href="#"><div class="fav"></div></a>
                <a href="#"><div class="cart"></div></a>
                <a href="login.html"><div class="profile"></div></a>
            </div>
        </div>
    </header>
        <div class="wrapper">
            <section>
                <div class="left_side">
                    здесь будут фильтры для поиска
                </div>
                <div class="right_side">
                    <div class="grid_container">
                    <a href="item.html"><div class="item">
                            <img src="../img/hoodie.jpg" alt="hoodie_carh" class="item_img">
                            <div class="titlebtns">
                                <div class="item_name">ТОЛСТОВКА CARHARTT WIP HOODED AMERICAN SCRIPT SWEAT</div>
                                <div class="item_btns">
                                    <div class="price">8 990 рублей</div>
                                    <div class="favor"></div>
                                </div>
                            </div>
                        </div></a>
                        <?php
                            $items = isset($_SESSION['items']) ? $_SESSION['items'] : [];

                            foreach ($items as $item) {
                                ?>
                                <a href="item.html"><div class="item">
                                <img src="../img/<?=$item["img"]?>" alt="hoodie_carh" class="item_img">
                                <div class="titlebtns">
                                    <div class="item_name"><?=$item["name"]?></div>
                                    <div class="item_btns">
                                        <div class="price"><?=$item["price"]?></div>
                                        <div class="favor"></div>
                                    </div>
                                </div>
                                </div></a>
                            <?php } ?>
                    </div>
                </div>
            </section>
        </div>
        <a href="edit.php"><div class="edit_btn">Редактировать</div></a>
</body>
</html>