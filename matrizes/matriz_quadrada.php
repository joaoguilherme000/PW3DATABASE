<?php
function matrizIdentidade($n) {
    $matriz = array(); // Inicialize a matriz vazia
    
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == $j) {
                $matriz[$i][$j] = 1; // Elementos na diagonal principal são 1
            } else {
                $matriz[$i][$j] = 0; // Outros elementos são 0
            }
        }
    }
    
    return $matriz;
}

$n = 3; // Tamanho da matriz identidade (4x4 no exemplo)
$matriz_identidade = matrizIdentidade($n);

// Exibindo a matriz identidade
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo $matriz_identidade[$i][$j] . " ";
    }
    echo "<br>";
}

?>
