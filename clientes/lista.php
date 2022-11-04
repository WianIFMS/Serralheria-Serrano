
		<p style="background-color: green"><?php echo @$success; ?></p>
		<p style="background-color: red"><?php echo @$danger; ?></p>
		<p style="background-color: orange"><?php echo @$change; ?></p>
		 <div class="table-responsive">
			 <table class="table table-striped table-sm">
			 	<thead>
				 	<tr>
				 		<th>Nome</th>		 		
				 		<th>Telefone</th>		 		
				 		<th>Endereco</th>		 		
				 		<th>Editar</th>
				 		<th>Excluir</th>
				 	</tr>
			 	</thead>
			 	<tbody>
			 	<?php  
			
				foreach ($vetorUsuarios as $key => $value) {
				//var_dump($value);
			 ?>
			 	<tr>
			 		<td><?= $value['nome']?></td>		 		
			 		<td><?= $value['telefone']?></td>		 		
			 		<td><?= $value['endereco']?></td>
			 		<td>
			 			<form method="post" action="clientes/form_clientes.php">	 				
			 				<input type="hidden" name="id" value="<?= $value['id']?>">
			 				<button value="submit" class="btn btn-success">EDITAR</button>
			 			</form>
			 		</td>
			 		<td>
			 			<form method="post" action="adm.php">
			 				<input type="hidden" name="op" value="del">
			 				<input type="hidden" name="id" value="<?= $value['id']?>">
			 				<button value="submit" class="btn btn-danger">EXCLUIR</button>
			 			</form>
			 		</td>
			 	</tr>
			 	<?php } ?>
			 	</tbody>
			 </table>
			</div> 
