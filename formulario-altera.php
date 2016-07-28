<?php 
	include "includes/cabecalho.php";
	$contato = $dao->pesquisa($_GET['id']);
?>


	<h1 class="text-center">Atualizar Contato</h1>
	
	<form action="altera.php" method="post">
		<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
			<input type="hidden" name="id" value="<?=$contato->getId()?>" />
			<div class="form-group">
				<label for="input-nome">Nome:</label>
				<input type="text" name="nome" class="form-control" id="input-nome" value="<?=$contato->getNome()?>"/>		
			</div>
			<div class="form-group">
				<label for="input-celular">Celular:</label>
				<input type="text" name="celular" class="form-control" id="input-celular" value="<?=$contato->getCelular()?>" />						
			</div>
			<div class="form-group">
				<label for="input-telefone">Telefone:</label>
				<input type="text" name="telefone" class="form-control" id="input-telefone" value="<?=$contato->getTelefone()?>" />
			</div>
			<div class="form-group">
				<label for="input-endereco">Endereço:</label>
				<input type="text" name="endereco" class="form-control" id="input-endereco" value="<?=$contato->getEndereco()?>" />					
			</div>
			<div class="form-group">
				<label for="input-descricao">Descrição:</label>
				<textarea name="descricao" id="" cols="30" rows="3" class="form-control" id="input-descricao"><?=$contato->getDescricao()?></textarea>	
			</div>

			<button class="btn btn-success" aria-label="Left Align">
				Atualizar Contato
				<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
			</button>
		</div>
	</form>

 <?php 
 	include "includes/rodape.php";
  ?>