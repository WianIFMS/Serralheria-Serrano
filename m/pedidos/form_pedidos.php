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

//Inicio codigo do campo pesquisar
$sql= "SELECT * FROM clientes";
$resultadosql = $conexao->query($sql);
$vetorUsuarios = $resultadosql->fetch_all(MYSQLI_ASSOC);

if (isset($_POST['pesquisar'])) {

	$pesquisar = $_POST['pesquisar'];
	$pesquisaLike ="%" .$pesquisar. "%";
	$sql = "SELECT * from clientes where nome like ? order by nome limit 1";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("s",$pesquisaLike);
	$sqlprep->execute();
	$resultadoSql = $sqlprep->get_result();

}else{
$pesquisar = "";
$sql = "SELECT * from clientes order by nome";
$resultadoSql = $conexao->query($sql);

}
$vetorUsuarios = $resultadoSql->fetch_all(MYSQLI_ASSOC);

?>
<!--Fim codigo do campo pesquisar-->

		<div class="container">
			<h1>Novo pedido</h1>
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

					
				<button onclick="window.location.href='clientes/form_clientes.php'">Novo usuario</button>
				<script type="text/javascript">

					function pegarValor() {		
					
					
					let valortotal = document.getElementById('valortotal').value;
					let valorentrada = document.getElementById('valorentrada').value;
					if (valortotal != null && valorentrada != null ) {
					 document.getElementById('valor').value = valortotal - valorentrada;
					}
				}
				</script>
			<form method="post" action="pedidos/adm.php" class="form-group">
				<label  for="nome">Nome</label>
				<select name="id_usuario" id="nome" class="form-control">
					<?php foreach ($vetorUsuarios as $key => $value) { 

					?>
					<option value="<?= $value['id']?>"><?= $value['nome']?></option>

					<?php }	?>

				</select>
				<label for="valortotal">Valor total</label>
				<input type="number" id="valortotal" name="valor_total" placeholder="R$: 00,00"  class="form-control" onfocus="pegarValor()">
				<label for="valorentrada">Valor de entrada</label>
				<input type="number" id="valorentrada" name="valor_entrada"  class="form-control" placeholder="R$: 00,00" onmouseleave="pegarValor()">
				
				<label for="valor">Valor falta receber</label>
				<input type="number" readonly="true" id="valor" name="valor_falta_receber"  class="form-control"  >
				<label for="dataentrega">Data para entrega</label>
				<input type="date" name="data_entrega"  class="form-control">
				
				<label for="descricao">Descrição do pedido</label>
				<textarea name="descricao" id="descricao" class="form-control"></textarea>
				
				<button type="submit" class="btn btn-success">SALVAR</button>
			</form>

		</div>
	