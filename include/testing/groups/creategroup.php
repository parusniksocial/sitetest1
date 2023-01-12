<?php
    session_start();
    require_once "../../DefaultSettings.php";
    require_once "../../connect.php";
    $groupname = $_POST['groupname'];
    mysqli_query($connect, "INSERT INTO `groupnew` (`groupID`,`groupname`) VALUES (NULL,'$groupname')");
?>