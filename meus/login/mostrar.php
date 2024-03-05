<?php

    $localhost = 'localhost';
    $user_name = 'root';
    $senha = "";
    $db = "dbPessoa";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $idade = $_POST["idade"];
    }

    $con = mysqli_connect($localhost,$user_name,$senha,$db);
		if (mysqli_connect_errno()){
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
		}else{
			$sql = "INSERT INTO tbPessoa(nome,sobrenome,idade)VALUES('$_POST[nome]','$_POST[sobrenome]','$_POST[idade]')";
		if(mysqli_query($con,$sql)){
		}else{
			echo "Erro ao inserir: ".mysqli_error($con);
		}
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
    <title>Formulário de Cadastro</title>
</head>
<body >
    <div class="data">
        <div class="header">
            <h1>Suas informações de login</h1>
        </div>
        <div class="rowData">
            <h1><?php echo $nome?></h1>
            <h1><?php echo $sobrenome?></h1>
            <h1><?php echo $idade?></h1>
        </div>
        <h1 class="send">
            informação enviada para o banco de dados 👀
        </h1>
    </div>
</body>
</html>