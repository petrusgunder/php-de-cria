<?php
    if(isset($_GET['num1']) && isset($_GET['num2'])){
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        echo "A soma do numero ".$num1." + ".$num2." é igual a ". ($num1 + $num2);
    } else{
        echo"numeros invalidos";
    }
?>