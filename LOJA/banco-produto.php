<?php 
	require_once("conecta.php");
  	require_once("class/Produto.php");
  	require_once("class/Categoria.php");

	// SELECIONAR PRODUTOS DO BANCO
	function listaProduto($conexao){
		
    $produtos = array();
    
	  $resultado = mysqli_query ($conexao, "select pp.*, cc.nome as categoria_nome from produtos as pp join categorias as cc on pp.categoria_id = cc.id");
	  while($produtos_array = mysqli_fetch_assoc($resultado)){
      
      
      $categoria = new Categoria();
      $categoria->nome = $produtos_array["categoria_nome"];
      
      $produto = new Produto();
      $produto->id = $produtos_array["id"];
      $produto->nome = $produtos_array["nome"];
      $produto->preco = $produtos_array["preco"];
      $produto->descricao = $produtos_array["descricao"];
      $produto->categoria = $categoria;
      $produto->usado = $produtos_array["usado"];
      
      array_push($produtos, $produto);

		}
		return $produtos;
	}

	// INSERIR PRODUTO NO BANCO 
	function insereProduto($conexao, Produto $produto){
			$query = "insert into PRODUTOS (nome, preco, descricao, categoria_id, usado) values ('{$produto->nome}', {$produto->preco}, '{$produto->descricao}',{$produto->categoria->id},{$produto->usado})";
			echo $query;
			return  mysqli_query($conexao, $query);
	}

	//DELETAR PRODUTO 
	function removeProduto($conexao, $id){

		$query = "delete from produtos where id = {$id}";
		return mysqli_query($conexao, $query);
	}

	// SELECIO OS PRODUTOS PARA ALTERALOS
	function buscaProduto($conexao, $id){
		
		$query = "select * from produtos where id = {$id}";
    	$resultado = mysqli_query($conexao, $query);
		$produto_buscado = mysqli_fetch_assoc($resultado);	
		
   		$categoria = new Categoria();
    	$categoria->id = $produto_buscado['categoria_id'];
    
    
    	$produto = new Produto();
    
     	$produto->id = $produto_buscado["id"];
      	$produto->nome = $produto_buscado["nome"];
      	$produto->preco = $produto_buscado["preco"];
      	$produto->descricao = $produto_buscado["descricao"];
      	$produto->categoria = $categoria;
      	$produto->usado = $produto_buscado["usado"];
      
    	return $produto;
	}

	//UPDATE PRODUTOS
	function alteraProdutos($conexao,Produto $produto){
		$query = "update produtos set nome = '{$produto->nome}', preco = {$produto->preco}, descricao = '{$produto->descricao}', categoria_id = {$produto->categoria->id}, usado = {$produto->usado} where id = {$produto->id}";
		echo $query;
		return mysqli_query($conexao, $query);
	}


 ?>

