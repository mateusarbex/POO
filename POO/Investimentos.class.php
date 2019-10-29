<?php

	class Investimentos extends Contas
	{
		var $tipoInvestimento;
		
		function sacar($valor)
		
		{
			if ($valor <= $this->saldo)
			{
				$this->saldo -+ $valor;
			}
		}
	}
	
?>