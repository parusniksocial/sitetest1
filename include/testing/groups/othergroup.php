<?php
//Парусник - 12.2022
    session_start();
    require_once 'connect.php';
    $groupid = $_POST['idq'];
    $profilequery = mysqli_query($connect,"SELECT * FROM `groupnew` WHERE `groupID` = '$groupid'");
    if (mysqli_num_rows($profilequery) > 0) {
        //Успешно найдено
        $userb=mysqli_fetch_assoc($profilequery);
        $_SESSION['watchgroup'] = [
            "id" => $userb['groupID'],
            "name" => $userb['groupname']
        ];
        header("Location: groupwatch.php");
    }
    else {
        header("Location: ../index.php");
    }
?>