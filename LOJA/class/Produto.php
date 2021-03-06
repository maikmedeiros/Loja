<?php
  class Produto {
      
	    private $id;
	    private $nome;
	    private $preco;
	    private $descricao;
	    private $categoria;
		private $usado;
		private $placa;
		private $tipoVeiculo;
	    //Função - Para aplicar desconto
	    public function desconto($valor){
	    	if ($valor > 0 && $valor <= 0.5){
	    	$this->preco -= $this->preco * $valor;
	    		}
	    	return $this->preco;
	    }
		// Funções GETS e SETS
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function setPreco($preco){
			$this->preco = $preco;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function getCategoria(){
			return $this->categoria;
		}

		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}

		public function getUsado(){
			return $this->usado;
		}

		public function setUsado($usado){
			$this->usado = $usado;
		}

		public function getPlaca(){
			return $this->placa;
		}

		public function setPlaca($placa){
			$this->placa = $placa;
		}

		public function getTipoVeiculo(){
			return $this->tipoVeiculo;
		}

		public function setTipoVeiculo($tipoVeiculo){
			$this->tipoVeiculo = $tipoVeiculo;
		}

	}

?>