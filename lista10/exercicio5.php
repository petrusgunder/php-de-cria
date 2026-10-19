<?php
    $planetas = [
    'Mercúrio',
    'Vênus',
    'Terra',
    'Marte',
    'Júpiter',
    'Saturno',
    'Urano',
    'Netuno'
];

    if (isset($_GET['numero'])){
        $numero = $_GET['numero'];

        $numero --;

        echo"seu planeta é ". $planetas[$numero];
    }else{
        echo"nuemro invalido";
    }
?>