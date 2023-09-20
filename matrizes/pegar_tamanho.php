<?php

 $m = array(
    array(1,2,3),
    array(3,2,1),
    array(9,8,7)
 );

$tamanhoC = 0;
$tamanhoL = 0;

 $a = array(
    array(1,2,3),
    array(3,2,7),
    array(9,5,0)
 );

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) {
            if($C = 3){
                $tamanhoL++;
            }
        }
        $tamanhoC++;
    }

    echo "<pre>";
    print_r($m);
    echo "<pre>";

    echo "Tamanho da linha " . $tamanhoL;
    echo"<br/>";
    echo "Tamanho da linha " . $tamanhoC;
?>
