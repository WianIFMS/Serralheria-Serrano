<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "header.php";
?>

<br>
<br>
<br>

<div class="Corpo">
	<div class="container">
		<div class="cadastro">
			<h1 class="display-4" style="text-align:center ;"><b>
					<font color="#2E8B57">Cadastro-</font>
				</b></h1>

		</div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">

			<div class="campo_cadastro">
				<div id="formulario_2">

					<form id="formulario2" method="post" action="salvaUsuario.php">



						<div class="form-group">
							<label for="formGroupExampleInput2"><b>Informe Seu nome</b></label>
							<input id="n2" name="nome" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Informe seu nome">
						</div>

						<div class="form-group">
							<div id="email_1">
								<label for="formGroupExampleInput"> <b>Informe um e-mail ou número de celular.</b></label>
								<input id="email1" name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
							</div>
						</div>

						<div class="form-group">
							<div id="senha_1">
								<label for="formGroupExampleInput2"><b>*Escolha uma Senha</b></label>
								<input id="senha1" name="senha" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Digite sua senha">
							</div>
						</div>
				</div>
			</div>
			<div id="button"><button type="submit" class="btn btn-success btn-lg btn-block">Cadastrar</button></div>
			</form>
			<br>
			<a href="login.php" class="btn btn-primary btn-lg btn-block">Login</a>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

</body>

</html>