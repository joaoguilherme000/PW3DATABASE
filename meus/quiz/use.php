<?php
    $resposta1 = $_POST["resposta1"];
    $resposta2 = $_POST["resposta2"];
    $resposta3 = $_POST["resposta3"];

    echo "<h1>Sua pontuação!!!</h1>";
    $cont = 0;

    echo "<h2>Pergunta 1</h2>";
    if($resposta1 == 2){
        echo "<h4>Resposta correta 😃👍";
        $cont++;
    }else{
        echo "<h4>Resposta errada se é burro memo em 😂😂";
    }

    echo "<h2>Pergunta 2</h2>";
    if($resposta2 == "alo"){
        echo "<h4>Resposta correta 😃👍";
        $cont++;
    }else{
        echo "<h4>Resposta errada otario 😂😂";
    }

    echo "<h2>Pergunta 3</h2>";
    if($resposta3 == 11){
        echo "<h4>Resposta correta 😃👍";
        $cont++;
    }else{
        echo "<h4>Resposta errada 😂😂";
    }

    if($cont == 0){
        echo "<h4>Sua pontuação foi: <h1>$cont </h1> my honest reaction 😆";
    }else{
        echo "<h4>Sua pontuação foi: $cont";
    }
?>