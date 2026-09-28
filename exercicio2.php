<?php
    $valor_dolar = 5.90;

    $valor_real = 5.11*$valor_dolar;

    $valor_dolar_formatado = number_format($valor_dolar, 2);

    $valor_real_formatado = number_format($valor_real, 2);

    echo"valor em dolar $valor_dolar_formatado\nvalor em real $valor_real_formatado"
?>