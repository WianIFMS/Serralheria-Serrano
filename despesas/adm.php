<?php

require_once '../conexao/conexao.php';

$op = @$_POST['op'];

$id = @$_POST['id'];

if ($op == 'del') {

$sql = $conexao->prepare("DELETE FROM despesas WHERE id=?");
$sql->bind_param("i", $id);
$sql->execute();
header("location: ../index.php?p=despesas");
}

 if ($id == 0) {
$descricao = $_POST['descricao'];
$evencimento = $_POST['vencimento'];
$total = $_POST['total'];

$sql = "INSERT INTO despesas (descricao,vencimento,total) VALUES (?,?,?)";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("sdi", $descricao,$vencimento,$total);
$sqlprep->execute();
header("location: ../index.php?p=despesas");
//var_dump($_POST);
} else {
	$id = $_POST['id'];
$descricao = $_POST['descricao'];
$evencimento = $_POST['vencimento'];
$total = $_POST['total'];

	$sql = "UPDATE usuarios SET nome=?, email=?, telefone=?, cidade=?, estado=?, relacionamento=? WHERE id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("ssssssi", $nome,$email,$telefone,$cidade,$estado,$relacionamento,$id);
$sqlprep->execute();
header("location: index.php?change=Usuario atualizado com sucesso!");
//var_dump($_POST);
}

