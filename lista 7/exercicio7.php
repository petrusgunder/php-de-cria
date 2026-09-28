<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $num1 = 4;
    $num2 = 2;
    $escolha = 6;

    switch ($escolha){
        case 1:
            echo $num1 + $num2;
            break;
        case 2:
            echo $num1 - $num2;
            break;
        case 3:
            echo $num1 * $num2;
            break;
        case 4:
            echo $num1 / $num2;
            break;
        case 5:
            echo $num1 ** $num2;
            break;
        case 6:
            echo $num1 ** (1/$num2);
            break;
        default:
            echo "operação inexistente";
            break;
    }


?>