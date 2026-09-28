<?php
    ini_set('display_errors',1);
    ini_set('display_startap_errors',1);
    error_reporting(E_ALL);

    $genero = "emo";

    switch($genero){
        case "emo":
            echo"belo genero em!!! recomendo a banda dance gavin dance ";
            break;
        case "rock":
            echo"recendo a banda the beatles";
            break;
        case "metal":
            echo"recomendo a banda korn";
            break;
        default:
            echo"genero desconhecido";
            break;
    }
?>