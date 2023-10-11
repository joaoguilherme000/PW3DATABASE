<?php

    echo "<h1>Cadastrado!!!";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        echo "<h2> nome: $usuario";
        echo "<h2> sua senha: $senha";
    }

    echo "<h2> Seus dados foram roubados 😂";


?>