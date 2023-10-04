<?php

    echo "FALE DOIS NUMEROS QUE SERAM SOMADOS <br/>";

    function somaValor ($num1, $num2){
        $total = $num1 + $num2;

        return $total;
    }

    echo "A SOMA É ". somaValor(5,3) . "<br/>";

    echo "<br/>FALE DOIS NUMEROS QUE SERAM SUBTRAIDOS <br/>";

    function subValor ($num3, $num4){
        $total = $num3 - $num4;

        return $total;
    }

    echo "A SUBTRAÇÃO É ". subValor(5,3) . "<br/>";

    echo "<br/>FALE DOIS NUMEROS QUE SERAM MULTIPLICADOS <br/>";

    function multiValor ($num5, $num6){
        $total = $num5 * $num6;

        return $total;
    }

    echo "A MULTIPLICAÇÃO É ". multiValor(5,3) . "<br/>";

    echo "<br/>FALE DOIS NUMEROS (MAIORES QUE 1) QUE SERAM DIVIDIDOS <br/>";

    function divideValor ($num7, $num8){
        $total = $num7 / $num8;

        return $total;
    }

    echo "A DIVISÃO É ". divideValor(5,3) . "<br/>";
    

?>
