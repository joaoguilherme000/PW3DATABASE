<?php

echo "4.Crie  um array que  armazene  o  nome  de  todos  os  meses  do  ano. Digite  um número e ele informe qual o nome do mês correspondente.";

$meses = array(
    "janeiro" => 1,
    "fevereiro" => 2,
    "março" => 3,
    "abril" => 4,
    "maio" => 5,
    "junho" => 6,
    "julho" => 7,
    "agosto" => 8,
    "setembro" => 9,
    "outubro" => 10,
    "novembro" => 11,
    "dezembro" => 12
);

$mes = 0;

$numero = 1;

foreach ($meses as $key => $value) {
    $numero = 5;

    if ($numero == $value){
        $nome = $key;
    }
}

echo "<br/>" . $nome;


?>