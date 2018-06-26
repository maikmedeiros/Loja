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
	function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
			$query = "insert into PRODUTOS (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}',{$categoria_id},{$usado})";
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
	function alteraProdutos($conexao,$id,$nome, $preco, $descricao, $categoria_id, $usado){
		$query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado} where id = {$id}";
		echo $query;
		return mysqli_query($conexao, $query);
	}


 ?>

