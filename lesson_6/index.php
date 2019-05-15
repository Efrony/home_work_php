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
        <div class="sendComment">
            <br><br>
            <form action="index.php" method="post">
                <label>Ваше имя:<input type="text" name="nameUser" required></label><br><br>
                <label>Напишите отзыв:<textarea name="commentUser" id="commentUser" cols="30" rows="10" required></textarea></label><br><br>
                <button type="submit" name="sendComment">Отправить отзыв</button>
            </form>
            <?php require 'commentSend.php'; ?><br><br>
            <?php require 'commentsAll.php'; ?>
        </div>
        <div id="catalog">
            <?php 
                $sqltable = 'images';
                require 'imageCatalog.php'; 
            ?>
        </div>
    </main>
</body>

</html>