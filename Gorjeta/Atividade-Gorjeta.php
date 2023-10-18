<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo.css">
    <title>Calculadora Gorjeta</title>
</head>
<body>

    <form name="calculadora" method="post" action="Atividade-Gorjeta.php" class="janela">
        <h1>Calculadora de Gorjeta</h1>

        <label for="numero1" id="bold">Valor da conta: </label>

        <input type="number" name="numero1" id="bold" class="numero1" required>
    
        <label for="selecao" id="bold">Qualidade do serviço:</label>

        <select name="selecao" id="selecao">
            <option>Excelente - 10%</option>
            <option>Ótimo - 8%</option>
            <option>Bom - 5%</option>
            <option>Ruim - 2%</option>
        </select>

        <input id="botao" type="submit" value="Calcular Gorjeta">

        <label id="bold">Valor do gorjeta: </label>
        <?php
            $gorjeta = 10; 
        
            echo'<label id="mostrar">R$' . $gorjeta .'</label>';
        ?>

        <label id="bold">Valor total: </label>

        <?php
            $total = 100; 
            echo'<label id="mostrar">R$' . $total .'</label>';
        
        ?>  
            
        

            
    </form>
</body>
</html>
