<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $hora = 17;

    switch ($hora){
        case ($hora >= 0 && $hora < 6):
            echo"madruguex";
            break;
        case ($hora >= 6 && $hora < 12):
            echo"manhanzex";
            break;
        case ($hora >= 12 && $hora < 18):
            echo"tarde";
            break;
        case ($hora >= 18 && $hora < 24):
            echo"madruguex";
            break;
        default:
            echo"numero invalido";
    }
?>