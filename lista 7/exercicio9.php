<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $idade = 11;

    switch($idade){
        case ($idade < 14):
            echo "criança";
            break;
        case ($idade >= 14 && $idade < 18):
            echo "adolecente";
            break;
        case ($idade >= 18 && $idade < 60):
            echo "adulto";
            break;
        case ($idade  >= 60):
            echo "velho";
            break;
        default:
            echo("invalido");
            break;
    }

?>