<?php
    session_start();
    require_once 'connect.php';
    $idquery = $_POST['idq'];
    $profilequery = mysqli_query($connect,"SELECT * FROM `users` WHERE `ID` = '$idquery'");
    if (mysqli_num_rows($profilequery) > 0) {
        //Успешная авторизация
        $userb=mysqli_fetch_assoc($profilequery);
        $_SESSION['wp'] = [
            "id" => $userb['ID'],
            "realname" => $userb['realname'],
            "login" => $userb['login']
        ];
        header("Location: ../watchp.php");
}
?>