<?php
    ini_set('display_error',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $guerreiro = [10,20,30];

    $level = 0;

    foreach($guerreiro as $guerreiro){
        $level++;
        echo "nivel ". $level." tem ".  $guerreiro . " pontos<br>";
    }
?>