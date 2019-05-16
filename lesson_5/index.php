<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>lesson 5</title>
</head>

<body>
    <main>
        <div id="catalog">
            <?php 
                $sqltable = 'images';
                require 'imageCatalog.php'; 
                
            ?>
        </div>
    </main>
</body>

</html>