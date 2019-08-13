<!DOCTYPE html>
<!-- saved from url=(0053)http://getbootstrap.com.br/docs/4.1/examples/sign-in/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Contato</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="shortcout icon" type="logo/x-icon" href="Imagem/icone.png"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
	<link rel="stylesheet" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Markazi+Text:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">  
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body id="contato">

	<?php
	include "conexao.php";
	$sql = "SELECT * FROM estatuto";
	$query = mysqli_query($con, $sql);

	while($estatuto = mysqli_fetch_array($query)) {
		$arquivo = $estatuto['arquivo'];
	}
	?>
	<!-- INICIO Navbar principal do site -->
	<nav style="background-color: white;" class="navbar fixed-top navbar-light navbar-expand-lg" id="mainNav">
		<div class="container">
			<div style="overflow: hidden; width: 55%;"><a href="index.php" style=""><img src="imagem/GRIFRO.png" alt="Logo GRIFRO" class="navbar-brand imagem-responsiva" ></a></div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse"  id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="index.php">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="font nav-link js-scroll-trigger" href="cpanel/estatuto/arquivos/<?php echo $arquivo;?>" target="_blank">Estatuto<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="enquetes.php">Enquetes<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="font nav-link js-scroll-trigger" href="noticias.php">Notícias<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="font nav-link js-scroll-trigger" href="editais.php">Editais<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="font nav-link js-scroll-trigger" href="eventos.php">Eventos<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="font nav-link js-scroll-trigger" href="contato.php">Contato<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav><br><br><br>
	<div id="contato" style="  position: relative;top:0; bottom: 0;	left: 0; right: 0;margin: 0 auto;  backface-visibility: hidden;-webkit-backface-visibility: hidden;">
		<div class="ocn">
			<div id="inscrever">
				<div class="contact-form">
					<h2>Fale Conosco</h2>
					<br>
					<!--LEMBRAR DE EDITAR O EMAIL -->
					<form action="https://formspree.io/viturianooliveira@gmail.com" method="POST">
						<div class="form-group">
							<input type="text" name="Nome" class="form-control" placeholder="Seu Nome" value="" />
						</div>
						<div class="form-group">
							<input type="text" name="Email" class="form-control" placeholder="Seu Email" value="" />
						</div>
						<div class="form-group">
							<textarea name="Mensagem" class="form-control" placeholder="Sua Mensagem" style="width: 100%; height: 150px;"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="btnSubmit" class="btnContact" value="Enviar" />
						</div>
					</form>
				</div>	
			</div>
			<div id="redes">
				<ul id="rede">
					<li><a href="https://www.facebook.com/Grifropvh/  "><i style="color:white; padding: 0 26px 10px 0;"class="fab fa-facebook-f"></i>Facebook</a></li>
					<li><a href="https://twitter.com/gremioDoIFRO"><i style="color:white; padding: 0 19px 10px 0;"class="fab fa-twitter"></i>Twitter</a></li>
					<li><a href="https://www.instagram.com/grifropvh/"><i style="color:white; padding: 0 20px 10px 0;"class="fab fa-instagram"></i>Instagram</a></li>
					<li><a href="mailto:grifro2015@gmail.com"><i style="color:white; padding: 0 18px 0 0;"class="fas fa-envelope"></i>grifro2015@gmail.com</a></li>
				</ul>
			</div>
		</div>
		<div style="clear: both;"></div>
	</div>
	<br><br><br>
	<!-- FIM notícias-->
	<footer class="final" style="position: fixed; bottom: 0; width: 100%;">
		Desenvolvido por: <a href="https://twitter.com/vitu_xisto"><b>Vituriano</b></a>,
		<a href=""><b>Nícolas</b></a>, 
		<a href=""><b>Luís</b></a>,
		<a href=""><b>Saimor</b></a> e 
		<a href=""><b>Lucas</b></a>
	</footer>
</body>
<script src="JavaScript/jquery.min.js"></script>
<script src="JavaScript/jquery.easing.min.js"></script>
<script src="JavaScript/creative.min.js"></script>

</html>
