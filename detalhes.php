<?php 
	include "includes/cabecalho.php"; 
	$contato = $dao->pesquisa($_GET['id']);	
?>

	<div class="jumbotron">
		<h3 class="text-center"><?=$contato->getNome()?></h3>
	</div>
	

	<div class="col-md-6 col-sm-6">
		<h4><b>Descrição</b></h4>
		<p><?=$contato->getDescricao()?></p>
	</div>

	<div class="col-md-6 col-sm-6">
		<h4><b>Informações</b></h4>
		<p><b>Celular:</b> <?=$contato->getCelular()?></p>
		<p><b>Telefone:</b> <?=$contato->getTelefone()?></p>
		<p><b>Endereço:</b> <?=$contato->getEndereco()?></p>
	</div>

	<div class="text-center">
			<form action="remove.php" method="post" id="botao-remover">
					<input type="hidden" value="<?=$contato->getId()?>" name="id"/>
					<button class="btn btn-danger" aria-label="Left Align"> Remover
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
					</button>
			</form>			
			<a class="btn btn-primary" href="formulario-altera.php?id=<?=$contato->getId()?>">
				Atualizar
				<span class="glyphicon glyphicon-pencil "></span>
			</a>
	</div>
	

<?php include "includes/rodape.php" ?>