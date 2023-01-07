<?php
    session_start();
    require_once "../../DefaultSettings.php";
    require_once "../../connect.php";
    $groupname = $_POST['groupname'];
    $adminuserdata = $_SESSION['user'];
    $adminuserid = $adminuserdata['ID'];
    $foundercount = 1;
    mysqli_query($connect, "INSERT INTO `groups` (`groupID`,`adminID`,`groupname`,`userscount`) VALUES (NULL,'$adminuserid', '$groupname','$foundercount')");
?>