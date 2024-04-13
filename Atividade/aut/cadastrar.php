<?php
session_start();

$localhost = 'localhost';
$user_name = 'root';
$password = "";
$db = "banco";

$conn = new mysqli($localhost, $user_name, $password, $db);

if (mysqli_connect_errno()){
  echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $CPF = $_POST['CPF'];
    $sexo = $_POST['option'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO tbpessoa (nome, sobrenome, email, CPF, sexo, usuario, senha) VALUES ('$nome', '$sobrenome', '$email', '$CPF', '$sexo', '$usuario', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/reset.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <div class="content">
        <header><img src="logo.png" alt="logo"></header>
        <div class="main">
            <h1 class="titulo">Crie sua conta</h1>
            <form name="cadastro" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form">
                <h2 class="second">Pare ser cliente é neccessário preencher corretamente o fórmulario abaixo com os respectivos dados cadastrais. Os campos com * são de preenchimento obrigatório e essencias.</h2>
                <div class="nomes">
                    <div class="nome">
                        <label for="nome" class="first">Nome</label><label class="red"> *</label>
                        <input type="text" name="nome" id="nome" autocomplete="on" size="20" maxlength="20" required>
                    </div>
                    <div class="nome">
                        <label for="sobrenome" class="first">Sobrenome</label><label class="red"> *</label>
                        <input type="text" name="sobrenome" id="sobrenome" autocomplete="on" size="20" maxlength="25" required>
                    </div>
                </div>
                <div class="outro">
                    <div>
                        <label for="email" class="first">Email</label><label class="red"> *</label>
                    </div>
                    <input type="text" name="email" id="email" autocomplete="on" size="20" maxlength="54" required>
                </div>
                <div class="outro">
                    <div>
                        <label for="CPF" class="first">CPF</label><label class="red"> *</label>
                    </div>
                    <input type="text" name="CPF" id="CPF" autocomplete="on" size="20" maxlength="14" required>
                </div>
                <div class="radio">
                    <label class="radio-label">Escolha o sexo:</label>
                    <div class="radio-options">
                        <input type="radio" id="M" name="option" value="M">
                        <label for="M" class="radio-label">Masculino</label>
                        <input type="radio" id="F" name="option" value="F">
                        <label for="F" class="radio-label">Feminino</label>
                        <input type="radio" id="O" name="option" checked value="O">
                        <label for="Outro" class="radio-label">Outro</label>
                    </div>
                </div>
                <div class="outro">
                    <div>
                        <label for="usuario" class="first">Usuario</label><label class="red"> *</label>
                    </div>
                    <input type="text" name="usuario" id="usuario" autocomplete="on" size="20" maxlength="33" required>
                </div>
                <div class="outro">
                    <div>
                        <label for="senha" class="first">Senha</label><label class="red"> *</label>
                    </div>
                    <input type="password" name="senha" id="senha" autocomplete="on" size="20" maxlength="13" required placeholder="Mínimo de 5 caracteres">
                </div>
                <div class="footer">
                    <div>
                        <input type="submit" value="Cadastre-se">
                    </div>
                    <h2>Ao preencher o formulário acima você concorda com os nossos <ins>Termos de uso</ins> e nossa <ins>Política de Privacidade.</ins></h2>
                    <a href="index.php"><p class="back">Já tenho cadastro</p></a>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cpfInput = document.getElementById('CPF');
            
            cpfInput.addEventListener('input', function() {
                console.log('Input detectado!');

                var cpf = cpfInput.value.replace(/\D/g, '');
                cpf = cpf.padStart(11, '');
    
                if (cpf.length === 11) {
                    var cpfFormatado = cpf.substring(0, 3) + '.' +
                                    cpf.substring(3, 6) + '.' +
                                    cpf.substring(6, 9) + '-' +
                                    cpf.substring(9, 11);
                    cpfInput.value = cpfFormatado;
                    console.log(cpfFormatado);
                }
            });
        });
    </script>
</body>
</html>