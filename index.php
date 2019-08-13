<!DOCTYPE html>
<!-- saved from url=(0053)http://getbootstrap.com.br/docs/4.1/examples/sign-in/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>GRIFRO</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="shortcout icon" type="logo/x-icon" href="Imagem/icone.png"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
	
	<link href="https://fonts.googleapis.com/css?family=Markazi+Text:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">  
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>

<body>
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
						<a class="nav-link js-scroll-trigger" href="#banner">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="font nav-link js-scroll-trigger" href="cpanel/estatuto/arquivos/<?php echo $arquivo;?>" target="_blank">Estatuto<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#Atividades">Atividades<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#enquetes">Enquetes<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="font nav-link js-scroll-trigger" href="#noticias">Notícias<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="font nav-link js-scroll-trigger" href="#editais">Editais<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="font nav-link js-scroll-trigger" href="#eventos">Eventos<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="font nav-link js-scroll-trigger" href="#contato">Contato<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- FIM Navbar principal do site -->



	<section id="banner">
		<div class="inner">
			<div class="titulo" style="margin: 0 auto;">
				<h2 style="margin: 10px; font-size: 3em; ; text-align: center;">Seja bem vindo!</h2>
				<p class="apreseta">O que nos move é a busca em mobilizar os estudantes para a funcionalidade institucional, promovendo oportunidades para a sua participação e integração a projetos e ações, viabilizando o desenvolvimento de ideias do alunado em conjunto com os servidores, favorecendo ainda sua aproximação e estreitamento de relações e interesses.</p>
				<p style="margin: 10px; text-align: center;"><a href="Sobre.php" class="btn btn-primary btn-sm">Sobre nós <i style="color:white" class="fas fa-chevron-right"></i></a></p>
			</div>
		</div>
	</section>
	<div id="Atividades" class="programas">
		<center>
			<h1 class="display-4" style="color: #FFF; margin: 0; padding: 25px;">Atividades</h1>
			<br>
			<div class="container">
				<div id="fh5co-services" class="fh5co-bg-section">
					<div class="container">
						<div class="row">
							<?php
							include "conexao.php";
							$sql = "SELECT * FROM atividades ORDER BY idatividades DESC";
							$query = mysqli_query($con, $sql);
							$i = 0;
							while ($noticia = mysqli_fetch_array($query) and $i < 3) { $i++;?>
								<div class="col-xs-8 col-sm-6 col-lg-4 text-center animate-box">
									<div class="services">
										<div class="card-imgdiv" style="margin-bottom: 20px;"><img class="card-img" src="cpanel/uploadsImages/<?php echo $noticia['imagem'];?>" ></div>
										<h3 style="max-height: 3rem; min-width: 3rem; overflow: hidden; "><?php echo $noticia["titulo"]; ?></h3>
										<h3></h3>
										<br>	
										<p style="max-height: 7rem; min-height: 7rem; overflow: hidden;" class="card-text"><?php echo $noticia["texto"]; ?></p> 
										<p><a href="cpanel/atividade/paginas/<?php echo $noticia['titulo'];?>.php" class="btn btn-primary btn-outline btn-sm">Ler tudo <i class="fas fa-chevron-right"></i></a></p>
									</div>
								</div>

							<?php } ?>
						</div>
					</div>
				</div>
				<div style="clear: both; padding: 15px;"></div>
			</center>
		</div>
		<div id="enquetes" class="enquetes" style="padding-bottom: 25px;">
			<div class="container" style="text-align: center; margin: 0 auto;">
				<h1 class="display-4" style="color: #FFF; margin: 0;padding: 20px;">Enquetes</h1>
				<p style="padding-bottom: 20px; color:white; ">Ajude-nos a saber as necessidades da comunidade acadêmica, reponda algumas de nossas pesquisas.</p>
				<div id="escolha">
					<a href="enquetes.php" target="_blank"><b>Todas</b></a>
					<a class="check js-scroll-trigger" href="#enquetes"><b>Recentes</b></a>
				</div>
				<br>	
				<br>
				<div id="fh5co-services" class="fh5co-bg-section">
					<div class="container">
						<div class="row">
							<?php
							include "conexao.php";
							$sql = "SELECT * FROM enquetes ORDER BY idEnquete DESC";
							$query = mysqli_query($con, $sql);
							$i = 0;
							while ($noticia = mysqli_fetch_array($query) and $i < 3) { $i++;?>
								<div class="col-xs-8 col-sm-6 col-lg-4 text-center animate-box">
									<div class="services">
										<div class="card-imgdiv" style="margin-bottom: 20px;"><img class="card-img" src="cpanel/uploadsImages/<?php echo $noticia['imagem'];?>" ></div>
										<h3 style="max-height: 3rem; min-width: 3rem; overflow: hidden; "><?php echo $noticia["titulo"]; ?></h3>
										<h3></h3>
										<br>	
										<p style="max-height: 7rem; min-height: 7rem; overflow: hidden;" class="card-text"><?php echo $noticia["texto"]; ?></p> 
										<p><a href="<?php echo $noticia['link'];?>.php" class="btn btn-primary btn-outline btn-sm">Ler tudo <i class="fas fa-chevron-right"></i></a></p>
									</div>
								</div>

							<?php } ?>
						</div>
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<div id="noticias" class="noticias">
			<center>
				<div class="container" style="text-align: center; margin: 0 auto;">
					<h1 class="display-4" style="color: #FFF; margin:0; padding: 20px;">Notícias Recentes</h1>
					<p style=" padding-bottom: 20px; color:white; ">Saiba aqui as notícias e destaques que envolvem a comunidade acadêmica do IFRO.</p>
					<div id="escolha">
						<a href="noticias.php" target="_blank"><b>Todas</b></a>
						<a class="check js-scroll-trigger" href="#noticias"><b>Recentes</b></a>
					</div>
					<br>	
					<br>
					<div id="fh5co-services" class="fh5co-bg-section">
						<div class="container">
							<div class="row">
								<?php
								include "conexao.php";
								$sql = "SELECT * FROM noticias ORDER BY idNoticias DESC";
								$query = mysqli_query($con, $sql);
								$i = 0;
								while ($noticia = mysqli_fetch_array($query) and $i < 3) { $i++;?>
									<div class="col-xs-8 col-sm-6 col-lg-4 text-center animate-box">
										<div class="services">
											<div class="card-imgdiv" style="margin-bottom: 20px;"><img class="card-img" src="cpanel/uploadsImages/<?php echo $noticia['imagem'];?>" ></div>
											<h3 style="max-height: 3rem; min-width: 3rem; overflow: hidden; "><?php echo $noticia["titulo"]; ?></h3>
											<h3></h3>
											<br>	
											<p style="max-height: 7rem; min-height: 7rem; overflow: hidden;" class="card-text"><?php echo $noticia["texto"]; ?></p> 
											<p><a href="cpanel/noticia/paginas/<?php echo $noticia['titulo'];?>.php" class="btn btn-primary btn-outline btn-sm">Ler tudo 	<i class="fas fa-chevron-right"></i></a></p>
										</div>
									</div>

								<?php } ?>
							</div>
						</div>
					</div>
					<div style="clear: both; padding: 15px;"></div>
				</div>
			</center>
		</div>
		<div id="editais" class="editais">
			<center>
				<div class="container" style="text-align: center; margin: 0 auto;">
					<h1 class="display-4" style="color: #FFF; margin: 0; padding: 20px;">Editais</h1>
					<p style=" padding-bottom: 20px; color:white; ">Fique por dentro das oportunidades que o IFRO vem sempre oferencendo.</p>
					<div id="escolha">
						<a href="editais.php" target="_blank"><b>Todos</b></a>
						<a class="check js-scroll-trigger" href="#editais"><b>Recentes</b></a>
					</div>
					<br><br>
					<div id="fh5co-services" class="fh5co-bg-section">
						<div class="container">
							<div class="row">
								<?php
								include "conexao.php";
								$sql = "SELECT * FROM editais ORDER BY idEdital DESC";
								$query = mysqli_query($con, $sql);
								$i = 0;
								while ($noticia = mysqli_fetch_array($query) and $i < 3) { $i++;?>
									<div class="col-xs-8 col-sm-6 col-lg-4 text-center animate-box">
										<div class="services">
											<div class="card-imgdiv" style="margin-bottom: 20px;"><img class="card-img" src="cpanel/uploadsImages/<?php echo $noticia['imagem'];?>" ></div>
											<h3 style="max-height: 3rem; min-width: 3rem; overflow: hidden; "><?php echo $noticia["titulo"]; ?></h3>
											<h3></h3>
											<br>	
											<p style="max-height: 7rem; min-height: 7rem; overflow: hidden;" class="card-text"><?php echo $noticia["texto"]; ?></p> 
											<p><a href="cpanel/edital/paginas/<?php echo $noticia['titulo'];?>.php" class="btn btn-primary btn-outline btn-sm">Ler tudo <i class="fas fa-chevron-right"></i></a></p>
										</div>
									</div>

								<?php } ?>
							</div>
						</div>
					</div>
					<div style="clear: both; padding: 15px;"></div>
				</div>
			</center>
		</div>
		<div id="eventos" class="eventos">
			<center>
				<div class="container" style="text-align: center; margin: 0 auto;">
					<h1 class="display-4" style="color: #FFF; margin: 0; padding: 20px;">Eventos</h1>
					<p style=" padding-bottom: 20px; color:white; ">Saiba o que está ao seu alcance no IFRO.</p>
					<div id="escolha">
						<a href="eventos.php" target="_blank"><b>Todos</b></a>
						<a class="check js-scroll-trigger" href="#eventoss"><b>Recentes</b></a>
					</div>
					<br><br>
					<div id="fh5co-services" class="fh5co-bg-section">
						<div class="container">
							<div class="row">
								<?php
								include "conexao.php";
								$sql = "SELECT * FROM eventos ORDER BY idEventos DESC";
								$query = mysqli_query($con, $sql);
								$i = 0;
								while ($noticia = mysqli_fetch_array($query) and $i < 3) { $i++;?>
									<div class="col-xs-8 col-sm-6 col-lg-4 text-center animate-box">
										<div class="services">
											<div class="card-imgdiv" style="margin-bottom: 20px;"><img class="card-img" src="cpanel/uploadsImages/<?php echo $noticia['imagem'];?>" ></div>
											<h3 style="max-height: 3rem; min-width: 3rem; overflow: hidden; "><?php echo $noticia["titulo"]; ?></h3>
											<h3></h3>
											<br>	
											<p class="card-text"><?php echo $noticia["data"]; ?></p> 
											<p style="max-height: 6rem; min-height: 7rem; overflow: hidden;" class="card-text"><?php echo $noticia["texto"]; ?></p> 
											<p><a href="cpanel/evento/paginas/<?php echo $noticia['titulo'];?>.php" class="btn btn-primary btn-outline btn-sm">Ler tudo <i class="fas fa-chevron-right"></i></a></p>
										</div>
									</div>

								<?php } ?>
							</div>
						</div>
					</div>
					<div style="clear: both; padding: 15px;"></div>
				</div>
			</center>
		</div>
		<div id="contato">
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

		<!-- FIM notícias-->
		<footer class="final">
			Desenvolvido por: <a href="https://twitter.com/vitu_xisto"><b>Vituriano</b></a>,
			<a href=""><b>Nícolas</b></a>, 
			<a href=""><b>Luís</b></a>,
			<a href=""><b>Saimor</b></a> e 
			<a href=""><b>Lucas</b></a>
		</footer>
	</div>
</body>
<script src="JavaScript/jquery.min.js"></script>
<script src="JavaScript/jquery.easing.min.js"></script>
<script src="JavaScript/creative.min.js"></script>

</html>
