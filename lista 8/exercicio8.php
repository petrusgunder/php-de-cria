<?php
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);

    $num = 0;

    while($num < 13 ){
        $num++;
        if($num%2 == 0){
            echo "<p>amostra n° ".$num." contem vida <br>";
        }else{ 
            echo "<p class='aura'>amostra n° ".$num." não contem vida <br>";
        };
    };

?>