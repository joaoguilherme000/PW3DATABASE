<?php

print " Criar um sistema em php que calculea soma das matrizes:" . "<br/>" . "<br/>";

 $A = array(
    array(25,12,35),
    array(85,47,98),
    array(32,38,105)
 );



 $B = array(
    array(98,65,35),
    array(5,27,8),
    array(74,14,3)
 );

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            echo $A[$L][$C]. " &nbsp;|&nbsp; ";
        }
        echo"<br/>";
    }

    echo "<h4> VALOR DE CIMA DA MATRIZ A </h4>";

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            echo $B[$L][$C] . " &nbsp;|&nbsp; ";
        }
        echo"<br/>";
    }

    echo "<h4> VALOR DE CIMA DA MATRIZ B </h4>";

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            echo $A[$L][$C] + $B[$L][$C] . " &nbsp;|&nbsp; ";
        }
        echo"<br/>";
    }

    echo "<h4> VALOR DE CIMA DA MATRIZ RESULTADO  </h4>";

?>