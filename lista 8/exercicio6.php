<?php
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);

    $text = "<p> bateria da nave esta em";

    $num = 100;

    do{
        echo $text . $num;
        $num = $num - 20;
    }while($num != 0);

    echo "<br> a bateria acabou"
?>

