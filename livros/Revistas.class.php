<?php
class Revistas
{
	var $codigo;
	var $titulo;
	var $tipo;
	var $edicao;

//método construtor será responsável por instanciar
//um objeto parte da classe edições

function __construct()
	{
		$this->edicao = new Edicoes;
	}

//gravar edicao
function SetEdicao ($numEdicao, $dataEdicao, $numArtigos)
{
	$this->edicao->SetEdicao($numEdicao, $dataEdicao, $numArtigos);
}
//retorna edicao
function GetEdicao()
{
	return $this->edicao->GetEdicao();
}
}
	
?>