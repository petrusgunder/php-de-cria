<?php
    ini_set('display_error',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $num = 0;

    while ($num != 5){
        $num++;
        echo $num. "  ";
    }

?>