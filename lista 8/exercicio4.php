<?php
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);

    $text = "<p> bateria do robo esta em";

    $num = 0;

    while($num <= 100){
        echo $text . $num;
        $num = $num + 10;
    }

?>