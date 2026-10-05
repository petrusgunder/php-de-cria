<?php
    ini_set('display_error',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $produto = ["cueca" => 10.00, "celular" => 15.00, "pc" => 2.00];

    foreach ($produto as $nome => $preco){
        $preco = $preco - $preco*0.10;
        echo "o produto ". $nome . " e vale ". $preco. "<br>";
    }
?> 