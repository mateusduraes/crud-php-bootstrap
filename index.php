<?php 
	include "includes/cabecalho.php";
?>


	<?php 
		$contatos = $dao->getLista();
	?>
			<div class="jumbotron">
				<h1 class="text-center">Agenda de Contatos</h1>
			</div>
		<?php if (sizeof($contatos) > 0): ?>		
			<table class="table">
				<thead>
					<tr>
						<th>Editar</th>
						<th>Nome</th>
						<th>Celular</th>
						<th>Telefone</th>
						<th>Endereco</th>
						<th>Remover</th>
					</tr>
				</thead>
				<tbody>					
					<?php foreach ($contatos as $contato): ?>
						<tr>
							<td>
								<a href="formulario-altera.php?id=<?=$contato->getId()?>"><span class="glyphicon glyphicon-pencil btn btn-primary"></span></a>
							</td>
							<td> <a href="detalhes.php?id=<?=$contato->getId()?>"><?=$contato->getNome()?></a> </td>
							<td> <?=$contato->getCelular()?> </td>
							<td> <?=$contato->getTelefone()?> </td>
							<td> <?=$contato->getEndereco()?> </td>	
							<td>
								<form action="remove.php" method="post">
									<input type="hidden" value="<?=$contato->getId()?>" name="id"/>
									<button class="btn btn-danger" aria-label="Left Align">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</form>
							</td>
						</tr>	
					<?php endforeach ?>					
				</tbody>
			</table>
		<?php else: ?>
			<div class="text-center">
				<h3>Parece que você ainda não tem nenhum contato cadastrado.</h3>
				<p>Clique <a href="formulario-adiciona.php">aqui</a> e cadastre um novo contato.</p>
			</div>
		<?php endif ?>
		


 <?php include "includes/rodape.php" ?>