<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-produto.php");

	$id = $_POST['id'];
	removeProduto($conexao, $id);
	
	header ("Location: visualizar-produto.php?removido = true");
	Die();
	?>
	

