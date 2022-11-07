<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
	
		<head>
			<title>Cadastro </title>
				
				<link rel="stylesheet" href="formatacao.css">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta charset="utf-8">
				<link rel="stylesheet" href="estilo.css" media="(min-width: 480px) and (max-width: 900px)"/>
				<link rel="stylesheet" href="estilo.css" media="screen and (max-width: 480px)" />
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
		
				<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
   				<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    
    			<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		</head>
		
		<body>
			<div class="container">
			
			
			<div class="Corpo">	
					<div class="container">
						<div class="cadastro">
							<hr></hr>
							<h1 class="display-4"><b><font color="#2E8B57">Cadastro-</font></b></h1>
							
						</div>
					</div>

					<div class="campo_cadastro">
						<div id="formulario_2">
							

							<form id="formulario2" method="post" action="salvaUsuario.php">
								<div class="row">
								
								<div class="col-md-6">	
								<div class="form-group">
										<label for="formGroupExampleInput2"><b>Infrome Seu nome</b></label>
										<input id="n2" name="nome" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Informe seu nome">
									</div>
								</div>	
                                    	
                                   	
								<div class="col-md-6">	
									<div class="form-group">
										<div id="email_1">
											<label for="formGroupExampleInput"> <b>Informe um email, número de celular ou nome de usúario.</b></label>
											<input id="email1" name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
										</div>
									</div>
								</div>	
								<div class="col-md-6">	
									<div class="form-group">
										<div id="senha_1">
											<label for="formGroupExampleInput2"><b>*Escolha uma Senha</b></label>
											<input id="senha1" name="senha" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Digite sua senha">
										</div>
									</div>
								</div>
                                
							
								</div>
								
								</div>
								<div id="button"><button type="submit" class="btn btn-success btn-lg btn-block">Cadastrar</button></div>
							</form>
							
		</div>
</body>				
</html>			