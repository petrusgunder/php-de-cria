<?php
    ini_set('display_error',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $galaxia = ["perobas" => 18.000, "menobeles" => 30.000, "xibinobus" => 500.000];

    foreach ($galaxia as $nome => $distancia){
        echo "a galaxia ".$nome." está á ". $distancia . " anos luz de distancia <br>";
    }
?> 