<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $valorcompra = 110.50;

    echo "o valor da compra é de ". $valorcompra;

    if ($valorcompra >= 100){
        echo "\nvoce ganhou um cupom de desconto";
    } elseif ($valorcompra < 100){
        echo "\nvalor final". $valorcompra;
    }

?>