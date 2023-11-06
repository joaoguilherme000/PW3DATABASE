<?php
if (isset($_COOKIE['voto'])) {
    $voto = $_COOKIE['voto'];

    setcookie("voto", $voto, time() + 3600 * 24 * 31); // Expira em um mês

    $msg = $voto;
} else {
    $msg = "Você não votou em nenhuma opção.";
    echo $msg;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/styles.css">
    <title>Voto</title>
</head>
<body class="content2">
    <h1>Você votou em <?php  echo $voto;?></h1>
</body>
</html>