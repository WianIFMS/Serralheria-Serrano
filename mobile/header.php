<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <title>Serralheria Serrano </title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="icon" type="imagem/jpg" href="img/fiv.jpg">
  <link rel="shotcut icon" type="imagem/jpg" href="img/fiv.jpg">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <style>
    .nav-link{
      color: white;
    }
  </style>
</head>

<body style="background-color: greenyellow;">
  <div class="container">

    <nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: green;">
      <a class="navbar-brand" href="index.php" > <strong><h3> Serralheria Serrano</h3></strong> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php" style="color:white ;"><strong>Home</strong> /<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portoes.php" id="nomes" style="color:white ;"><strong>Portôes</strong> /</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mesas.php" id="nomes" style="color:white ;"><strong>Mesas</strong> /</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="churrasqueiras.php" id="nomes" style="color:white ;"><strong>Churrasqueiras</strong> /</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="a-pronta-entrega.php" id="nomes" style="color:white ;"><strong>Pronta entrega</strong> /</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php" id="nomes" style="color:white ;">Contato</a>
          </li>

          <!--  <li class="nav-item">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </li>-->
        </ul>
        <?php if (isset($_SESSION['nome']) and $_SESSION['nome'] != '') {  ?>

          <!-- Example single danger button -->
          <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <?= $_SESSION['nome'] ?>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sair.php">sair</a></li>
              <li><a class="dropdown-item" href="#">Perfil</a></li>
             
            </ul>
          </div>


        <?php } else { ?>
          <a href="login.php" class="btn btn-primary">Login</a>
          <a href="formUsuario.php" class="btn btn-secondary">Cadastro</a>
        <?php } ?>
      </div>

    </nav>