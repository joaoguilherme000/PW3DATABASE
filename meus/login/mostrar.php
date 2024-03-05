<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $idade = $_POST["idade"];
    }

  $localhost = 'localhost';
	$user_name = 'root';
	$senha = "";
	$db = "dbPessoa";
 
 
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
    <div class="user">
      <div class="rowData">
        <h2>Suas informações de login</h2>
        <h1><?php echo $nome?></h1>
        <h1><?php echo $sobrenome?></h1>
        <h1><?php echo $idade?></h1>
      </div>
      <h2 >
          informação enviada para o banco de dados 👀
      </h2>
    </div>
    <div class="database">
      <div class="tables">
        <h1 class="tb">Nomes</h1>
        <h1 class="tb">Sobrenomes</h1>
        <h1 class="tb">Idades</h1>
      </div>
      <div class="information" >
        <?php
        $con = mysqli_connect($localhost, $user_name, $senha, $db);
        if (mysqli_connect_errno()){
            echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
        } else {
            $mostrar = "SELECT nome, sobrenome, idade FROM tbPessoa LIMIT 5";
            $resultado = mysqli_query($con, $mostrar);
            while ($pessoa = mysqli_fetch_array($resultado)) {
                echo "<div class='infos'>";
                echo "<h1 class='info'>" . $pessoa['nome'] . "</h1>";
                echo "<h1 class='info'>" . $pessoa['sobrenome'] . "</h1>";
                echo "<h1 class='info'>" . $pessoa['idade'] . "</h1>";
                echo "</div>";
            }
            mysqli_close($con);
        }
        ?>
      </div>
  </div>
</body>
</html>