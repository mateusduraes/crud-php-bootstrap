<?php 

require_once("class/Contato.php");
require_once("class/Conexao.php");
require_once("dao/ContatoDAO.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
$descricao = $_POST['descricao'];
$contato = new Contato($nome, $telefone, $celular, $endereco, $descricao);


$conexao = new Conexao();
$conexao = $conexao->getConexao();

$dao = new ContatoDAO($conexao);
$dao->adiciona($contato);

header('Location: index.php');
die();

