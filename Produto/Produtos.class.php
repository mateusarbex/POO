<?php

class Produtos
{
	var $codigo;
	var $descProduto;
	var $preco;
	var $quantidade;

	function ListarDados()
	{
		echo "<br>";
		echo "Código.....: ".$this->codigo."<br>";
		echo "Descrição.....: ".$this->descProduto."<br>";
		echo "Preço R$.....: ".$this->preco."<br>";

	}
}
	
?>