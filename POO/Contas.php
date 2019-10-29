<?php
//CLASSE DE CONTROLE

include_once "Contas.class.php";
include_once "Correntes.class.php";
include_once "Investimentos.class.php";


$conta = new Correntes;

$conta->numAge = 0215;
$conta->numConta = 13001023;
$conta->nome = "Jean Carlos da Silva";
$conta->saldo = 100.89;

$conta->ExibeDados();
echo '</br>';
$conta->depositar(20.30);
$conta->depositar(57.40);
$conta->depositar(1204.17);
$conta->sacar(1.10);
$conta->sacar(6.35);

$conta->ExibeDados();


?>