<?php
    ini_set('display_error',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $produtos = ["dedo do caua" => 10, "garrafa de agua da cecilia" => 1, "bijos do nicolas" => 1000, "cebola" => 1];

    foreach ($produtos as $nome => $estoque){
        if ($estoque >= 4){
            echo $nome ."<br>";
        };
    };

?> 