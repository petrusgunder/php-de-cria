<?php
    if(isset($_POST['num1'])){
        $cep = $_POST['num1'];

        switch($cep){

            case '88790-000':
                echo"seu frete é de 0 reias";
                break;
            case '88780-000':
                echo"seu frete é de 10 reasi";
                break;
            case '88495-000':
                echo"seu frete é de 5 reais";
                break;
            case '88490-000':
                echo "seu frete é de 2.000.000.000.000 de reais";
                break;
        }
    }else{
        echo"cep invalido";
    }
?>