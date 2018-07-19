<?php 
	include("conecta.php");

	// SELECIONAR PRODUTOS DO BANCO
	function listaProduto($conexao){
		$produtos = array();
		$resultado = mysqli_query ($conexao, "select pp.*, cc.nome as categoria_nome from produtos as pp join categorias as cc on pp.categoria_id = cc.id");
		while($produto = mysqli_fetch_assoc($resultado)){
			array_push($produtos, $produto);

		}
				return $produtos;
	}

	// INSERIR PRODUTO NO BANCO 
	function insereProduto($conexao, Produto $produto){
			$query = "insert into PRODUTOS (nome, preco, descricao, categoria_id, usado) values ('{$produto->nome}', {$produto->preco}, '{$produto->descricao}',{$produto->categoria_id},{$produto->usado})";
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
		return mysqli_fetch_assoc($resultado);
	}

	//UPDATE PRODUTOS
	function alteraProdutos($conexao,Produto $produto){
		$query = "update produtos set nome = '{$produto->nome}', preco = {$produto->preco}, descricao = '{$produto->descricao}', categoria_id = {$produto->categoria_id}, usado = {$produto->usado} where id = {$produto->id}";
		echo $query;
		return mysqli_query($conexao, $query);
	}


 ?>

