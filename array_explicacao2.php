<?php

    $nome1 = "Maria";
    $nome2 = "João";
    $nome3 = "Pedro";
    $nome4 = "Paulo";
    $nome5 = "Lucas";

    echo("$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5<br/>");

?>

<?php

    $nome = array("Maria","João","Pedro","Paulo","Lucas");

    echo "<br/>Os nomes no array<br/>";

    foreach ($nome as $nomes) {
        echo "<br/>" . $nomes;
    }

?>