<?php
if (isset($_COOKIE['voto'])) {
    $voto = $_COOKIE['voto'];

    // Defina um cookie chamado "voto" com o valor $voto
    setcookie("voto", $voto, time() + 3600 * 24 * 31); // Expira em um mês

    // Aqui, você pode usar a variável $voto conforme necessário.
    // Por exemplo, para exibir o valor do voto:
    echo "Você votou em: " . $voto;
} else {
    $msg = "Você não votou em nenhuma opção.";
    echo $msg;
}
?>