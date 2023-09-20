<?php

 $m = array(
    array(1,2,3),
    array(3,2,1),
    array(9,8,7)
 );

 $a = array(
    array(1,2,3),
    array(3,2,7),
    array(9,5,0)
 );

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            if ($m[$L][$C] > $a[$L][$C]){
                echo $m[$L][$C]. " VALOR DO M <br/>";
            }
            else{
                echo $a[$L][$C]. " VALOR DO A <br/>";
            }
        }
        echo"<br/>";
    }

    echo "<pre>";
    print_r($m);
    echo "<pre>";
?>