<?php

print "3.Entre com os dados de 10 alunos pelo código em php, recebendo as informações como nome e uma nota do aluno. Armazene estes dados em um array. Ao final do programa  mostrar  a  média  de  nota  da  classe,  e  o  nome  do  aluno  que  obteve maior nota." . "<br/>" . "<br/>";

$x = array( "Maria" => 6, "João" => 2, "Ana" => 1, "Pedro" => 5, "Laura" => 10, "Lucas" => 7, "Sofia" => 3, "Gabriel" => 8, "Isabella" => 4, "Matheus" => 7,);

$soma = 0;

$nome = "";

$maior_valor = 0;

    foreach ($x as $key => $value) {
        echo $key. "&nbsp; => &nbsp;" . $value . "<br/>";
        
        if ($value > $maior_valor){
            $maior_valor = $value;
            $nome = $key;
        }
        

        $soma = $soma + $value;
    }

    $soma = $soma / 10;

    echo  "<br/>" . "média  de  nota  da  classe: &nbsp;" . $soma;

    echo  "<br/>" . "<br/>" . "A MAIOR NOTA DA SALA &nbsp;" . $maior_valor ."&nbsp; E O MELHOR ALUNO &nbsp;". $nome;

?>