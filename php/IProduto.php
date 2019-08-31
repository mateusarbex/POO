<?php

interface IProduto {

	//metodos	

	//Setters
	public function setIdProduto(int $idProduto_parametro);
	public function setSituacao(bool $situacao_parametro);
	public function setNome($nome_parametro);
	public function setGtin($gtin_parametro);
	public function setNcm($ncm_parametro);
	public function setPrecoCusto($precoCusto_parametro);
	public function setPrecoVenda($precoVenda_parametro);
	public function setPrecoPromo($precoPromo_parametro);
	public function setPesoLiquido($pesoLiquido_parametro);
	public function setPesoBruto($pesoBruto_parametro);
	public function setValidade($validade_parametro);
	public function setCondicao($condicao_parametro);
	public function setLargura($largura_parametro);
	public function setComprimento($comprimento_parametro);
	public function setAltura($altura_parametro);
	public function setFabricante($fabricante_parametro);
	public function setCategoria($categoria_parametro);
	public function setEstoque(int $estoque_parametro);


	//Getters
	public function getIdProduto();
	public function getSituacao();
	public function getNome();
	public function getGtin();
	public function getNcm();
	public function getPrecoCusto();
	public function getPrecoVenda();
	public function getPrecoPromo();
	public function getPesoLiquido();
	public function getPesoBruto();
	public function getValidade();
	public function getCondicao();
	public function getLargura();
	public function getComprimento();
	public function getAltura();
	public function getFabricante();
	public function getCategoria();
	public function getEstoque();
}