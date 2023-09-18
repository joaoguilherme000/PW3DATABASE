<?php

    $variavel = "ana";

    $nomes = array("MA" => "Maria", "ZE" => "josé", "PE" => "Pedro");

    if (is_array($variavel)){
        echo "<br/> Variável é um array";
    }else{
        echo "<br/> Variável não é um array";
    }

    if (is_array($nomes)){
        echo "<br/> Nome é um array";
    }else{
        echo "<br/> Nome não é um array";
    }

?>