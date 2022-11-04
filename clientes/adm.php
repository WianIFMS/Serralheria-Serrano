<?php

require_once '../conexao/conexao.php';

$op = @$_POST['op'];

$id = $_POST['id'];



 if ($id == 0) {
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco']; 

$sql = "INSERT INTO clientes (nome,telefone,endereco) VALUES (?,?,?)";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("sss", $nome,$telefone,$endereco);
$sqlprep->execute();
header("location: ../index.php?p=clientes");
//var_dump($_POST);
} else{
	$id = $_POST['id'];
	$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


	$sql = "UPDATE usuarios SET nome=?, email=?, telefone=?, cidade=?, estado=?, relacionamento=? WHERE id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("ssssssi", $nome,$email,$telefone,$cidade,$estado,$relacionamento,$id);
$sqlprep->execute();
header("location: index.php?change=Usuario atualizado com sucesso!");
//var_dump($_POST);
}

if ($op == 'del') {

$sql = $conexao->prepare("DELETE FROM usuarios WHERE id=?");
$sql->bind_param("i", $id);
$sql->execute();
header("location: index.php?danger=Usuario excluido com sucesso!");
}