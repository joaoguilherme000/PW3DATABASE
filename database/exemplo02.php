<?php

$con = mysqli_connect("localhost", "root", ""); // sem sql

$none = "";

$sql = "create database dbNome";

if (mysqli_connect_errno()) {

    echo "Erro ao conectar com a base de dados" .
        mysqli_connect_error();
} else {
    echo "FUNCIONOU";
    if (mysqli_query($con,$sql)) {
        echo "<br> BANCO DE DADOS CRIADO";
    }

}


?>