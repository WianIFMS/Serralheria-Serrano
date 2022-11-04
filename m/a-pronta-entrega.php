<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 ?>
<!DOCTYPE html>
<html lang="pt">
  <head>
      <title>SS - A pronta entrega</title>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
  
  </head>
  <body>
    <div class="">
        <nav  class="navbar fixed-top navbar-expand-lg navbar-light "style="background-color: #00FA9A">
        <a class="navbar-brand" href="index.php">Serralheria Serrano</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
     <li class="nav-item">
        <a class="nav-link" href="contato.php">Contato</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="portoes.php">Portões</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="churrasqueiras.php">Churrasqueiras</a>
      </li>
    
  
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
      </nav><br><br><br>
  <div style="margin-left: 10px">
                         <?php
                         require_once 'adm/conexao.php';

                          $sql= "SELECT * FROM portoes order by id desc";
                          $resultadosql = $conexao->query($sql);
                          $vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);

      ?>  
      <?php foreach ($vetorRegistros as $key) { 

          if ($key['disponibilidade'] == "entrega") {
           
    
              
              ?>

          

     
      <img src="<?=$key['foto'];?>" class="img-fluid" alt="Responsive image">
      <h5>Código: <?=$key["id"];?></h5>
      <p>Descrição: <?=$key["descricao"];?></p>
      <h1>Valor R$:  <?=$key["valor"];?></h1>
     
      <a href="https://api.whatsapp.com/send?text=http://serralheriaserrano.rf.gd/?id=<?=$key['id'];?>" >Compartilhar No Whatsapp</a>
     
      <hr>
      <?php


       }
     }

          ?>
</div>
          <p>Todos os direitos reservados a ©Copyright Serralheria Serrano by Wian Clodaldo</p>
          <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        

          <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </div>
  </body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>