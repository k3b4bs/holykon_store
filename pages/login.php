<?php
    require_once('db_connect.php');
    $connect = mysqli_connect($servername, $username, $password, $dbname) or die (mysqli_connect_error());
    $temp_text = "Войти";
    if(isset($_POST['vx_btn'])){
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        if(!empty($phone) && !empty($pass)){
            $sql = "SELECT * FROM users WHERE user_phone = '$phone' AND user_pass = '$pass'";
            $result = mysqli_query($connect, $sql);
        
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $temp_text = "Привет " . $row['user_name'];
                }
            }
        }
    }
    

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <style>
        input.error {
            background-color: rgb(255, 132, 132);
            color: white;
            transition: background-color 0.2s, color 0.2s;
        }
        .not_found{
            margin-bottom: -20px !important;
        }
    </style>
    <link rel="stylesheet" href="style_login.css">
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
                <div class="tittle"><?=$temp_text?></div>
                <form action="" id="loginForm" method="post">
                    <input type="text" name="phone" placeholder="Номер телефона">
                    <input type="password" name="pass" placeholder="Пароль">
                    <input type="submit" class="btn" name="vx_btn" value="Вход">
                </form>
                
                <p>Вы даете согласие на обработку персональных данных</p>
                <a href="registr.php">Нет аккаунта? Зарегистрируйтесь прямо сейчас!</a>
            </div>
        </div>
        <script src="check_login.js"></script>
</body>
</html>