<?php  //-------------------------------- ЗАДАНИЕ 1
$a = rand(-10, 10);
$b = rand(-10, 10);

echo "ЗАДАНИЕ 1 <br>";
echo " a = $a <br>";
echo " b = $b <br>";

if ($a >= 0 && $b >= 0) echo $a - $b;
else if ($a < 0 && $b < 0) echo $a * $b;
else echo $a + $b;

//--------------------------------ЗАДАНИЕ 2 
echo "<br><br> ЗАДАНИЕ 2 <br>";

$a = rand(0, 15);
echo " a = $a <br>";
switch ($a) {
    case 0:
        echo $a++ . '<br>';
    case 1:
        echo $a++ . '<br>';
    case 2:
        echo $a++ . '<br>';
    case 3:
        echo $a++ . '<br>';
    case 4:
        echo $a++ . '<br>';
    case 5:
        echo $a++ . '<br>';
    case 6:
        echo $a++ . '<br>';
    case 7:
        echo $a++ . '<br>';
    case 8:
        echo $a++ . '<br>';
    case 9:
        echo $a++ . '<br>';
    case 10:
        echo $a++ . '<br>';
    case 11:
        echo $a++ . '<br>';
    case 12:
        echo $a++ . '<br>';
    case 13:
        echo $a++ . '<br>';
    case 14:
        echo $a++ . '<br>';
    case 15:
        echo $a++ . '<br>';
}

//--------------------------------ЗАДАНИЕ 3 
echo "<br><br> ЗАДАНИЕ 3 <br>";
$a = rand(-5, 5);
$b = rand(-5, 5);

echo " a = $a <br>";
echo " b = $b <br>";

function plus($x, $y)
{
    return $x + $y;
}

function minus($x, $y)
{
    return $x - $y;
}

function multiply($x, $y)
{
    return $x * $y;
}

function division($x, $y)
{
    if ($y == 0) return 'На ноль делить нельзя!';
    return $x / $y;
}

echo plus($a, $b) . '<br>';
echo minus($a, $b) . '<br>';
echo multiply($a, $b) . '<br>';
echo division($a, $b) . '<br>';

//--------------------------------ЗАДАНИЕ 4 
echo "<br><br> ЗАДАНИЕ 4 <br>";

echo " a = $a <br>";
echo " b = $b <br>";

function mathOperation($x, $y, $operation)
{
    switch ($operation) {
        case '+':
            return $x + $y;
        case '-':
            return $x - $y;
        case '*':
            return $x * $y;
        case '/':
            if ($y == 0) return 'На ноль делить нельзя!';
            return $x / $y;
    }
}
echo mathOperation($a, $b, '+') . '<br>';
echo mathOperation($a, $b, '-') . '<br>';
echo mathOperation($a, $b, '*') . '<br>';
echo mathOperation($a, $b, '/') . '<br>';

//--------------------------------ЗАДАНИЕ 5 - убрали
//--------------------------------ЗАДАНИЕ 6 
echo "<br><br> ЗАДАНИЕ 6 <br>";
echo " a = $a <br>";
echo " b = $b <br>";
/*
function power($val, $pow)
{
    if ($pow == 0) return 1;
    if ($pow == 1) return $val;
    return $val * power($val, --$pow);
}
echo power($a, $b);
*/

//--------------------------------ЗАДАНИЕ 7
echo "<br><br> ЗАДАНИЕ 7 <br>";

function timeWords() {
    $dateTime = getDate();
    $timeWords = 'Время: ';
    $hour = (int)$dateTime['hours'];
    $minute = (int)$dateTime['minutes'];
    
    if (5 > $hour && 1 < $hour || 25 > $hour && 21 < $hour) $timeWords .= "$hour часа ";
    else if ($hour == 1 || $hour == 21) $timeWords .= "$hour час ";
    else $timeWords .= "$hour часов ";

    if (5 > $minute && 1 < $minute || 25 > $minute && 21 < $minute) $timeWords .= "$minute минуты";
    else if ($minute == 1 || $minute == 21) $timeWords .= "$minute минута";
    else $timeWords .= "$minute минут";

    return $timeWords;
}
echo timeWords();
