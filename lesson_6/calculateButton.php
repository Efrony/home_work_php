<?php
    $firstNumber = (float)$_GET["firstNumber"];
    $secondNumber = (float)$_GET["secondNumber"];

    switch ($_GET["calcButton"]) {
        case '+':  
            echo($firstNumber+$secondNumber);
            break;
        case '-':  
            echo($firstNumber-$secondNumber);
            break;
        case '*':  
            echo($firstNumber*$secondNumber);
            break;
        case '/':  
            if ($secondNumber == 0) echo("На ноль делить нельзя");
            else echo($firstNumber/$secondNumber);
            
    }

