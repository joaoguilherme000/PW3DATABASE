<?php
include_once 'conexao.php'; // Arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    if (adicionarPergunta($titulo, $descricao)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao adicionar pergunta.";
    }
}
?>