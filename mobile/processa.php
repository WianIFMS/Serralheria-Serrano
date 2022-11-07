<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 require_once('adm/conexao.php');




$foto = $_FILES['foto'];
//@$id = $_POST['id'];
@$id_usuario = $_SESSION["id"];
$descricao = $_POST["descricao"];
@$disponibilidade = $_POST["disponibilidade"];
$valor = $_POST['valor'];

var_dump($_POST);

// Inicio Arquivo de upload

date_default_timezone_set("America/Sao_paulo");
$dataEHora = date('dmYHi');
$nome_arquivo = "fotos/".$dataEHora . $_FILES["foto"]["name"];
$nome_arquivo_tmp = $_FILES["foto"]["tmp_name"];
$msgErroArquivo = "";

if (move_uploaded_file($nome_arquivo_tmp,$nome_arquivo)==false) {
	$msgErroArquivo = "Arquivo de foto não pode ser enviado";
}

// Fim Arquivo de upload

		$sql ="INSERT INTO portoes(foto,id_usuario,descricao,disponibilidade,valor) values(?,?,?,?,?)";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("sissd",$nome_arquivo,$id_usuario,$descricao,$disponibilidade,$valor);
		$sqlprep->execute();
		$msgOk = "Conta inserida com sucesso";

/*
	$sql = "UPDATE portoes SET foto=? where id=?";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("s",$nome_arquivo);
	$sqlprep->execute();
	$msgOk = "Conta atualizada com sucesso";

*/
	header("Location: formulario.php");
?>
