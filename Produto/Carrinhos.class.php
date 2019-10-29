<?php

	class Carrinhos{
	private $itens;
	//Incluir itens no Carrinhos

	function IncluirItem(Produtos $item){
		$this->itens[] = $item;
	}

	//Exbibir os produtos do Carrinhos
	function ExibeCarrinho(){
	
		foreach($this->itens as $item)
		{
			$item->ListarDados();
		}
	}
	//Calcula o total do Carrinhos
	function FecharCompra()
	{
		$total = 0;
		foreach($this->itens as $item)
		{
			$total+=$item->preco;
		}
		return $total;
		}
	}
	
?>