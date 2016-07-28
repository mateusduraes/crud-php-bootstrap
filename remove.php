<?php 

require_once("class/Contato.php");
require_once("class/Conexao.php");
require_once("dao/ContatoDAO.php");

$contato = new Contato(null, null, null, null, null);
$contato->setId($_POST["id"]);
$conexao = new Conexao();
$conexao = $conexao->getConexao();
$dao = new ContatoDAO($conexao);
$dao->remove($contato);

header('Location: index.php');
die();

