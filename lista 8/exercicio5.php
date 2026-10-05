<?php
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    (E_ALL);error_reporting

    $num = 0;

    while ($num <= 20){
        $num++;

        if ($num == 15){
            echo "tesouro encontrado!!!"
        }else{
            echo "tesouro não encontrado na cordenada". $num
        };
    }

?>