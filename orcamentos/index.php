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
$sql= "SELECT * FROM produtos";
$resultadosql = $conexao->query($sql);
$vetorProdutos = $resultadosql->fetch_all(MYSQLI_ASSOC);

if (isset($_POST['pesquisar'])) {

	$pesquisar = $_POST['pesquisar'];
	$pesquisaLike ="%" .$pesquisar. "%";
	$sql = "SELECT * from produtos where descricao like ? order by id limit 1";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("s",$pesquisaLike);
	$sqlprep->execute();
	$resultadoSql = $sqlprep->get_result();

}else{
$pesquisar = "";
$sql = "SELECT * from produtos order by id";
$resultadoSql = $conexao->query($sql);

}
$vetorProdutos = $resultadoSql->fetch_all(MYSQLI_ASSOC);

?>
<!--Fim codigo do campo pesquisar-->

    <div class="container">
    	
    	
    	<form method="post" action="index.php?p=produtos">
    		<div class="row">
    		<div class="col-md-4">
    			<h1>PRODUTOS</h1>
    		</div>
    			<div class="col-md-7">
    				<input class="form-control form-control-dark w-70" type="text" placeholder="Search" aria-label="Search">
    			</div>
    			<div class="col-md-1">
    				<button type="submit"><svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
  				<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
				</svg>
			</button>
    			</div>
    		</div>
    		
    		
    	</form>
			<div>
			
			<?php 
				$valor = @$_GET['p'] ;
			if ($valor == 'cadastrodespesas'){ 
				require_once 'form_despesas.php';
			 }
			 else{ 

				 require_once 'lista.php'; 
			 } 
			 ?>
			

			</div>

		</div>	
