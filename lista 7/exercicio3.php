<?php
    ini_set('display_errors',1);
    ini_set('display_startap_errors',1);
    error_reporting(E_ALL);

    $escolha = 4;

    $genero = "seu genero musical é ";

    switch ($escolha){
        case 1:
            $genero = $genero. "rock (vulgo segundo melhor genero musical do mundo)";
            break;
        case 2:
            $genero = $genero. "sertanejo";
            break;
        case 3:
            $genero = $genero. "funk";
            break;
        case 4:
            $genero = $genero. "emo (vulgo melhor genero musical do mundo)";
            break;
        default:
            $genero = "numero invalido";
            break;
    }

    echo $genero;

?>
