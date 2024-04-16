<?php
    require_once('db_connect.php');
    $connect = mysqli_connect($servername, $username, $password, $dbname) or die (mysqli_connect_error());
    
    if(isset($_POST['login_btn'])){
        $login = $_POST['login'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        $rpass = $_POST['rpass'];
        if(empty($login) || empty($phone) || empty($pass) || empty($rpass)){
        } else{
            if($pass == $rpass){
                $sql = "INSERT INTO users (user_phone, user_name, user_pass) VALUES ('$phone', '$login', '$pass')";
                $result = mysqli_query($connect, $sql);
            }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <style>
        input.error {
            background-color: rgb(255, 132, 132);;
            color: white;
            transition: background-color 0.2s, color 0.2s;
        }
    </style>
    <link rel="stylesheet" href="style_reg.css">
    <link rel="stylesheet" href="style.css">
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
            <div class="window_log">
                <div class="tittle">Регистрация</div>
                <form action="" id="registrationForm" method="post">
                    <input type="text" name="login" placeholder="Ваше имя">
                    <input type="text" name="phone" placeholder="Номер телефона">
                    <input type="password" id="pass" name="pass" placeholder="Пароль">
                    <input type="password" id="rpass" name="rpass" placeholder="Подтвердите пароль">
                    <input type="submit" id="login_btn" name="login_btn" class="btn" value="Регистрация">
                </form>
                <p>Вы даете согласие на обработку персональных данных</p>
            </div>
        </div>
    <script src="check.js"></script>
</body>
</html>