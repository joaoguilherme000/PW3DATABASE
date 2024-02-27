<?php

    $con = mysqli_connect("localhost", "root", "", "dbloja"); // com sql

    if (mysqli_connect_errno()) {

        echo "Erro ao conectar com a base de dados" . mysqli_connect_error();
    } else {
        $sql = "insert into tbPessoa values('nome', 'Mesmo', 55)";

        mysqli_query($con,$sql);
        echo "FUNCIONOU";
    
    }

?>