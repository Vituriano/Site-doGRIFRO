<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="Cesar Szpak">
  <link rel="icon" href="imagens/favicon.png">

  <title>GRIFRO - Login</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav style="background-color: white;" class="navbar fixed-top navbar-light navbar-expand-lg" id="mainNav">

      <div class="container">
      <div style="width: 5%; min-width:100px; margin: 5px auto;"><a href="../index.php" style=""><img " src="imagens/GRIFRO.png" alt=" GRIFRO" class="navbar-brand imagem-responsiva" ></a></div>

      </div>
    </nav>

    <br><br>
    <div class="container">
      <div id="contato" style="  position: relative;top:0; bottom: 0; left: 0; right: 0;margin: 0 auto;  backface-visibility: hidden;-webkit-backface-visibility: hidden;">
        <div class="ocn">
          <div id="inscrever">
            <div class="contact-form">
              <form class="form-signin" method="POST" action="valida.php">
                <h1 style="color: white;">Login</h1>
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                <button class="btn btn-lg btn-block login" type="submit">Acessar</button>
              </form>
              <p class="text-center" style="color: white;">
               <?php if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
              }?>
            </p>
            <p class="text-center" style="color: white;">
              <?php 
              if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /container -->
<div style="padding: 50px;"></div>

  <footer class="final" style="position: fixed; bottom: 0;margin: 0 auto; width: 100%;">
    <center>
      Desenvolvido por: <a href="https://twitter.com/vitu_xisto"><b>Vituriano</b></a>,
      <a href=""><b>Nícolas</b></a>, 
      <a href=""><b>Luís</b></a>,
      <a href=""><b>Saimor</b></a> e 
      <a href=""><b>Lucas</b></a>
    </center>
  </footer>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
