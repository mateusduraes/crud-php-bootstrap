<?php 
	include "includes/cabecalho.php";
?>

	
	<h1 class="text-center">Adiciona Contato</h1>
	<form action="adiciona.php" method="post">
		<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
			<div class="form-group">
				<label for="input-nome">Nome:</label>
				<input type="text" name="nome" class="form-control" id="input-nome" />					
			</div>
			<div class="form-group">
				<label for="input-celular">Celular:</label>
				<input type="text" name="celular" class="form-control" id="input-celular" />						
			</div>
			<div class="form-group">
				<label for="input-telefone">Telefone:</label>
				<input type="text" name="telefone" class="form-control" id="input-telefone" />
			</div>
			<div class="form-group">
				<label for="input-endereco">Endereço:</label>
				<input type="text" name="endereco" class="form-control" id="input-endereco" />					
			</div>
			<div class="form-group">
				<label for="input-descricao">Descrição:</label>
				<textarea name="descricao" id="" cols="30" rows="3" class="form-control" id="input-descricao" ></textarea>	
			</div>

			<button class="btn btn-success" aria-label="Left Align">
				Gravar Contato
				<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
			</button>
		</div>
	</form>


<?php 
 	include "includes/rodape.php";
?>