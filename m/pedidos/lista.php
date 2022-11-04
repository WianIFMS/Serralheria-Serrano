
		<p style="background-color: green"><?php echo @$success; ?></p>
		<p style="background-color: red"><?php echo @$danger; ?></p>
		<p style="background-color: orange"><?php echo @$change; ?></p>
		<div class="table-responsive">
		 <table class="table table-striped table-sm">
		 	<thead>
			 	<tr>
			 		<th>Nome</th>		 		
			 		<th>Descriçao</th>		 		
			 		<th>Total R$</th>		 		
			 		<th>Entrada R$</th>
			 		<th>Falta receber R$</th>
			 		<th>Data do pedido</th>
			 		<th>Data presvista p/ entrega</th>
			 		<th>Status</th>

			 	</tr>
		 	</thead>
		 	<tbody>
		 	<?php  
		
			foreach ($vetorPedidos as $key => $value) {
				foreach ($vetorUsuarios as $key) {
				
				if ($value['id_usuario'] == $key['id']) {
					
				
			//var_dump($value);
		 ?>
		 	<tr>
		 		<td><?= $key['nome']?></td>	
		 	<?php } } ?>
		 		<td><?= $value['descricao']?></td>	 		
		 		<td><?= $value['valor_total']?></td>		 		
		 		<td><?= $value['valor_entrada']?></td>
		 		<td><?= $value['valor_falta_receber']?></td>
		 		<td><?= $value['data_pedido']?></td>
		 		<td><?= $value['data_entrega']?></td>
		 		<td><?= $value['status']?></td>
		 		<td>
		 			<form>
		 				<button class="btn btn-warning">
		 					<svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  					<path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z"/>
	  					<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd"/>
						</svg></button>
			 			
					</form>	
		 		</td>
		 		<td>
		 			<form method="post" action="pedidos/adm.php">
		 				<input type="hidden" name="op" value="del">
		 				<input type="hidden" name="id" value="<?= $value['id']?>">
		 				<button class="btn btn-danger">
		 					<svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  							<path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/>
  							<path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
</svg>
		 				</button>
		 			</form>
		 		</td>
		 		<?php if ($value['status'] != "feito") {
		 			if ($value['status'] != "solicitado") {
		 		?>
		 		<td>
		 			<form method="post" action="form_clientes.php">	 				
		 				<input type="hidden" name="id" value="<?= $value['id']?>">
		 				<button value="submit" class="btn btn-success">Iniciado</button>
		 			</form>
		 		</td>
		 		<?php }?>

		 		<td>
		 			<form method="post" action="pedidos/adm.php">
		 				<input type="hidden" name="status" value="feito">
		 				<input type="hidden" name="id" value="<?= $value['id']?>">
		 				<button value="submit" class="btn btn-success"><svg class="bi bi-check-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  						<path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
 						 <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1013.5 8a.5.5 0 011 0 6.5 6.5 0 11-3.25-5.63.5.5 0 11-.5.865A5.472 5.472 0 008 2.5z" clip-rule="evenodd"/>
						</svg></button>
		 			</form>
		 		</td>
		 	<?php }?>
		 	</tr>
		 <?php } ?>
		 </tbody>
		 </table>
		</div>
