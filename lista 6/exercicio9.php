<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $poder = "velocidade";

    if ($poder == "força"){
        echo "voce é o hulk";
    } elseif ($poder == "voo"){
        echo "voce é o supermen";
    } elseif($poder == "velocidade"){
        echo "voce é o flash";
    } else{
        echo "voce é o super normal";
    }

?>