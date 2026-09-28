<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $nota = 10;

    switch($nota){
        case 10:
            echo"exelente";
            break;
        case 9:
            echo"muito bom";
            break;
        case 8:
            echo"muito bom";
            break;
        case 7:
            echo"bom mais da de melhorar";
            break;
        case 6:
            echo"bom mais da de mehorar";
            break;
        case 5:
            echo"ruim";
            break;
        case 4:
            echo"ruim";
            break;
        case 3:
            echo"ruim";
            break;
        case 2:
            echo"ruim";
            break;
        case 1:
            echo"ruim";
            break;
        default:
            echo"nota invalida";
            break;
    }

?>