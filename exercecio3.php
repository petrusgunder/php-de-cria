<?php
    $valor = 100;
    $valor_formatado = number_format($valor, 2);
    $valor_desconto = 2;

    echo "o preco era $valor_formatado\no desconto é $valor_desconto\no preco total é ". $valor_formatado*($valor_desconto/100)."RS"
?>