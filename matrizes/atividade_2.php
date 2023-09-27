<?php

 $b = array(
    array(25,12,35),
    array(85,47,98),
    array(32,38,105)
 );

 $a = array(
    array(98,65,35),
    array(5,27,8),
    array(74,14,3)
 );

$D = array();

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            echo $a[$L][$C] . " &nbsp;|&nbsp; ";
        }
        echo"<br/>";
    }

    echo "<br>VALOR DE CIMA DA MATRIZ A <br><br>";

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            echo $b[$L][$C] . " &nbsp;|&nbsp; ";
        }
        echo"<br/>";
    }

    echo "<br>VALOR DE CIMA DA MATRIZ B <br><br>";

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            $D[$L][$C] = $b[$L][$C] + $a[$L][$C];
            echo $b[$L][$C] + $a[$L][$C] . " &nbsp;|&nbsp; ";
            
        }
        echo"<br/>";
    }

    echo "<br>VALOR DE CIMA DAS MATRIZES SOMADAS";

    
    

?>