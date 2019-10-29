<?php

include_once "Carrinhos.class.php";
include_once "Produtos.class.php";

$prod1 = new Produtos;
$prod2 = new Produtos;
$prod3 = new Produtos;

$prod1->codigo = 11;
$prod1->descProduto = "Cerveja Skol Lata";
$prod1->preco = 1.69;

$prod2->codigo = 12;
$prod2->descProduto = "Coca cola 1L";
$prod2->preco = 1.22;

$prod3->codigo = 13;
$prod3->descProduto = "Guaraná Antártica";
$prod3->preco = 1.20;

$carrinho = new Carrinhos;
$carrinho->IncluirItem($prod1);
$carrinho->IncluirItem($prod2);
$carrinho->IncluirItem($prod3);

echo "Total da Compra R$ ".$carrinho->FecharCompra()."<br>";
echo $carrinho->ExibeCarrinho();
	
?>