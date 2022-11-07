<?php 

require_once 'conexao/conexao.php';
if (isset($_GET['success'])) {
	$success = $_GET['success'];
}
if (isset($_GET['danger'])) {
	$danger= $_GET['danger'];
}
if (isset($_GET['change'])) {
	$change= $_GET['change'];
}
?>

		<div class="container">
			<h1>Novo produto</h1>
			<?php  

			if (isset($_POST['id'])) {
				$id= $_POST['id'];
			}else{
			$id = 0;

			}
			$sql = "SELECT * FROM clientes where id=?";
			$sqlprep = $conexao->prepare($sql);
			$sqlprep->bind_param("i",$id);
			$sqlprep->execute();
			$resultadoSql = $sqlprep->get_result();
			$value = $resultadoSql->fetch_assoc();

			?>	


			<form method="post" action="produtos/adm.php" class="form-group">
				<input type="hidden" name="id">
				<label  for="descricao">Descrição</label>
				<input name="descricao" id="descricao" class="form-control">
				
				
				<label for="valor">Valor</label>
				<input type="text"  id="valor" name="valor"  class="form-control"  >
								
				<button type="submit" class="btn btn-success">SALVAR</button>
			</form>

		</div>
	