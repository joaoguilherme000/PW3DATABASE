<?php

$salarios = array('joao' => 2000,'pedro' => 100,'maria' => 500, );

    echo "O salario de João é " . $salarios['joao']. "<br/>";
    echo "O salario de pedro é " . $salarios['pedro']. "<br/>";
    echo "O salario de maria é " . $salarios['maria']. "<br/>";

    $salarios['joao'] = "alto";
    $salarios['pedro'] = "medio";
    $salarios['maria'] = "baixo";

    echo "<br/>"."O salario de João é " . $salarios['joao']. "<br/>";
    echo "O salario de pedro é " . $salarios['pedro']. "<br/>";
    echo "O salario de maria é " . $salarios['maria']. "<br/>";
?>