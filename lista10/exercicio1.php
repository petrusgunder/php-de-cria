<?php

    if (isset($_GET['nome'])){
        $nome = $_GET['nome'];
        echo "ola ". $nome. " tudo bem?";
    } else{
        echo"nome invalido";
    }
?>