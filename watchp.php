<?php
//Парусник - 12.2022
    session_start();
    $prof = $_SESSION['wp'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Просмотр страницы пользователя - ПАРУСНИК</title>
</head>
<body>
<a href="index.php">
    <img src="logo.jpg" alt="Парус" width="400" height="400">
</a>
<form>
    <h2>
        <?php
        print('Пользователь: ');
        print($prof['login']);
        print(" ID: " . $prof['id']);
        ?>
    </h2>
</form>
</body>
</html>