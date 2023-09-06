<?php
    // 2 – Em uma loja e CD´s existem apenas quatro tipos de 
    // preços que estão associados a cores. Assim os CD´s que 
    //ficam 
    // na loja não são marcados por  
    // preços e sim por cores. Desenvolva o algoritmo que a partir a 
    // entrada da cor o software mostre o preço. A loja está 
    // atualmente com a seguinte tabela de preços. 

    echo "SELECIONE UMA COR E VEJA O PREÇO DE A CORDO COM O QUE VOCE ESCOLHEU<br/>";

    $cor=1;

    $preço = 1;
    $nome = "Verde";



    switch ($cor) {
        case 1:
            $preço = 10;
            echo "<br/>você escolheu a cor $nome";
            echo "<br/>Custa $preço Reais";
            break;
        case 2:
            $nome = "Azul";
            $preço = 20;
            echo "<br/>você escolheu a cor $nome";
            echo "<br/>Custa $preço Reais";
            break;
        case 3:
            $nome = "Amarelo";
            $preço = 30;
            echo "<br/>você escolheu a cor $nome";
            echo "<br/>Custa $preço Reais";
            break;
        case 4:
            $nome = "Vermelho";
            $preço = 40;
            echo "<br/>você escolheu a cor $nome";
            echo "<br/>Custa $preço Reais";
            break;
        default:
            echo "<br/>essa cor não existe";
            break;
    }
?>


