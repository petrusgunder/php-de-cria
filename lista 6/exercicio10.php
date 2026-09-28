<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $temp = 40;

    echo "a temperatura hoje esta ". $temp;

    if ($temp < 10){
        echo " ta muito frio";
    } elseif ($temp > 10 && $temp <= 20){
        echo " ta frio";
    } elseif ($temp > 20 && $temp <= 25){
        echo " ta muito bom a temperatura";
    } elseif ($temp > 25 && $temp <=30){
        echo " ta quente";
    } else{
        echo " ta muito quente";
    }

?>