<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}

$usuario = $_GET["usuario"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/pag2Style.css">
    <link rel="stylesheet" href="./style/reset.css">
    <title>SEJA BEM VINDO</title>
</head>
<body>
    <div id="mySidenav" class="sidenav">
    <a href="#" id="projects"><?php echo $usuario; ?></a>
    </div>

    <h2 class="message">Seja bem vindo</h2>
    <a href="index.php?logout=true"><p class="back">Novo login</p></a>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
</script>
</body>
</html>