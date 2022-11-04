<?php

require_once '../conexao/conexao.php';

$op = @$_POST['op'];

$id = @$_POST['id'];

if ($op == 'del') {

$sql = $conexao->prepare("DELETE FROM produtos WHERE id=?");
$sql->bind_param("i", $id);
$sql->execute();
header("location: ../index.php?p=produtos");
}

 if ($id == 0) {
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];

$sql = "INSERT INTO produtos (descricao,valor) VALUES (?,?)";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("si", $descricao,$valor);
$sqlprep->execute();
header("location: ../index.php?p=produtos");
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

