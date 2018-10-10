<?php

  class ProdutoDAO{
    
      private $conexao;
     
	  function __construct($conexao){
	      $this->conexao = $conexao;
	  }


	// SELECIONAR PRODUTOS DO BANCO
	function listaProduto(){
		
    $produtos = array();
    
	  $resultado = mysqli_query($this->conexao,"select pp.*, cc.nome as categoria_nome from produtos as pp join categorias as cc on pp.categoria_id = cc.id");
	 
	  while($produtos_array = mysqli_fetch_assoc($resultado)){

      
      $categoria = new Categoria();
      $categoria->setNome($produtos_array["categoria_nome"]);
      
      $produto = new Produto();
      $produto->setId($produtos_array['id']);
      $produto->setNome($produtos_array['nome']);
      $produto->setPreco($produtos_array['preco']);
      $produto->setDescricao($produtos_array['descricao']);
      $produto->setCategoria($categoria);
	  $produto->setUsado($produtos_array['usado']);
	  $produto->setPlaca($produtos_array["placa"]);
	  $produto->setTipoVeiculo($produtos_array["tipoVeiculo"]); 
      
      array_push($produtos, $produto);

		}
		return $produtos;
	}

	// INSERIR PRODUTO NO BANCO 
	function insereProduto(Produto $produto){
			$query = "insert into PRODUTOS (nome, preco, descricao, categoria_id, usado, placa, tipoVeiculo) values ('{$produto->getNome()}', {$produto->getPreco()}, '{$produto->getDescricao()}',{$produto->getCategoria()->getId()},{$produto->getUsado()},'{$produto->getPlaca()}','{$produto->getTipoVeiculo()}')";
			echo $query;
			return  mysqli_query($this->conexao, $query);
	}

	//DELETAR PRODUTO 
	function removeProduto($id){

		$query = "delete from produtos where id = {$id}";
		return mysqli_query($this->conexao, $query);
	}

	// SELECIOBAR OS PRODUTOS PARA ALTERALOS
	function buscaProduto($id){
		
		$query = "select * from produtos where id = {$id}";
    	$resultado = mysqli_query($this->conexao, $query);
		$produto_buscado = mysqli_fetch_assoc($resultado);	
		
   		$categoria = new Categoria();
    	$categoria->setId($produto_buscado['categoria_id']);
    
    
    	$produto = new Produto();
    
      	$produto->setId($produto_buscado["id"]);
      	$produto->setNome($produto_buscado["nome"]);
      	$produto->setPreco($produto_buscado["preco"]);
      	$produto->setDescricao($produto_buscado["descricao"]);
      	$produto->setCategoria($categoria);
		$produto->setUsado($produto_buscado["usado"]);
		$produto->setPlaca($produto_buscado["placa"]);
		$produto->setTipoVeiculo($produto_buscado["tipoVeiculo"]); 
      
    	return $produto;
	}

	//UPDATE PRODUTOS
	function alteraProdutos(Produto $produto){
		$query = "update produtos set nome = '{$produto->getNome()}', preco = {$produto->getPreco()}, descricao = '{$produto->getDescricao()}', categoria_id = {$produto->getCategoria()->getId()}, usado = {$produto->getUsado()} where id = {$produto->getId()}";
		echo $query;
		return mysqli_query($this->conexao, $query);
	}

    
  }
?>