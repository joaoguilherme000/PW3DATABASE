<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Calculadora Gorjeta</title>
</head>
<body>

    <form name="calculadora" method="post" action="Atividade-Gorjeta.php" class="janela">
        <h1>Calculadora de Gorjeta</h1>

        <label for="numero1" id="bold">Valor da conta: </label>

        <?php 
            $valor = isset($_POST["numero1"]) ? floatval($_POST["numero1"]) : 0;
            echo '<input type="number" name="numero1" class="numero1" id="valor" min="0" max="9999.99" value="' . $valor . '">';
        ?>
    
        <label for="selecao" id="bold">Qualidade do serviço:</label>

        <select name="selecao" id="selecao">
            <option>Excelente - 10%</option>
            <option>Ótimo - 8%</option>
            <option>Bom - 5%</option>
            <option>Ruim - 2%</option>
        </select>

        <input id="botao" type="submit" value="Calcular Gorjeta">

        <label id="bold">Valor da gorjeta: </label>

        <?php
            $valor = 0;
            $qualidadeServico = "0";
            $valor = isset($_POST["numero1"]) ? floatval($_POST["numero1"]) : 0;  // só usar o isset e mandar para a mesma pagina que ele fica sempre
            
            $qualidadeServico = isset($_POST["selecao"]) ? ($_POST["selecao"]) : "";

            if ($qualidadeServico === "Excelente - 10%") {
                $gorjeta = $valor * 0.10;
            } elseif ($qualidadeServico === "Ótimo - 8%") {
                $gorjeta = $valor * 0.08;
            } elseif ($qualidadeServico === "Bom - 5%") {
                $gorjeta = $valor * 0.05;
            } elseif ($qualidadeServico === "Ruim - 2%") {
                $gorjeta = $valor * 0.02;
            } else {
                $gorjeta = 0;
            }
            $total = $valor + $gorjeta;
        ?>

        <label id="mostrar">R$<?php echo $gorjeta; ?></label>

        <label id="bold">Valor total: </label>

        <label id="mostrar">R$<?php echo $total?></label>
            
    </form>
    <script src="./LengthInput.js"></script>
</body>
</html>
