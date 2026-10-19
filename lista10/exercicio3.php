<?php
    if(isset($_POST['num1'])){
        $idade = $_POST['num1'];
        if($idade < 18){
            echo"voce é menor de idade";
        }else{
            echo"voce é maior de idade";
        }
    }else{
        echo"idade invalida";
    }
?>