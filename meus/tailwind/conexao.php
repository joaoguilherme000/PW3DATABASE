<?php
// Conexão com o banco de dados (substitua as credenciais conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Banco";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Função para obter todas as perguntas do banco de dados
function obterPerguntas() {
    global $conn;
    $sql = "SELECT * FROM perguntas ORDER BY data_publicacao DESC";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Função para obter todas as respostas de uma pergunta específica
function obterRespostas($pergunta_id) {
    global $conn;
    $sql = "SELECT * FROM respostas WHERE pergunta_id = $pergunta_id ORDER BY votos DESC";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Função para adicionar uma pergunta ao banco de dados
function adicionarPergunta($titulo, $descricao) {
    global $conn;
    $sql = "INSERT INTO perguntas (titulo, descricao) VALUES ('$titulo', '$descricao')";
    return $conn->query($sql);
}

// Função para adicionar uma resposta a uma pergunta ao banco de dados
function adicionarResposta($pergunta_id, $descricao) {
    global $conn;
    $sql = "INSERT INTO respostas (pergunta_id, descricao) VALUES ($pergunta_id, '$descricao')";
    return $conn->query($sql);
}