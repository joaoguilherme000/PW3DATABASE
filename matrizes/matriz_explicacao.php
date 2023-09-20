<?php

 $m = array(
    array(1,2,"Começo"),
    array(3,2,"Meio"),
    array(9,8,"Fim")
 );

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            echo $m[$L][$C]. " ";
        }
        echo"<br/>";
    }

    echo "<pre>";
    print_r($m);
    echo "<pre>";

?>