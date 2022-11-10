<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "header.php";
?>
<br>
<br>
<br>
<div>
  <h3 style="text-align:center ;">Entrar na sua conta!</h3>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">


      <form action="processaLogin.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
         <a href="formUsuario.php" class="btn btn-success btn-lg btn-block">Novo Cadastro</a>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>

</div>
</body>

</html>