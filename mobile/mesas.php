<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<br><br><br>
<?php
require_once 'header.php';
/*
include 'ClassConexao.php';
$Conexao=new ClassConexao();
$Teste=$Conexao->Conectar();
var_dump($Teste);
*/
require_once 'conexao/conexao.php';
include 'ClassVisitas.php';
$visitas = new ClassVisitas();
$visitas->InserindoVisitas();
$visitas->VerificaUsuario();

$sql = "SELECT * FROM portoes order by id desc";
$resultadosql = $conexao->query($sql);
$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);
?>
<h1 style="text-align:center;">MESAS</h1>
<div >
  <div class="row">
    <?php foreach ($vetorRegistros as $key) {
      if ($key['disponibilidade'] == "amostra" and $key['tipo_produto'] == "mesa") {      ?>

        <div >
          <img src="<?= $key["foto"]; ?>" alt="descrição da imagem" id="fotoPrincipal">
          <p>Descrição: <?= $key["descricao"]; ?></p>
        </div>


        <hr>
    <?php    }
    }   ?>
  </div>

  <?php require_once "footer.php"; ?>