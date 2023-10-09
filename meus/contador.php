<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Contador</h1>
    <form name="Contador" method="post" action="contador.php">
        <?php
        session_start();

        if (!isset($_SESSION["contador"])) {
            $_SESSION["contador"] = 0;
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION["contador"]++;
        
            echo "<h1>Contagem de visitas no site: " . $_SESSION["contador"] . "</h1>";
        }
        ?>

        <input type="submit" value="Contar">
    </form>
</body>
</html>