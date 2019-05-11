<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>lesson 5</title>
    <script src="script.js"></script>
</head>

<body>
    <main>
        <div class="flexy">
            <a href="#ModalOpen" title="" id="previev"></a>
            <div id="ModalOpen" class="Window">
                <div>
                    <a href="#close" title="Закрыть" class="close" type="submit" name="rating">X</a>
                    <img src="" id='modalWindow' alt="Для подробного просмотра выберите товар" />
                </div>
            </div>
        </div>
        <div id="catalog">
            <?php require 'imageCatalog.php'; ?>
        </div>

    </main>

</body>

</html>