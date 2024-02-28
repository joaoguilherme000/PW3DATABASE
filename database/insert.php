<?php

    $con = mysqli_connect("localhost", "root", "", "dbloja"); // com sql

    if (mysqli_connect_errno()) {

        echo "Erro ao conectar com a base de dados" . mysqli_connect_error();
    } else {
        $sql = "INSERT INTO tbPessoa (nome,sobrenome,idade) values('nome 1', 'Mesmo 1', 55)";

        mysqli_query($con,$sql);
        echo "FUNCIONOU";
    
    }

?>