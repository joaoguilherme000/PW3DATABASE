<?php

echo "<h1> Tratamento de Erros:
Crie uma função que divida um número por zero e capture e trate o erro resultante.";

function dividirPorZero($numero) {
    try {
        if ($numero === 0) {
            throw new Exception("<br>Não é possível dividir por zero.");
        }
        
        $resultado = 10 / $numero;
        return $resultado;
    } catch (Exception $e) {
        // Captura a exceção e exibe uma mensagem de erro personalizada
        echo "Erro: " . $e->getMessage();
    }
}

$resultado = dividirPorZero(0);

echo "<h2>$resultado";

?>