<?php

    echo "<h1>Cadastrado!!!";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        echo "<h2> seu nome: $usuario";
    }


?>