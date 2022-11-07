<?php
/*class Conexao 
{
	
	private static $host = "sql207.epizy.com";
	private static $usuario = "epiz_25221924";
	private static $senha = "4klb0gxpdRyRdp";
	private static $bd = "epiz_25221924_show_de_perguntas";
 
	public static function getConexao()
	{
		//return  new mysqli(self::$host, self::$usuario, self::$senha, self::$bd);
		return  new mysqli(self::$host, self::$usuario, self::$senha, self::$bd);
	}
	
}*/

/*
$servename = "sql205.byetcluster.com";

 $username = "epiz_25503022";

 $password = "LR1JW9KIhqAHCr";

 $bd = "epiz_25503022_serralheriaserrano";
 */
$servename = "localhost";

 $username = "root";

 $password = "";

 $bd = "epiz_25503022_serralheriaserrano";

$conexao = new mysqli($servename,$username,$password,$bd);







?>



