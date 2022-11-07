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
  <script type="text/javascript">
    var userAgent = navigator.userAgent.toLowerCase();
    var devices = new Array('nokia', 'iphone', 'blackberry', 'sony', 'lg',
      'htc_tattoo', 'samsung', 'symbian', 'SymbianOS', 'elaine', 'palm',
      'series60', 'windows ce', 'android', 'obigo', 'netfront',
      'openwave', 'mobilexplorer', 'operamini');
    var url_redirect = 'mobile';

    function mobiDetect(userAgent, devices) {
      for (var i = 0; i < devices.length; i++) {
        if (userAgent.search(devices[i]) > 0) {
          return true;
        }
      }
      return false;
    }

    if (mobiDetect(userAgent, devices)) {
      window.location.href = url_redirect;
    }
  </script>
</head>

<body>
  <div class="container">

    <nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #00FA9A;">
      <a class="navbar-brand" href="index.php">Serralheria Serrano</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home /<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portoes.php" id="nomes">Portões /</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="churrasqueiras.php" id="nomes">Churrasqueiras /</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="a-pronta-entrega.php" id="nomes">Produtos a pronta entrega /</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php" id="nomes">Contato</a>
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