<?php
    ini_set('display_error',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $guerreiro = ["espada","escudo","poção"];

    foreach($guerreiro as $guerreiro){
        echo $guerreiro . " <br>";
    }
?>