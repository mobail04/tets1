<?php
    session_start();
    if ($_SESSION['order']) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>!</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <header class = "header">
            <div class = "logo">
                <img src="img/" alt="Logo" class = "logoimage">
            </div>
                </div>
                <nav class = "navigt">
                <ul>
                        <li class="navigation"><a href="reg.php">Заявка</a></li>
                    </ul>
                </nav>
                <nav class = "navig">
                <ul>
                        <li class="navigation"><a href="reg.php">Регистрация</a></li>
                        <li class="navigation"><a href="vhod.php">Авторизация</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class = "main">
        <img src="img/" alt="Logo" class = "imageS">
</div>
<div class = "text">
<h1> к Вашим услугам<h1>
</div>
</body>
<footer class = "footer">
        <div class = "logo">
            <img src="img/" alt="Logo" class = "logoimage">
        </div>
        <nav class = "navig">
            <span>Заявку можно оставлять 24/7</span>
            <br>
            <span></span>
        </nav>
        <div class="contacts">
            <p>Phone:8914</p>
            <p>Email:!@mail.ru</p>
        </div>
    </footer>
</html>
</body>
</html>
