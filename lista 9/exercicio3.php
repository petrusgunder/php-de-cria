<?php
    ini_set('display_error',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $notas = [10,2,7,5,8];

    $media = 0;

    foreach($notas as $notas){
        $media = $media + $notas;
    }

    $media = $media/5;

    echo "nota final ". $media;
?>           