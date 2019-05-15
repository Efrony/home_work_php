
<?php 
    require 'connection.php';

    $sql = "SELECT * FROM images ORDER BY rating DESC";
    $result = mysqli_query($sqlConnect, $sql);

    if (mysqli_num_rows($result) > 0) { // пока в таблице есть данные
        while($row = mysqli_fetch_assoc($result)) {
            $way = $row['dir_image'] . $row['name_image'];
            $rating = $row['rating'];
            echo('<a class="productItem" target="_blank" href="/imageShow.php?id=' . $row["id"] . '&db='. $sqltable . '">');
            echo('<img class="smallImg" src=' . $way . '>');
            echo('<span class="raring">'. $rating .'</span><i class="fa fa-eye" aria-hidden="true"></i></a>');   
        }
    }
    mysqli_close($sqlConnect);

?>



