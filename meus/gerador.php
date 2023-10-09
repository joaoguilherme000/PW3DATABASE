<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador</title>
</head>
<body>
    <h1>Resultado do Sorteio</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $min = $_POST["min"];
        $max = $_POST["max"];

        if ($min >= $max) {
            echo "<p>O valor mínimo deve ser menor que o valor máximo.</p>";
        } else {
            $numeroSorteado = rand($min, $max);
            echo "<p>O número sorteado entre $min e $max é: $numeroSorteado</p>";
        }
    }
    ?>

    <p><a href="gerador.html">Realizar outro sorteio</a></p>
</body>
</html>