<?php

# carrega as classes

include_once 'Pessoa.php';
include_once 'Conta.php';

# criação do objeto $carlos

$carlos = new Pessoa;
$carlos->codigo = 10;
$carlos->nome = "Carlos da Silva";
$carlos->altura = 1.85;
$carlos->idade = 25;
$carlos->nascimento = "10/04/1976";
$carlos->escolaridade = "Ensino Médio";

echo "$carlos->nome :\n";
echo "formado em: {$carlos->escolaridade} <br><br>";

$carlos->formar('Técnico em Eletricidade');
echo "{$carlos->nome} : formado em: {$carlos->escolaridade} <br><br>";
echo "{$carlos->nome} possui {$carlos->idade} anos \n";

$carlos->envelhecer(2);
echo "mas agora {$carlos->nome} possui {$carlos->idade} anos <br><br>";

# criação do objeto $conta_carlos

$conta_carlos = new Conta;
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = "CC.12 34.56";
$conta_carlos->DataDeCriacao = "10/07/02";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9876;
$conta_carlos->Saldo = 567.89;
$conta_carlos->Cancelada = false;

echo "\n";
echo "conta de: {$conta_carlos->Titular->nome} \n";
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} \n";

$conta_carlos->Depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} \n";

$conta_carlos->Depositar(10);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} \n";
?>