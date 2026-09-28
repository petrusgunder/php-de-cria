<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $mes = "janeiro";
    $dia = 6;

    if ($dia >= 1 && $dia <= 31) {
        if (($mes == "dezembro" && $dia >= 22) || ($mes == "janeiro" && $dia <= 20)) {
            echo "Seu signo é Capricórnio";
        } elseif (($mes == "janeiro" && $dia >= 21) || ($mes == "fevereiro" && $dia <= 18)) {
            echo "Seu signo é Aquário";
        } elseif (($mes == "fevereiro" && $dia >= 19) || ($mes == "marco" && $dia <= 20)) {
            echo "Seu signo é Peixes";
        } elseif (($mes == "marco" && $dia >= 21) || ($mes == "abril" && $dia <= 20)) {
            echo "Seu signo é Áries";
        } elseif (($mes == "abril" && $dia >= 21) || ($mes == "maio" && $dia <= 20)) {
            echo "Seu signo é Touro";
        } elseif (($mes == "maio" && $dia >= 21) || ($mes == "junho" && $dia <= 20)) {
            echo "Seu signo é Gêmeos";
        } elseif (($mes == "junho" && $dia >= 21) || ($mes == "julho" && $dia <= 22)) {
            echo "Seu signo é Câncer";
        } elseif (($mes == "julho" && $dia >= 23) || ($mes == "agosto" && $dia <= 22)) {
            echo "Seu signo é Leão";
        } elseif (($mes == "agosto" && $dia >= 23) || ($mes == "setembro" && $dia <= 22)) {
            echo "Seu signo é Virgem";
        } elseif (($mes == "setembro" && $dia >= 23) || ($mes == "outubro" && $dia <= 22)) {
            echo "Seu signo é Libra";
        } elseif (($mes == "outubro" && $dia >= 23) || ($mes == "novembro" && $dia <= 21)) {
            echo "Seu signo é Escorpião";
        } elseif (($mes == "novembro" && $dia >= 22) || ($mes == "dezembro" && $dia <= 21)) {
            echo "Seu signo é Sagitário";
        } else {
            echo "Data inválida para o mês informado.";
        }
    } else {
        echo "Dia inválido!";
    }
?>