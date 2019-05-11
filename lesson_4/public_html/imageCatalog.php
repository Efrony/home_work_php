
<?php 
    $dirCatalog = '.\\img\\big';
    $imagesCatalog = scandir($dirCatalog);  // сканирование дирректории
    unset($imagesCatalog[0], $imagesCatalog[1]); // удаление точек  после scandir
?>

<?php foreach ($imagesCatalog as $imageName) :?>
    <div class="productItem">
        <img class="smallImg" src="<?php echo("$dirCatalog\\$imageName");?>" alt="<?php echo($imageName);?>">
    </div>
<?php endforeach; ?>