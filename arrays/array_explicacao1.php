<?php

$nome = array('etecia', 10, true, 45.50);

foreach ($nome as $nomes) {
    echo " Valores : " .  $nomes. "<br>";
}

for ($i = 0; $i < count($nome); $i++) {
    echo "O valor: " . $nome[$i] . "<br>";
}

?>
