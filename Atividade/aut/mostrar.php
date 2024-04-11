<?php
$localhost = 'localhost';
$user_name = 'root';
$password = "";
$db = "banco";

$conn = new mysqli($localhost, $user_name, $password, $db);

if (mysqli_connect_errno()){
  echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
}

// Captura os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$CPF = $_POST['CPF'];
$sexo = $_POST['option'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Insere os dados no banco de dados
$sql = "INSERT INTO tbpessoa (nome, sobrenome, email, CPF, sexo, usuario, senha) VALUES ('$nome', '$sobrenome', '$email', '$CPF', '$sexo', '$usuario', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
header("Location: index.php");
  exit();
?>