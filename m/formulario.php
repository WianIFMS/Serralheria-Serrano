<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('adm/conexao.php');
if (!isset($_SESSION['email']) && !isset($_SESSION['email']) ) {
	header("Location: adm/index.php");
}

?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS -->


    <title>Serralheria Serrano </title>
  </head>
	  <body>
	  	<div class="container">
	  			<h5>Usuario: <?php  echo $_SESSION['nome'];   ?></h5>
	  		 <nav class="navbar navbar-expand-lg navbar-light " style="background: #3CB371">
				  <h3 style="text-align: center" >Serralheria Serrano</h3>
				  

			</nav>
			<form   action="processa.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
				<div class="form-group"> 
						<h3>Escolha uma foto para publicar!</h3>
				  <div class="custom-file">

	  				<input type="file" class="custom-file-input" id="customFile" name="foto">
	 				 <label class="custom-file-label" for="customFile">Choose file</label>
				</div>

				</div> 
					<div class="form-group"> 
				 <label for="descricao">Descrição:</label>
				 <textarea  class="form-control" name="descricao" id="descricao"></textarea>

				</div>
				
			<div class="form-group"> 	
				
					<label>Serviços</label>
							<input type="radio" name="disponibilidade"  value="servicos" id="servicos" >	

				<label>Entrega</label>
				<input type="radio" name="disponibilidade"  value="entrega" id="entrega" >	
	
						
							<label>Destaque</label>
							<input type="radio" name="disponibilidade"  value="amostra" id="amostra" >	
					
						
					</div>	 

					 

				<div class='form-group'> 
					<label>Valor</label>
					<input class='form-control' type='number' name='valor'>
				</div>
			</div>
				
				
				</div> 
				<button type="submit" class="btn btn-success">Enviar</button>
					
			</form>
			
		</div>
		</div> 
		</body>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</html>