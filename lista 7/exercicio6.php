<?php
    ini_set('display_errors',1);
    ini_set('display_startap_errors', 1);
    error_reporting(E_ALL);

    $emocao = "feliz";

    switch ($emocao){
        case "feliz":
            echo"que bom que esta feliz!!!!";
            break;
        case "triste":
            echo"que paia, tente se animar";
            break;
        case "ansioso":
            echo"tome um chazinho";
            break;
        default:
            echo"emoção invalida";
            break;
    }

?>