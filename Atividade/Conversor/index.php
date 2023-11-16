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

    <form name="calculadora" method="POST" action="index.php" class="janela">
        <h1>Conversor de Unidades</h1>

        <label for="quantidade" id="bold">Digite a quantidade: </label>

        <input type="number" name="quantidade" class="quantidade" id="valor" min="0" max="9999.99" value="<?= $_POST["quantidade"] ?? '' ?>">
    
        <label for="selecao" id="bold">De:</label>
        <select name="selecao" id="selecao">
            <?php echo gerarOptions(['Metro(s)', 'Quilômetros(s)', 'Centímetros(s)', 'Milímetro(s)'], $_POST['selecao'] ?? ''); ?>
        </select>

        <label for="para" id="bold">Para:</label>
        <select name="selecao" class="para">
            <?php echo gerarOptions(['Metro(s)', 'Quilômetros(s)', 'Centímetros(s)', 'Milímetro(s)'], $_POST['selecao_para'] ?? ''); ?>
        </select>

        <input id="converter" type="submit" value="Converter">

        <label id="bold">Resultado: </label>

        <?php
            $quantidade = isset($_POST["quantidade"]) ? $_POST["quantidade"] : 0;

            $unidadeDe = isset($_POST["selecao"]) ? $_POST["selecao"] : 'Metro(s)';
            $unidadePara = isset($_POST["selecao_para"]) ? $_POST["selecao_para"] : 'Metro(s)';

            function gerarOptions($opcoes, $selecionado) {
                $htmlopcoes = '';
                foreach ($opcoes as $opcao) {
                    $selected = ($opcao === $selecionado) ? 'selected' : '';
                    $htmlopcoes .= "<option $selected>$opcao</option>";
                }
                return $htmlopcoes;
            }
            
            function converterMetros($quantidade, $unidadePara) {
                switch ($unidadePara) {
                    case "Quilômetros(s)":
                        return $quantidade / 1000;
                    case "Centímetros(s)":
                        return $quantidade * 100;
                    case "Milímetro(s)":
                        return $quantidade * 1000;
                    default:
                        return $quantidade;
                }
            }

            function converterKilometros($quantidade, $unidadePara) {
                switch ($unidadePara) {
                    case "Metro(s)":
                        return $quantidade * 1000;
                    case "Centímetros(s)":
                        return $quantidade * 100000;
                    case "Milímetro(s)":
                        return $quantidade * 1000000;
                    default:
                        return $quantidade;
                }
            }

            function converterCentimetros($quantidade, $unidadePara) {
                switch ($unidadePara) {
                    case "Quilômetros(s)":
                        return $quantidade / 100000;
                    case "Metro(s)":
                        return $quantidade / 100;
                    case "Milímetro(s)":
                        return $quantidade * 10;
                    default:
                        return $quantidade;
                }
            }

            function converterMilimetros($quantidade, $unidadePara) {
                switch ($unidadePara) {
                    case "Quilômetros(s)":
                        return $quantidade / 1000000;
                    case "Metro(s)":
                        return $quantidade / 1000;
                    case "Centímetros(s)":
                        return $quantidade / 10;
                    default:
                        return $quantidade;
                }
            }

            $valorConvertido;

            switch ($unidadeDe) {
                case "Metro(s)":
                    $valorConvertido = converterMetros($quantidade, $unidadePara);
                    break; 
                case "Quilômetros(s)":
                    $valorConvertido = converterKilometros($quantidade, $unidadePara);
                    break;
                case "Centímetros(s)":
                    $valorConvertido = converterCentimetros($quantidade, $unidadePara);
                    break;
                case "Milímetro(s)":
                    $valorConvertido = converterMilimetros($quantidade, $unidadePara);
                    break;
            }
        
            echo '<label id="mostrar">'.$unidadeDe. ": ". $quantidade. " = ". $unidadePara . " ". $valorConvertido .'</label>';
        ?>
            
        <label style="display: none;"><?php echo $conta ?>quilometro(s) equivalem a <?php echo $resulta ?> Metros(s)</label>
    </form>
    <script src="./LengthInput.js"></script>
</body>
</html>