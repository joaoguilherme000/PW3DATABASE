<?php
$localhost = 'localhost';
$user_name = 'root';
$password = "";
$db = "banco";

$conn = new mysqli($localhost, $user_name, $password, $db);

if (mysqli_connect_errno()){
    echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os valores do formulário
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Consulta SQL para verificar se o usuário e a senha existem no banco de dados
    $sql = "SELECT * FROM tbpessoa WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["usuario"] = $usuario;
        header("Location: pag2.php");
        exit;
    } else {
        header("Location: login.php?erro=1");
        exit;
    }
} else {
    // Se não foram enviados via POST, redireciona de volta para a página de login
    header("Location: login.php");
    exit;
}
?>
