<?php

require 'connection.php';
if ($_POST["nameUser"] && $_POST["commentUser"]) {
    $nameUser = $_POST["nameUser"];
    $commentUser = $_POST["commentUser"];
    $sql = "INSERT INTO `comments` (`id`, `comment`, `name`) VALUES ( null, '$commentUser', '$nameUser')";
    mysqli_query($sqlConnect, $sql);
    mysqli_close($sqlConnect);
}


header('Location: /index.php');

