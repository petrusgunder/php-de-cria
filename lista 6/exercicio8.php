<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $nome = "admin";
    $senha = "12345";

    echo "loguin do admin";

    if($nome == "admin" && $senha == "12345"){
        echo" \nbem vindo mr. bolas";
    } else{
        echo" voce não é digno";
    }

?>