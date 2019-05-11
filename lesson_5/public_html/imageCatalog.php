
<?php 
    require 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка соединения с БД" . mysqli_error($link));

    $query = "SELECT * FROM shop.images ORDER BY rating DESC";
    $result = mysqli_query($link, $query);

    $sqlImages = [];
    while($row = mysqli_fetch_assoc($result)) {
        $sqlImages[] = $row;
    }
    mysqli_close($link);

?>
<?php foreach ($sqlImages as $imageData) :?>
    <div class="productItem">
        <img class="smallImg" src="<?php echo($imageData['dir_image'] . "\\" . $imageData['name_image']);?>">
    </div>
<?php endforeach; ?>