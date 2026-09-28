<?php
    ini_set('display_errors',1);
    ini_set('display_startap_errors',1);
    error_reporting(E_ALL);

    $clima = "nublado";

    switch($clima){
        case "chuva":
            echo "leve um guarda chuva meu caro";
            break;
        case "sol":
            echo "nao esqueça do protetor solar";
            break;
        case "nublado":
            echo "cuidado que pode chover";
            break;
        default:
            echo "nome invalido";
            break;
    }

?>