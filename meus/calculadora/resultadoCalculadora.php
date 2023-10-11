<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $escolha = $_POST["escolha"];

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    $palavra1 = $_POST["palavra1"];
    $palavra2 = $_POST["palavra2"];

    $resultado = 0;

    if($escolha == "multiplicar"){
        $resultado = $numero2 * $numero1;
        echo "<h1>Resultado: $resultado<h1/>";
    }elseif ($escolha == "dividir") {
        $resultado = $numero2 / $numero1;
        echo "<h1>Resultado:$resultado<h1/>";
    }elseif ($escolha == "soma") {
        $resultado = $numero2 + $numero1;
        echo "<h1>Resultado: $resultado<h1/>";
    }elseif ($escolha == "subtrai") {
        $resultado = $numero2 - $numero1;
        echo "<h1>Resultado: $resultado<h1/>";
    }else {
        echo "<h1>Erro: Operação inválida</h1>";
        exit;
    }
    
    echo "<h1>$palavra1$palavra2<h1/>";
}



?>