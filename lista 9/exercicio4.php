<?php
    ini_set('display_error',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $planetas = ["rtx" => "gazoso", "x3000" => "rochoso", "mint" => "rochoso", "ryzen" => "gasoso", "caua" => "buraco negro"];

    foreach($planetas as $nome => $tipo){
        echo "o planeta ". $nome . " é do tipo ". $tipo."<br>";
    }

?>           