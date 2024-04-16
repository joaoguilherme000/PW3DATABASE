<?php
session_start();

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
  $_SESSION = array();

  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]
    );
  }

  // Destruir a sessão
  session_destroy();
}

$localhost = 'localhost';
$user_name = 'root';
$password = "";

$conn = new mysqli($localhost, $user_name, $password);

if ($conn->connect_error) {
    echo "<script>console.error('Erro ao conectar ao MySQL: " . $conn->connect_error . "');</script>";
}

$sql_create_database = "CREATE DATABASE IF NOT EXISTS banco";
if ($conn->query($sql_create_database) === TRUE) {
    echo "<script>console.log('Banco de dados criado com sucesso ou já existente');</script>";
} else {
    echo "<script>console.error('Erro ao criar o banco de dados: " . $conn->error . "');</script>";
}

$conn->select_db("banco");

$sql_create_table = "CREATE TABLE IF NOT EXISTS tbPessoa (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) NOT NULL,
    sobrenome VARCHAR(25) NOT NULL,
    email VARCHAR(54) NOT NULL,
    CPF VARCHAR(15) NOT NULL,
    sexo CHAR(1) DEFAULT 'O' CHECK(sexo IN ('F','M','O')),
    usuario VARCHAR(33) NOT NULL,
    senha VARCHAR(13) NOT NULL,
    primary key(codigo)
)";
if ($conn->query($sql_create_table) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso ou já existente');</script>";
} else {
    echo "<script>console.error('Erro ao criar a tabela: " . $conn->error . "');</script>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM tbpessoa WHERE usuario = '$usuario' AND senha = '$senha'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $_SESSION["usuario"] = $usuario;
    header("Location: pag2.php?usuario=$usuario"); // Adicionando o nome de usuário à URL
    exit;
  } else {
    $sql_check_user = "SELECT * FROM tbpessoa WHERE usuario = '$usuario'";
    $result_check_user = $conn->query($sql_check_user);
    
    if ($result_check_user->num_rows > 0) {
      $erro = "Usuario ou senha invalido";
    } else {
      $erro = "Sem cadastro";
    }
  }
}
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="./style/logStyle.css" />
  <link rel="stylesheet" href="./style/reset.css">
  <title>Faça seu Login</title>
</head>
<body>
  <div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
      <h1>Login</h1> 
      <div class="outro">
        <label for="usuario" class="first">Usuario</label>
        <input type="text" name="usuario" id="usuario" autocomplete="on" size="20" maxlength="33">
      </div>
      <div class="outro">
        <label for="senha" class="first">Senha</label>
        <input type="password" name="senha" id="senha" autocomplete="on" size="20" maxlength="13">
      </div>
      <?php if(isset($erro)) { ?>
      <div class="erro">
        <p><?php echo $erro; ?></p>
      </div>
      <?php } ?>
      <div class="bottomCont">
        <div class="mant">
          <input type="checkbox" name="manterlogado" id="manterlogado" value="yes"/> 
          <label for="manterlogado" class="checkbox-label">Manter-me logado</label>
        </div>
        <div class="log">
          <input type="submit" value="Logar" />
        </div>
        <div class="cad">
          <p>ainda não tem uma conta <a href="cadastrar.php" class="ins">Cadastre-se</a></p>
        </div>
      </div>
    </form>
  </div>  
</body>
</html>
