<?php

echo " <h2>Utilizando vetores,  cadastre  10  pessoas, sendo  que  você  deverá  utilizar um vetor para  cadastrar  cada  pessoa.  Obtenha  seguintes  dados  do  usuário:  nome,  cidade, idade, sexo. Ao final do cadastro e armazenamento seu programa deverá exibir:</h2> <br/>";

$pessoa1 = array("nome" => "João", "idade" => 15, "sexo" => "Masculino", "cidade" => "São Paulo");
$pessoa2 = array("nome" => "Maria", "idade" => 25, "sexo" => "Feminino", "cidade" => "Rio de Janeiro");
$pessoa3 = array("nome" => "Pedro", "idade" => 30, "sexo" => "Masculino", "cidade" => "Santos");
$pessoa4 = array("nome" => "Ana", "idade" => 28, "sexo" => "Feminino", "cidade" => "Salvador");
$pessoa5 = array("nome" => "Lucas", "idade" => 22, "sexo" => "Masculino", "cidade" => "Brasília");
$pessoa6 = array("nome" => "Mariana", "idade" => 29, "sexo" => "Feminino", "cidade" => "Curitiba");
$pessoa7 = array("nome" => "Carlos", "idade" => 35, "sexo" => "Masculino", "cidade" => "Fortaleza");
$pessoa8 = array("nome" => "Isabel", "idade" => 17, "sexo" => "Feminino", "cidade" => "Santos");
$pessoa9 = array("nome" => "Rafael", "idade" => 24, "sexo" => "Masculino", "cidade" => "Manaus");
$pessoa10 = array("nome" => "Patrícia", "idade" => 26, "sexo" => "Feminino", "cidade" => "Porto Alegre");


$pessoas = array($pessoa1, $pessoa2, $pessoa3, $pessoa4, $pessoa5, $pessoa6, $pessoa7, $pessoa8, $pessoa9, $pessoa10);

echo " <h3> 1. Uma listagem de todos os nomes e idades das pessoas cadastradas </h3>";

foreach ($pessoas as $pessoa) {
    echo  "<br>" . "Nome: " . $pessoa["nome"] . ",&nbsp; Idade: " . $pessoa["idade"] . "<br>";
}

echo " <h3>2. Uma listagem de todos os nomes de quem mora em Santos </h3>";

foreach ($pessoas as $pessoa) {
    if ($pessoa["cidade"] == "Santos") {
        echo "Nome: " . $pessoa["nome"] . ",&nbsp; Cidade: " . $pessoa["cidade"] . "<br>";
    }
}

echo  "<br>";
echo "<h3>3. Uma listagem de todos os nomes de quem tem mais de 18 anos</h3>";

foreach ($pessoas as $pessoa) {
    if ($pessoa["idade"] > 18) {
        echo "Nome: " . $pessoa["nome"] . ",&nbsp; idade: " . $pessoa["idade"] . "<br>";
    }
}

echo "<h3>4. Uma listagem de todos os nomes de quem é do sexo masculino</h3>";

foreach ($pessoas as $pessoa) {
    if ($pessoa["sexo"] == "Masculino") {
        echo "Nome: " . $pessoa["nome"] . ",&nbsp; sexo: " . $pessoa["sexo"] . "<br>";
    }
}

?>