<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-produto.php");

	$id = $_POST['id'];
	removeProduto($conexao, $id);
	$_SESSION["success"] = "Produto removido com sucesso.";
	header ("Location: visualizar-produto.php");
	Die();
	?>
	

