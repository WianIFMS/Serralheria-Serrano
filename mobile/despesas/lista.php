
	

		<p style="background-color: green"><?php echo @$success; ?></p>
		<p style="background-color: red"><?php echo @$danger; ?></p>
		<p style="background-color: orange"><?php echo @$change; ?></p>
		 <div class="table-responsive">

			 <table class="table table-striped table-sm">
			 	<thead>
				 	<tr>
				 		<th>Foto</th>		 		
				 		<th>Deescrição</th>		 		
				 		<th>Data Inicio</th>
				 		<th>Vencimento</th>	
				 		<th>Total R$</th>	 		
				 		
				 	</tr>
			 	</thead>
			 	<tbody>
			 	<?php  
			
				foreach ($vetorDespesas as $key => $value) {
				//var_dump($value);
			 ?>
			 	<tr>
			 		<td></td>		 		
			 		<td><?= $value['descricao']?></td>		 		
			 		<td><?= $value['data_cadastro']?></td>
			 		<td><?= $value['vencimento']?></td>
			 		<td><?= $value['total']?></td>
			 		<td>
			 			<form method="post" action="form_clientes.php">	 				
			 				<input type="hidden" name="id" value="<?= $value['id']?>">
			 				<button value="submit" class="btn btn-success">EDITAR</button>
			 			</form>
			 		</td>
			 		<td>
			 			<form method="post" action="despesas/adm.php">
			 				<input type="hidden" name="op" value="del">
			 				<input type="hidden" name="id" value="<?= $value['id']?>">
			 				<button value="submit" class="btn btn-danger"><ion-icon name="archive-outline"></ion-icon></button>
			 			</form>
			 		</td>
			 	</tr>
			 	<?php } ?>
			 	</tbody>
			 </table>
			</div> 
