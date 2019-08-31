<?php
require_once "IProduto.php";
require_once "IBanco.php";

class CrudProduto {
	//Atributos
	private $banco;
	private $produto;

	//Metodos

	//Construtor
	public function __construct (IBanco $banco, IProduto $produto){
		$this->banco = $banco->connect();
		$this->produto = $produto;
	}


	public function save(){
		
		$sql = "INSERT INTO `produto` (
		`id_produto`,
		`situacao`,
		`produto`,
		`gtin`,
		`ncm`,
		`preco_custo`,
		`preco_venda`,
		`preco_promo`,
		`peso_liquido`,
		`peso_bruto`,
		`validade`,
		`condicao`,
		`largura`,
		`comprimento`,
		`altura`,
		`unidade`,
		`fabricante`,
		`categoria`,
		`estoque`) VALUES (:id_produto, :situacao,:nome,:gtin,:ncm,:preco_custo,:preco_venda,:preco_promo,:peso_liquido,:peso_bruto,:validade,:condicao,:largura,:comprimento,:altura,:fabricante,:categoria, :estoque, :unidade)";

		$stmt = $this->banco->prepare($sql);

		$stmt->bindValue(':id_produto', $this->produto->getIdProduto());
		$stmt->bindValue(':situacao', $this->produto->getSituacao());
		$stmt->bindValue(':nome', $this->produto->getNome());
		$stmt->bindValue(':gtin', $this->produto->getGtin());
		$stmt->bindValue(':ncm', $this->produto->getNcm());
		$stmt->bindValue(':preco_custo', $this->produto->getPrecoCusto());
		$stmt->bindValue(':preco_venda', $this->produto->getPrecoVenda());
		$stmt->bindValue(':preco_promo', $this->produto->getPrecoPromo());
		$stmt->bindValue(':peso_liquido', $this->produto->getPesoLiquido());
		$stmt->bindValue(':peso_bruto', $this->produto->getPesoBruto());
		$stmt->bindValue(':validade', $this->produto->getValidade());
		$stmt->bindValue(':condicao', $this->produto->getCondicao());
		$stmt->bindValue(':largura', $this->produto->getLargura());
		$stmt->bindValue(':comprimento', $this->produto->getComprimento());
		$stmt->bindValue(':altura', $this->produto->getAltura());
		$stmt->bindValue(':fabricante', $this->produto->getFabricante());
		$stmt->bindValue(':categoria', $this->produto->getCategoria());
		$stmt->bindValue(':estoque', $this->produto->getEstoque());
		$stmt->bindValue(':unidade', $this->produto->getUnidade());

		$resultado = $stmt->execute();

		if(!$resultado){
			echo "<pre>";
				print_r($stmt->errorInfo());
			echo "</pre>";
			return false;
		} else {
			return $this->banco->lastInsertId();
		}

	
	


	}


	public function delete(int $id){
		//sei que não precisa validar. 
		$id = filter_var($id, FILTER_VALIDATE_INT);

		if($id === 0 && !is_int($id) && $id <= 0 && !$id){
			return false;
		}

		$query = "DELETE FROM `produto` where id_produto = :id";
		$stmt = $this->banco->prepare($query);
		$stmt->bindValue(':id', $id);
		$resultado = $stmt->execute();
		if(!$resultado){
			echo "<pre>";
				print_r($stmt->errorInfo());
			echo "</pre>";
			return false;
		} else {
			return $stmt->rowCount();
		}
	}


	public function update(){
		//sei que não precisa validar. 		
		$id = filter_var($this->produto->getIdProduto(), FILTER_VALIDATE_INT);
		if($id === 0 && !is_int($id) && $id <= 0 && !$id){
			return false;
		}

		$sql = "UPDATE `produto` set `situacao` = :situacao, `produto` = :nome, `gtin` = :gtin, `ncm` = :ncm, `preco_custo` = :preco_custo, `preco_venda` = :preco_venda, `preco_promo` = :preco_promo, `peso_liquido` = :peso_liquido, `peso_bruto` = :peso_bruto, `validade` = :validade, `condicao` = :condicao, `largura` = :largura, `comprimento` = :comprimento, `altura` = :altura, `fabricante` = :fabricante, `categoria` = :categoria, `estoque` = :estoque, `unidade` = :unidade where `id_produto` = :id_produto";

		$stmt = $this->banco->prepare($sql);

		$stmt->bindValue(':id_produto', $this->produto->getIdProduto());
		$stmt->bindValue(':situacao', $this->produto->getSituacao());
		$stmt->bindValue(':nome', $this->produto->getNome());
		$stmt->bindValue(':gtin', $this->produto->getGtin());
		$stmt->bindValue(':ncm', $this->produto->getNcm());
		$stmt->bindValue(':preco_custo', $this->produto->getPrecoCusto());
		$stmt->bindValue(':preco_venda', $this->produto->getPrecoVenda());
		$stmt->bindValue(':preco_promo', $this->produto->getPrecoPromo());
		$stmt->bindValue(':peso_liquido', $this->produto->getPesoLiquido());
		$stmt->bindValue(':peso_bruto', $this->produto->getPesoBruto());
		$stmt->bindValue(':validade', $this->produto->getValidade());
		$stmt->bindValue(':condicao', $this->produto->getCondicao());
		$stmt->bindValue(':largura', $this->produto->getLargura());
		$stmt->bindValue(':comprimento', $this->produto->getComprimento());
		$stmt->bindValue(':altura', $this->produto->getAltura());
		$stmt->bindValue(':fabricante', $this->produto->getFabricante());
		$stmt->bindValue(':categoria', $this->produto->getCategoria());
		$stmt->bindValue(':estoque', $this->produto->getEstoque());
		$stmt->bindValue(':unidade', $this->produto->getUnidade());

		$resultado = $stmt->execute();

		if(!$resultado){
			echo "<pre>";
				print_r($stmt->errorInfo());
			echo "</pre>";
			return false;		
		} else {
			return $resultado;
		}

	}


	public function list(){
		$sql = "SELECT * FROM `produto`";

		$stmt = $this->banco->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}



	public function find(int $id){
		//sei que não precisa validar. 
		$id = filter_var($id, FILTER_VALIDATE_INT);
		$sql = "SELECT * FROM `produto` where id_produto = :id";

		$stmt = $this->banco->prepare($sql);
		$stmt->bindValue(':id', $id);
		$resultado = $stmt->execute();
		if(!$resultado){
			echo "<pre>";
				print_r($stmt->errorInfo());
			echo "<;pre>";
			return false;
		} else {
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}

	}

}