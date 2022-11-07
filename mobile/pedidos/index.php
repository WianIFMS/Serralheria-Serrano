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
$sql= "SELECT * FROM clientes";
$resultadosql = $conexao->query($sql);
$vetorUsuarios = $resultadosql->fetch_all(MYSQLI_ASSOC);

//Inicio codigo do campo pesquisar
$sql= "SELECT * FROM pedidos";
$resultadosql = $conexao->query($sql);
$vetorPedidos = $resultadosql->fetch_all(MYSQLI_ASSOC);

if (isset($_POST['pesquisar'])) {

	$pesquisar = $_POST['pesquisar'];
	$pesquisaLike ="%" .$pesquisar. "%";
	$sql = "SELECT * from pedidos where id like ? order by id limit 1";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("s",$pesquisaLike);
	$sqlprep->execute();
	$resultadoSql = $sqlprep->get_result();

}else{
$pesquisar = "";
$sql = "SELECT * from pedidos order by id";
$resultadoSql = $conexao->query($sql);

}
$vetorPedidos = $resultadoSql->fetch_all(MYSQLI_ASSOC);

?>
<!--Fim codigo do campo pesquisar-->

    <div class="container">
    	
			<div>
			
			<?php 
				$valor = @$_GET['p'] ;
			if ($valor == 'cadastro'){ 
				require_once 'form_pedidos.php';
			 }
			 else{ 
				 require_once 'lista.php'; 
			 } 
			 ?>
			

			</div>

		</div>	
