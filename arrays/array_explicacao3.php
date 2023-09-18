<?php

    $num = array(1,2,3,4,5);

    foreach ($num as $valor) {
        echo "Valor é $valor <br/>";
    }

    $num[0] = "um";
    $num[1] = "dois";
    $num[2] = "tres";
    $num[3] = "quatro";
    $num[4] = "cinco";

    foreach ($num as $valor) {
        echo "<br/> Valor é $valor <br/>";
    }
?>