<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $dia = 3;

    switch ($dia){
        case 1:
            echo "hoje é segunda";
            break;
        case 2:
            echo "hoje é terça";
            break;
        case 3:
            echo "hoje é quarta";
            break;
        case 4:
            echo "hoje é quinta";
            break;
        case 5:
            echo "hoje é sexta";
            break;
        case 6:
            echo "hoje é sabado";
            break;
        case 7:
            echo "hoje é domingo";
            break;
        default:
            echo "numero invalido";
            break;
    }

?>