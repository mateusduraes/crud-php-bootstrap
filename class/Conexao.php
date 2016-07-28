<?php 

	class Conexao {
		private $conexao;

		function __construct(){
			$this->conexao = mysqli_connect("localhost", "root", "", "contatos");
		}

		public function getConexao(){
			return $this->conexao;
		}

	}
