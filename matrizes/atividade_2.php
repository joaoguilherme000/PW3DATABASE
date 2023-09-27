<?php

print "2 . Da mesma matriz acima deverá calcular o resultado da soma de cada matriz:" . "<br/>" . "<br/>";


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

$resultado = array();

$total = 0;

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            echo $a[$L][$C] . " &nbsp;|&nbsp; ";
        }
        echo"<br/>";
    }

    echo "<h4> VALOR DE CIMA DA MATRIZ A </h4>";

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            echo $b[$L][$C] . " &nbsp;|&nbsp; ";
        }
        echo"<br/>";
    }

    echo "<h4> VALOR DE CIMA DA MATRIZ B </h4>";

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            $resultado[$L][$C] = $b[$L][$C] + $a[$L][$C];
            echo $b[$L][$C] + $a[$L][$C] . " &nbsp;|&nbsp; ";
        }
        echo"<br/>";
    }

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            $total += $a[$L][$C];
            $total += $b[$L][$C];
        }
    }

    echo "<h4> VALOR DE CIMA DAS MATRIZES SOMADAS </h4>";

    for ($L=0; $L < 3; $L++) { 
        for ($C=0; $C < 3; $C++) { 
            $resultado2[$L][$C] = $resultado[$L][$C] + $b[$L][$C] + $a[$L][$C];
            echo $resultado2[$L][$C] . " &nbsp;|&nbsp; ";
        }
        echo"<br/>";
    }

    echo "<h4>VALOR DE CIMA DA MATRIZ A + B + RESULTADO SOMADO</h4>";

    print_r($total);

    echo " <h4>VALOR DE CIMA DA MATRIZ RESULTADO SOMADO </h4>";


    // EU NÃO SABIA COMO FAZER ENTÃO FIZ TUDO 🤷‍♂️

?>