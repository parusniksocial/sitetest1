<?php
//Парусник - 12.2022
    session_start();
    $userdata = $_SESSION['user'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Моя страница - ПАРУСНИК</title>
</head>
<body>
<a href="index.php">
    <img src="logo.jpg" alt="Парус" width="400" height="400">
</a>
    <form>
        <h2>
            <?php
                print($userdata['login']);
                print(" ID: " . $userdata['id']);
            ?>
        </h2>
    </form>

    <form action="" class="loginform">
        <a href="search.php">Искать другие профиля</a>
    </form>

<form action="logout.php">
    <button>Выход</button>
</form>
</body>
</html>