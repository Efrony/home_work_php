<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>lesson 5</title>
</head>

<body>
    <form action="calculate.php" method="get">
        <label>Первое значение:<input type="text" name="firstNumber" value="<?=$_GET['firstNumber'] ?>" required></label><br><br>
        <label>Второе значение:<input type="text" name="secondNumber" value="<?=$_GET['secondNumber'] ?>" required></label><br><br>
        <button type="submit" value="+" name="calcButton">+</button>
        <button type="submit" value="-" name="calcButton">-</button>
        <button type="submit" value="*" name="calcButton">*</button>
        <button type="submit" value="/" name="calcButton">/</button><br><br>
        <span>Результат: <?php require 'calculateButton.php'?></span>
    </form>
</body>

</html>