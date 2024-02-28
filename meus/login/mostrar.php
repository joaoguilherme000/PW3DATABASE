<?php

    echo "<h1>Cadastrado!!!";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"];
        $sobrenome = $_POST["sobrenome"];

        echo "<h2> nome: $usuario";
        echo "<h2> sua sobrenome: $sobrenome";
    }

    echo "<h2> Feito";


?>