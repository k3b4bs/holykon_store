<?php
    session_start();
    if(isset($_POST["button"])){
        $_SESSION['items'][] = [
            'name' => $_REQUEST['name'],
            'desc' => $_REQUEST['desc'],
            'price' => $_REQUEST['price'],
            'img' => $_REQUEST['image_form']
        ];
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_edit.css">
</head>
<body>
    <header>
        <div class="head">
            <a href="../index.html"><div class="logo">HOLYKON STORE</div></a>
            <ul>
                <li><a href="man.html">Мужское</a></li>
                <li><a href="#">Женское</a></li>
                <li><a href="#">Бренды</a></li>
                <li><a href="#">Скидки</a></li>
            </ul>
            <div class="r_header">
                <a href="#"><div class="fav"></div></a>
                <a href="#"><div class="cart"></div></a>
                <a href="login.html"><div class="profile"></div></a>
            </div>
        </div>
    </header>
    <div class="wrapper">
    <form action="" method="POST">
        <section>
            <h1>Загрузите фото</h1>
            <input type="file" name="image_form" class="add_photos">
            <h1>Бренд</h1>
            <select name="brand" class="selector">
                <option value="Carhartt">Carhartt</option>
                <option value="Nike">Nike</option>
                <option value="Stone_Island">Stone Island</option>
                <option value="etc">etc</option>
            </select>
            <h1>Тип товара</h1>
            <select name="type" class="selector">
                <option value="jacket">Куртка</option>
                <option value="t-shirt">Футболка</option>
                <option value="kofta">Кофта</option>
                <option value="etc">т.д.</option>
            </select>
            <h1>Пол</h1>
            <ul class="select_pol">
                <li>
                    <input type="radio" value="man" name="pol">
                    <label for="">Мужское</label>
                </li>
                <li>
                    <input type="radio" value="man" name="pol">
                    <label for="">Женское</label>
                </li>
            </ul>
           
            <h1>Размеры</h1>
            <form class="sizes">
                <ul class="flex-inner">
                    <li>
                        <input type="checkbox" name="size" value="XS">
                        <label for="">XS</label>
                    </li>
                    <li>
                        <input type="checkbox" name="size" value="S">
                        <label for="">S</label>
                    </li>
                    <li>
                        <input type="checkbox" name="size" value="M">
                        <label for="">M</label>
                    </li>
                    <li>
                        <input type="checkbox" name="size" value="L">
                        <label for="">L</label>
                    </li>
                    <li>
                        <input type="checkbox" name="size" value="XL">
                        <label for="">XL</label>
                    </li>
                    <li>
                        <input type="checkbox" name="size" value="XL">
                        <label for="">XXL</label>
                    </li>
                    <li>
                        <input type="checkbox" name="size" value="XXL">
                        <label for="">XXL</label>
                    </li>
                    <li>
                        <input type="checkbox" name="size" value="XXXL">
                        <label for="">XXXL</label>
                    </li>
                    <li>
                        <input type="checkbox" name="size" value="OS">
                        <label for="">O/S</label>
                    </li>
                </ul> 
            </form>
            <h1>Информация о товаре</h1>
            <div class="input_form">
                <input type="text" placeholder="Название товара" name="name">
                <textarea placeholder="Описание товара" name="desc"></textarea>
                <input type="text" placeholder="Цена" name="price">
                <input type="submit" name="button" value="Добавить в каталог">
            </div>
        </section>
    </form>
    </div>
</body>
</html>