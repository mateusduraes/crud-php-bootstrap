<?php 
	require_once("class/Contato.php");

	class ContatoDAO {

		private $conexao;

		function __construct(mysqli $conexao){
			$this->conexao = $conexao;

		}

		public function adiciona(Contato $contato){
			$sql = "insert into contatos (nome, endereco, telefone, celular, descricao) values (?, ?, ?, ?, ?)";
			$stmt = $this->conexao->prepare($sql);
			$stmt->bind_param('sssss', $contato->getNome(), $contato->getEndereco(),
										$contato->getTelefone(), $contato->getCelular(),
										$contato->getDescricao());
			$stmt->execute();
		}

		public function getLista(){
			$sql = "select * from contatos";
			$resultSet = $this->conexao->query($sql);

			$contatos = array();

			if($resultSet->num_rows > 0){
				while($row = $resultSet->fetch_assoc()){
					$contato = $this->populaObjeto($row);
					array_push($contatos, $contato);
				}
			}


			return $contatos;
		}

		public function remove(Contato $contato){
			$sql = "delete from contatos where id = ?";
			$stmt = $this->conexao->prepare($sql);
			$stmt->bind_param('i', $contato->getId());
			$stmt->execute();
		}

		public function atualiza(Contato $contato){
			$sql = "update contatos set nome = ?, endereco = ?, telefone = ?, celular = ?, descricao = ? where id = ?";
			$stmt = $this->conexao->prepare($sql);
			$stmt->bind_param('sssssi', $contato->getNome(), $contato->getEndereco(),
										$contato->getTelefone(), $contato->getCelular(),
										$contato->getDescricao(), $contato->getId());
			$stmt->execute();
		}

		public function pesquisa($id){
			$sql = "select * from contatos where id = $id";
			$resultSet = $this->conexao->query($sql);

			$row = $resultSet->fetch_assoc();			
			$contato = $this->populaObjeto($row);
			
			return $contato;
		}

		private function populaObjeto($row){
			$nome = $row["nome"];
			$endereco = $row["endereco"];
			$telefone = $row["telefone"];
			$celular = $row["celular"];
			$descricao = $row["descricao"];
			$id = $row["id"];

			$contato =  new Contato($nome, $telefone, $celular, $endereco, $descricao);
			$contato->setId($id);
			return $contato;
		}

	}
