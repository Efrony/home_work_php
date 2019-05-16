<?php 
    require 'connection.php';
    $sql = "SELECT * FROM comments";
    $result = mysqli_query($sqlConnect, $sql);

    if (mysqli_num_rows($result) > 0) { 
        while($row = mysqli_fetch_assoc($result)) {
            $nameUser = $row['name'];
            $commentUser = $row['comment'];
            echo('<div><b>' . $row['name'] . '</b></div>');
            echo('<div>' . $row['comment'] . '</div><br><br>');
        }
    }
    mysqli_close($sqlConnect);