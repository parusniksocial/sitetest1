<?php
    session_start();
    require_once "../../DefaultSettings.php";
    require_once "../../connect.php";
    $posttext = $_POST['text'];
    $adminuserdata = $_SESSION['user'];
    $adminuserid = $adminuserdata['id'];
    mysqli_query($connect, "INSERT INTO `posts` (`postID`,`userID`,`text`) VALUES (NULL,'$adminuserid', '$posttext'");
?>