<?php 
	require_once("cabecalho.php");
	require_once("banco-produto.php");
	require_once("logica-usuario.php");
  
  $produtoDAO = new ProdutoDAO($conexao);  

	$id = $_POST['id'];
	$produtoDAO->removeProduto($id);
	$_SESSION["success"] = "Produto removido com sucesso.";
	header ("Location: visualizar-produto.php");
	die();
	?>
	

