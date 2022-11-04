<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SS - Perfil</title>
	</head>
	<body>
		<h1>Perfil</h1>
		<?php
		if (isset($_GET['id'])) {
			$id_foto_recebida = $_GET['id'];
		}
                         require_once 'adm/conexao.php';

                          $sql= "SELECT * FROM portoes order by id desc";
                          $resultadosql = $conexao->query($sql);
                          $vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);

      ?>  
      <?php foreach ($vetorRegistros as $key) { 

          if ($key['id'] == $id_foto_recebida) {  
    
              ?>          
              <div class="row">
                  <div class="coluna">
                  <img src="<?=$key["foto"];?>" alt="descrição da imagem" style="width:100%">
                   <p><b>Descri:</b>  <?=$key["descricao"];?></p> 
                    ID: <?=$key["id"];?>
                    <a href="https://api.whatsapp.com/send?text=http://serralheriaserrano.rf.gd/?id=<?=$key['id'];?>" >Compartilhar No Whatsapp</a>
                  </div>      
          </div>        
         
        <hr>
      <?php
       }
     }

          ?>       

	</body>
</html>