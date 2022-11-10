<?php
 abstract class ClassConexao{
public function Conectar()
{
    try{
        $Con =  new PDO("mysql:host=localhost;dbname=epiz_25503022_serralheriaserrano","root","");
      //  $Con =  new PDO("mysql:host=sql205.epizy.com;dbname=epiz_25503022_serralheriaserrano","epiz_25503022","LR1JW9KIhqAHCr");
       
        return $Con;
    }catch (PDOException $Erro){
        return $Erro->getMessage();
    }
}
}