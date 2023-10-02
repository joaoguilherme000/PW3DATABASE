<?php

$texto = "nada";

$tamanho = strlen($texto); //variavel pega o tamanho da quantidade de letras

echo "\n<h1>". $texto. " possui => ". $tamanho. " caracteres</h1>";

echo "\n<h1>" .strtoupper($texto)."</h1>";

echo "\n<h1>" .strtolower($texto)."</h1>";

echo "\n<h1>" .ucfirst($texto);

echo "\n<h1>" .ucwords($texto);

// mostrar 10 caracteres apartir da primeira letra

$texto2 = "Isso é uma string de exemplo";
$parte = substr($texto2, 0, 10);
echo "<h1>" . $parte ;


echo "\n<h1>" .str_replace("nada","tudo", $texto);

?>