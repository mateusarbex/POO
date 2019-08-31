<?php
require_once "IProduto.php";

class Produto implements IProduto {

	//Atributos
	private $idProduto;
	private $situacao = true;
	private $nome;
	private $gtin;
	private $ncm;
	private $precoCusto;
	private $precoVenda;
	private $precoPromo;
	private $pesoLiquido;
	private $pesoBruto;
	private $validade;
	private $condicao;
	private $largura;
	private $comprimento;
	private $altura;
	private $fabricante;
	private $categoria;
	private $estoque;
	private $unidade;






	//Setters

	public function setUnidade($unidade_parametro){
		$this->unidade = $unidade_parametro;
		return $this;
	}

	public function setIdProduto(int $idProduto_parametro){
		$this->idProduto = $idProduto_parametro;
		return $this;



	}


	public function setSituacao(bool $situacao_parametro){
		$this->situacao = !$situacao_parametro;
		return $this;

	}


	public function setNome($nome_parametro){
		$this->nome = $nome_parametro;
		return $this;


	}


	public function setGtin($gtin_parametro){
		$this->gtin = $gtin_parametro;
		return $this;

	}


	public function setNcm($ncm_parametro){
		$this->ncm = $ncm_parametro;
		return $this;


	}


	public function setPrecoCusto($precoCusto_parametro){
		$this->precoCusto = $precoCusto_parametro;
		return $this;


	}


	public function setPrecoVenda($precoVenda_parametro){
		$this->precoVenda = $precoVenda_parametro;
		return $this;


	}


	public function setPrecoPromo($precoPromo_parametro){
		$this->precoPromo = $precoPromo_parametro;
		return $this;


	}


	public function setPesoLiquido($pesoLiquido_parametro){
		$this->pesoLiquido = $pesoLiquido_parametro;
		return $this;


	}


	public function setPesoBruto($pesoBruto_parametro){
		$this->pesoBruto = $pesoBruto_parametro;
		return $this;


	}


	public function setValidade($validade_parametro){
		$this->validade = $validade_parametro;
		return $this;


	}


	public function setCondicao($condicao_parametro){
		$this->condicao = $condicao_parametro;
		return $this;


	}


	public function setLargura($largura_parametro){
		$this->largura = $largura_parametro;
		return $this;


	}


	public function setComprimento($comprimento_parametro){
		$this->comprimento = $comprimento_parametro;
		return $this;


	}


	public function setAltura($altura_parametro){
		$this->altura = $altura_parametro;
		return $this;


	}


	public function setFabricante($fabricanete_parametro){
		$this->fabricante = $fabricanete_parametro;
		return $this;


	}


	public function setCategoria($categoria_parametro){
		$this->categoria = $categoria_parametro;
		return $this;


	}


	public function setEstoque(int $estoque_parametro){
		$this->estoque = $estoque_parametro;
		return $this;


	}






	//Getters

	public function getUnidade(){

		return $this->unidade;
	}


	public function getIdProduto(){
		return $this->idProduto;


	}


	public function getSituacao(){
		return $this->situacao;


	}


	public function getNome(){
		return $this->nome;


	}


	public function getGtin(){
		return $this->gtin;


	}


	public function getNcm(){
		return $this->ncm;


	}


	public function getPrecoCusto(){
		return $this->precoCusto;


	}


	public function getPrecoVenda(){
		return $this->precoVenda;


	}


	public function getPrecoPromo(){
		return $this->precoPromo;


	}


	public function getPesoLiquido(){
		return $this->pesoLiquido;


	}


	public function getPesoBruto(){
		return $this->pesoBruto;


	}


	public function getValidade(){
		return $this->validade;


	}


	public function getCondicao(){
		return $this->condicao;


	}


	public function getLargura(){
		return $this->largura;


	}


	public function getComprimento(){
		return $this->comprimento;


	}


	public function getAltura(){
		return $this->altura;


	}


	public function getFabricante(){
		return $this->fabricante;


	}


	public function getCategoria(){
		return $this->categoria;


	}


	public function getEstoque(){
		return $this->estoque;


	}



}