<?php
$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
  $idade = isset($_POST["idade"]) ? $_POST["idade"] : "";
}

$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "dbPessoa";
 
$con = mysqli_connect($localhost,$user_name,$senha,$db);
if (mysqli_connect_errno()){
    echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
} else {
  // Verifica se solicitou uma ação de excluir ou editar
  if(isset($_POST['action']) && !empty($_POST['action'])) {
      $action = $_POST['action'];
      if($action == 'edit') {
          // Editar registro
          $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
          $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
          $idade = isset($_POST['idade']) ? $_POST['idade'] : "";
          $sql = "UPDATE tbPessoa SET nome='$nome', idade='$idade' WHERE codigo='$codigo'";
          if(mysqli_query($con, $sql)) {
              $message = "Registro editado com sucesso.";
          } else {
              $message = "Erro ao editar registro: " . mysqli_error($con);
          }
      } elseif($action == 'delete') {
          // Excluir registro
          $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
          $sql = "DELETE FROM tbPessoa WHERE codigo='$codigo'";
          if(mysqli_query($con, $sql)) {
              $message = "Registro excluído com sucesso.";
          } else {
              $message = "Erro ao excluir registro: " . mysqli_error($con);
          }
      }
  } else {
      // Inserir novo registro
      $sql = "INSERT INTO tbPessoa(nome,idade) VALUES('$nome','$idade')";
      if(mysqli_query($con,$sql)){
      } else {
          $message = "Erro ao inserir: ".mysqli_error($con);
      }
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
  <a href="./login.html"><h1 class="back">Voltar</h1></a>
    <div class="user">
      <div class="rowData">
        <h2>Suas informações de login</h2>
        <h1><?php echo $nome?></h1>
        <h1><?php echo $idade?></h1>
      </div>
      <h2 >
          informação enviada para o banco de dados 👀
      </h2>
    </div>
    <div class="database">
      <h1>LISTA DE PESSOAS</h1>
      <div class="tables">
        <h1 class="tb">Nomes</h1>
        <h1 class="tb">Idades</h1>
        <h1 class="tb">Ação</h1>
      </div>
      <div class="information" >
        <?php
        echo "<h1 class='message'>$message</h1>";
        $con = mysqli_connect($localhost, $user_name, $senha, $db);
        if (mysqli_connect_errno()){
            echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
        } else {
          $mostrar = "SELECT codigo, nome, idade FROM tbPessoa LIMIT 5";
          $resultado = mysqli_query($con, $mostrar);
          while ($pessoa = mysqli_fetch_array($resultado)) {
              echo "<div class='infos'>";
              echo "<h1 class='info'>" . $pessoa['nome'] . "</h1>";
              echo "<h1 class='info'>" . $pessoa['idade'] . "</h1>";
              echo "<form method='post' class='action' action='".$_SERVER['PHP_SELF']."'>";
              echo "<input class='none' type='hidden' name='codigo' value='".$pessoa['codigo']."'>";
              echo "<input class='none' type='hidden' name='nome' value='".$pessoa['nome']."'>";
              echo "<input class='none' type='hidden' name='idade' value='".$pessoa['idade']."'>";
              echo "<input class='none' type='hidden' name='action' value='edit'>";
              echo "<button type='submit' class='edit1'>Editar</button>";
              echo "</form>";
              echo "<form method='post' class='action' action='".$_SERVER['PHP_SELF']."'>";
              echo "<input class='none' type='hidden' name='codigo' value='".$pessoa['codigo']."'>";
              echo "<input class='none' type='hidden' name='action' value='delete'>";
              echo "<button type='submit' class='edit2'>Excluir</button>";
              echo "</form>";
              echo "</div>";
          }
          mysqli_close($con);
        }
        ?>
      </div>
  </div>
  <script>
    // Função para mostrar a mensagem e depois escondê-la após 2 segundos
    function showAndHideMessage() {
      var message = document.querySelector('.message');
      message.classList.add('show');
      setTimeout(function() {
        message.classList.remove('show');
      }, 2000);
    }

    // Chama a função para mostrar a mensagem quando a página é carregada
    window.onload = function() {
        showAndHideMessage();
    };
  </script>
</body>
</html>