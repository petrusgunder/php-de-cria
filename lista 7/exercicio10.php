<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $peso = 65;
    $altura = 1.67;
    $IMC = $peso / $altura**2;

    echo"seu IMC é de ". number_format($IMC,1) . " "; 

    switch ($IMC){
        case ($IMC > 0 && $IMC <= 18.5):
            echo"magreletico abaixo do peso";
            break;
        case ($IMC > 18.5 && $IMC < 25):
            echo"saudavel";
            break;
        case ($IMC >= 25 && $IMC < 30):
            echo"sobrepeso";
            break;
        case ($IMC >= 30):
            echo"gordão obeso";
            break;
    }
?>