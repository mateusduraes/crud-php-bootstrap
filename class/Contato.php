<?php 
	class Contato {

		private $id;
		private $nome;
		private $telefone;
		private $celular;
		private $endereco;
		private $descricao;

		function __construct($nome, $telefone, $celular, $endereco, $descricao){
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->celular = $celular;
			$this->endereco = $endereco;
			$this->descricao = $descricao;
		}

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

		public function getTelefone(){
			return $this->telefone;
		}

		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}

		public function getCelular(){
			return $this->celular;
		}

		public function setCelular($celular){
			$this->celular = $celular;
		}

		public function getEndereco(){
			return $this->endereco;
		}

		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

	}

