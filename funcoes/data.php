<?php

    $dataAtual = date("d/m/y");

    echo "\n<h1> Hoje é " . $dataAtual. "\n";

    $hora = date("h:i:s");

    echo "\n<h1>Agora são: ". $hora. "\n";

    $dataHora = date("D/M/Y h:i:s");

    echo "\n<h1>Data e hora: " . $dataHora. "\n";
?>