<?php

 $m = array(
    array(25,12,35),
    array(85,47,98),
    array(32,38,105)
 );

 $a = array(
    array(98,65,35),
    array(5,27,8),
    array(74,14,3)
 );

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            echo $m[$L][$C] + $a[$L][$C] . " &nbsp;|&nbsp; ";
        }
        echo"<br/>";
    }

    

?>