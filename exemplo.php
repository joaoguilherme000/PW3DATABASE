<?php

$con = mysqli_connect("localhost", "root", "", "dbloja");

if (mysqli_connect_errno()) {

    echo "Erro ao conectar com a base de dados" .
        mysqli_connect_error();
} else {
    echo "Entrou";
}


?>