<?php
if (isset($_POST['voto'])) {
    $voto = $_POST['voto'];
    
    // Aqui, você pode usar a variável $voto conforme necessário.
    // Por exemplo, para exibir o valor do voto:
    echo "Você votou em: " . $voto;
} else {
    $msg = "Você não votou em nenhuma opção.";
    echo $msg;
}
?>