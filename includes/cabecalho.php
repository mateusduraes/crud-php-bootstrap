<?php 
		require_once("class/Conexao.php");		
		require_once("dao/ContatoDAO.php");
		$conexao = new Conexao();
		$conexao = $conexao->getConexao();		
		$dao = new ContatoDAO($conexao);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda de Contatos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-links" aria-expanded="false">
				    	<span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>

				    <a class="navbar-brand" href="index.php">Agenda de Contatos</a>
			</div>

			<div class="collapse navbar-collapse" id="menu-links">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="formulario-adiciona.php">Adicionar Contato</a></li>
				</ul>
			</div>		
		</div> <!-- Container fluid -->
	</nav>

	<main class="container">
		<div class="row">