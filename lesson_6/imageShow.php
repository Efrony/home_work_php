<?php 
    require 'connection.php';
    $tpl = file_get_contents('imageIdShow.tpl');
    $id= (int)($_GET['id']);  // защита от инъекций
    $db = $_GET['db'];
    $sql = "SELECT name_image, dir_image, rating FROM $db WHERE id='$id'";
    $result = mysqli_query($sqlConnect, $sql);
    $ratingUp = "UPDATE $db SET rating = rating + 1 WHERE id=";

    if (mysqli_num_rows($result) > 0) { 
        $sqlresult = mysqli_query($sqlConnect, $ratingUp . $id);
        $row = mysqli_fetch_assoc($result);
        $way = $row['dir_image'] . $row['name_image'];
        $content = '<img src="' . $way . '" alt="image">';
        $title = 'image id' . $id;
    }
    mysqli_close($sqlConnect);
    $patterns = array('/{title}/','/{content}/');
    $replace = array($title, $content);
    echo preg_replace($patterns, $replace, $tpl)
?>
