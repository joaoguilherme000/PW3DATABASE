<?php

$texto = "nada";

$tamanho = strlen($texto); //variavel pega o tamanho da quantidade de letras

echo "\n<h1>". $texto. " possui => ". $tamanho. " caracteres</h1>";

echo "\n<h1>" .strtoupper($texto)."</h1>";

echo "\n<h1>" .strtolower($texto)."</h1>";

echo "\n<h1>" .ucfirst($texto)."</h1>";

echo "\n<h1>" .ucwords($texto)."</h1>";

//

echo "\n<h1>" .substr($texto,13,3)."</h1>";

echo "\n<h1>" .str_replace("nada","tudo", $texto)."</h1>";

?>