<?php

 $m = array(
    array(1,2,3),
    array(3,3,7),
    array(9,8,0)
 );

 $a = array(
    array(1,2,3),
    array(3,2,7),
    array(9,5,0)
 );

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            echo $m[$L][$C] + $a[$L][$C] . " ";
        }
        echo"<br/>";
    }

    echo "<pre>";
    print_r($m);
    echo "<pre>";

?>