<?php
//CLASSE MODELO
class Contas
{
	var $numAge;
	var $numConta;
	var $nome;
	var $cpf;
	var $tipoConta;
	var $saldo;

function ExibeDados()
	{
		print "Número da Agência: ".$this->numAge. "<br>";
		print "Número da Conta: ".$this->numConta. "<br>";
		print "Nome do Correntista: ".$this->nome. "<br>";
		print "Saldo Atual: ".$this->saldo. "<br>";
	}
	
function Inserirdados()

{
	
	
}
}	
	
?>