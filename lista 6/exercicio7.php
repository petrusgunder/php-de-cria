<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $idade = 13.5;

    echo "sua idade é de ". $idade;

    if ($idade < 10){
        echo "\nsua clasificação é livre";
    } elseif ($idade >= 10 && $idade < 14){
        echo "\nsua clasificação é 10+";
    } elseif ($idade >= 14 && $idade < 16){
        echo "\nsua classificação é de 14+";
    } elseif ($idade >= 16 && $idade < 18){
        echo "\nsua classificação é de 16+";
    } elseif ($idade > 18){
        echo "\nsua classificação é 18+";
    }

?>