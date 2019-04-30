<!DOCTYPE html>
<html lang="en">

<?php 
    $dirCatalog = '/img/big';
    $imagesCatalog = scandir($dirCatalog)
?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>lesson 4</title>
    <script src="script.js"></script>
</head>
<body>
    <main>
        <div class="flexy">
            <a href="#ModalOpen" title="" id="previev"></a>
            <div id="ModalOpen" class="Window">
                <div><a href="#close" title="Закрыть" class="close">X</a><img src="" id='modalWindow' alt="Для подробного просмотра выберите товар" /></div>
            </div>
        </div>
        <div id="catalog">
            <?php foreach ($imagesCatalog as $imageName) :?>
                <div class="productItem">
                    <img class="smallImg" src="<?php $dirCatalog . '/' . $imageName; ?>" alt="<?php $imageName; ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>