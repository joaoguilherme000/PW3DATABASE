<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/styles.css">
    <title>Calculadora Gorjeta</title>
</head>
<body>

    <form name="calculadora" method="post" action="Resulta.php" class="janela">
        <h1>Conversor de Unidades</h1>

        <label for="quantidade" id="bold">Digite a quantidade: </label>

        <?php 
            $valor = $_POST["quantidade"];
            echo '<input type="number" name="quantidade" class="quantidade" id="valor" min="0" max="9999.99" value="' . $valor . '">';
        ?>
    
        <label for="selecao" id="bold">De:</label>

        <select name="selecao" id="selecao">
            <option>Metro(s)</option>
            <option>Quilômetros(s)</option>
            <option>Centímetros(s)</option>
            <option>Milímetro(s)</option>
        </select>

        <label for="para" id="bold">Para:</label>

        <select name="selecao2" id="selecao2"class="para">
            <option>Metro(s)</option>
            <option>Quilômetros(s)</option>
            <option>Centímetros(s)</option>
            <option>Milímetro(s)</option>
        </select>

        <input id="botao" type="submit" value="Converter">

        <label id="bold">Resultado: </label>
        <label id="mostrar">.</label>

        <?php

            $valor = $_POST["quantidade"];
            $conta = $_POST["selecao"];
            
            // Função para converter metros para outras unidades
            function converterUnidades($valor, $unidadeDestino) {
                switch ($unidadeDestino) {
                    case "Quilômetros(s)":
                        return $valor / 1000;
                    case "Centímetros(s)":
                        return $valor * 100;
                    case "Milímetro(s)":
                        return $valor * 1000;
                    default:
                        return $valor;
                }
            }

            // Converter a quantidade para a unidade desejada
            $valorConvertido = converterUnidades($valor, $_POST["selecao"]);

            // Calcular o resultado com base na unidade de destino
            switch ($conta) {
                case "Metro(s)":
                    $resulta = $valorConvertido;
                    break;
                case "Quilômetros(s)":
                    $resulta = $valorConvertido * 0.10;
                    break;
                case "Centímetros(s)":
                    $resulta = $valorConvertido * 0.05;
                    break;
                case "Milímetro(s)":
                    $resulta = $valorConvertido * 0.02;
                    break;
                default:
                    $resulta = 0;
                    break;
            }
        
            echo '<label id="mostrar">' . $resulta .'</label>';
        ?>
            
        <label style="display: none;"><?php echo $conta ?>quilometro(s) equivalem a <?php echo $resulta ?> Metros(s)</label>
    </form>
    <script src="./LengthInput.js"></script>
</body>
</html>