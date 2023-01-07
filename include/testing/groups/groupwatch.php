<?php
//Парусник - 12.2022
    session_start();
    $group = $_SESSION['watchgroup'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр страницы группы</title>
</head>
<body>
<form>
    <h2>
        <?php
        print('ID Группы: ');
        print($group['groupID']);
        print(" ID Админа: " . $group['adminID']);
        print('Количество участников: ');
        print($group['userscount']);
        ?>
    </h2>
</form>
</body>
</html>