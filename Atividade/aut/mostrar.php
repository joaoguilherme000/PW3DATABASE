<?php
$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $nome = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
  $idade = isset($_POST["senha"]) ? $_POST["senha"] : "";
}

$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "database";
 
$con = mysqli_connect($localhost,$user_name,$senha,$db);
if (mysqli_connect_errno()){
    echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
} else {
  mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/reset.css">
    <link rel="stylesheet" href="./style.css">
    <title>Bem vindo</title>
</head>
<body >
  <a href="./index.html"><h1 class="back">Voltar</h1></a>
</body>
</html>