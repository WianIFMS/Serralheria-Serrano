<?php
 abstract class ClassConexao{
public function Conectar()
{
    try{
        $Con =  new PDO("mysql:host=localhost;dbname=epiz_25503022_serralheriaserrano","root","");
       
        return $Con;
    }catch (PDOException $Erro){
        return $Erro->getMessage();
    }
}
}