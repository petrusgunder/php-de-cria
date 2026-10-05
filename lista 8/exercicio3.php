<?php
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);

    $num = 0;
    $text = "voce esta no degrau ";

    do{
        $num++;
        echo"<p>". $text." ".$num . " <br>";
    }while ($num != 5)

?>