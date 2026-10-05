<?php
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);

    $num = 0;

    while ($num < 15){
        $num++;

        if ($num == 7){
            echo "aliem presidente chegou!!! <br>";
        }else{
            echo "aliem de numero ". $num . " chegou <br>";
        };
    }

?>