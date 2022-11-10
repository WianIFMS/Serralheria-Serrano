<br><br><br>
<?php
require_once 'header.php';
?>
<h1 style="text-align:center">Churrasqueiras</h1>
<br><br><br>
<?php
/*
include 'ClassConexao.php';
$Conexao=new ClassConexao();
$Teste=$Conexao->Conectar();
var_dump($Teste);
*/
include 'ClassVisitas.php';
$visitas = new ClassVisitas();
$visitas->InserindoVisitas();
$visitas->VerificaUsuario();
?>
<div style="margin-left: 10px">

  <?php
  require_once 'conexao/conexao.php';

  $sql = "SELECT * FROM portoes order by id desc";
  $resultadosql = $conexao->query($sql);
  $vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);

  ?>
  <div class="row">
    <?php foreach ($vetorRegistros as $key) {

      if ($key['disponibilidade'] == "amostra" and $key['tipo_produto'] == "churrasqueira") {

    ?>

        <div class="coluna">
          <img src="<?= $key["foto"]; ?>" alt="descrição da imagem" id="fotoPrincipal">
          <p>Descrição: <?= $key["descricao"]; ?></p>
        </div>
    <?php
      }
    }

    ?>
  </div>
  <?php require_once"footer.php" ?>