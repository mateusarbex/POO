<?php

include_once "Revistas.class.php";
include_once "Edicoes.class.php";

//Instanciando uma nova Revistas
	
	$revista = new Revistas;
	$revista->titulo = "Harry Potter";
	$revista->tipo = "Ficção";

	//Inserindo informações da edição

	$revista->SetEdicao(1,"10/10/2005",11);

	//Exibindo os dados

	echo "Revista: ". $revista->titulo."Tipo de Publicação".$revista->tipo."<br>";
	echo "informações de edição<br>";
	echo $revista->GetEdicao();
?>