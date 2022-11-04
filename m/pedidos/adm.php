<?php

require_once '../conexao/conexao.php';

$op = @$_POST['op'];

$id = @$_POST['id'];



 if ($id == 0) {
$id_usuario = $_POST['id_usuario'];
$valor_total = $_POST['valor_total'];
$valor_entrada = $_POST['valor_entrada'];
$valor_falta_receber = $_POST['valor_falta_receber'];
$data_entrega = $_POST['data_entrega'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO pedidos (id_usuario,valor_total,valor_entrada,valor_falta_receber,data_entrega,descricao) VALUES (?,?,?,?,?,?)";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("isssss", $id_usuario,$valor_total,$valor_entrada,$valor_falta_receber,$data_entrega,$descricao);
$sqlprep->execute();
header("location: ../index.php?p=pedidos");
//var_dump($_POST);
} else{
	$id = $_POST['id'];
	$status = $_POST['status'];


	$sql = "UPDATE pedidos SET status = ? WHERE id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("si", $status,$id);
$sqlprep->execute();
header("location: ../index.php?p=pedidos");
//var_dump($_POST);
}

if ($op == 'del') {

$sql = $conexao->prepare("DELETE FROM pedidos WHERE id=?");
$sql->bind_param("i", $id);
$sql->execute();
header("location: ../index.php?p=pedidos");
}