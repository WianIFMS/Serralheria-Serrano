			<?php 
			require_once 'conexao/conexao.php';

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
			<h1>Cadastro de clientes</h1>
			

			<form method="post" action="clientes/adm.php" class="form-group">
				
				<input type="hidden" name="id" value="<?= $value['id']?>">

				<label for="nome">Nome</label>
				<input class="form-control" type="text" name="nome" value="<?= @$value['nome']?>">


				<label for="telefone">Telefone</label>
				<input class="form-control" type="number" name="telefone" value="<?= @$value['telefone']?>">

				<label for="endereco">Endereco</label>
				<input class="form-control" type="text" name="endereco" value="<?= @$value['endereco']?>">

				
				<button type="submit" class="btn btn-success">SALVAR</button>
			</form>

		