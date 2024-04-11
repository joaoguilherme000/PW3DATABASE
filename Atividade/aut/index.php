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
$db = "banco";

$conn = new mysqli($localhost, $user_name, $password, $db);

if (mysqli_connect_errno()){
    echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM tbpessoa WHERE usuario = '$usuario' AND senha = '$senha'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $_SESSION["usuario"] = $usuario;
      header("Location: pag2.php");
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
          <p>ainda não tem uma conta <a href="cadastrar.html" class="ins">Cadastre-se</a></p>
        </div>
      </div>
    </form>
  </div>  
</body>
</html>