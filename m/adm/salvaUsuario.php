<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once"autoload.php";
require_once"conexao.php";

var_dump($_POST);

// Inserindo informações no banco

if(isset($_POST['nome']) &&isset($_POST['email']) && isset($_POST['senha']))
{
	if($_POST['nome'] != ""   &&  $_POST['email'] != "" && $_POST['senha'] != "" )
	{
    
		$nome = $_POST['nome'];			  
        $email =$_POST['email'];
		$senha =$_POST['senha'];  

	    $senha = md5($senha);
	     
	    $sql = "INSERT INTO usuarios(nome,email,senha) values(?,?,?)";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("sss",$nome,$email,$senha);

		$sql2 = "SELECT * FROM usuarios WHERE email = '$email'";
		$insert = mysqli_query($conexao,$sql2) or die("erro");

		if (mysqli_num_rows($insert) == 0) {	

		 $sqlprep->execute();
		 header("Location: index.php");
		}else{
		 echo "ja existe";
		}
	} 
	else
	{
		echo "Não foi possivel cadastrar";
	}
}
