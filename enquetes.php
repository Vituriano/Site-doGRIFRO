<!DOCTYPE html>
<!-- saved from url=(0053)http://getbootstrap.com.br/docs/4.1/examples/sign-in/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Enquetes</title>

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

<body style="background: #f38b24;">


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
					<?php
					include "conexao.php";
					$sql = "SELECT * FROM estatuto";
					$query = mysqli_query($con, $sql);

					while($estatuto = mysqli_fetch_array($query)) {
						$arquivo = $estatuto['arquivo'];
					}
					?>
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
	<div class="container">
		<div id="fh5co-blog" class="fh5co-bg-section">
			<div class="text-center fh5co-heading animate-box">
				<h2 style="color: white;">Enquetes</h2>
			</div>
		</div>
		<div class="row row-bottom-padded-md">
			<?php
			include "conexao.php";
			$sql = "SELECT * FROM enquetes";
			$query = mysqli_query($con, $sql);

			while($noticias = mysqli_fetch_array($query)) {
				$id = $noticias['idEnquete'];
				$titulo = $noticias['titulo'];
				$texto = $noticias['texto'];
				$imagem = $noticias['imagem'];
				$link = $noticias['link'];
				$publicacao = $noticias['publicacao'];
				?>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="<?php echo $link; ?>"><div class="noticiasimg" style="margin-bottom: 20px;"><img class="noticiasimginside" src="cpanel/uploadsImages/<?php echo $imagem;?>" alt="Card image cap"></div></a>
						<div class="blog-text">
							<h3 style="max-height: 6rem; min-width: 6rem; overflow: hidden;"><a href="<?php echo $link; ?>" ><?php echo $titulo; ?></a></h3>
							<span class="posted_on"><?php echo $publicacao; ?></span>
							<p align="justify"><?php  echo substr($texto, 0, 200) . "...";?></p>
							<a href="<?php echo $link; ?>" class="btn btn-primary">Ler tudo</a>
						</div> 
					</div>
				</div>				

			<?php } ?>
		</div>
	</div>
	<style type="text/css">
	.noticiasimg{
		height: 234px;
		overflow: hidden;
	}
	.noticiasimginside{
		width: auto;
		height: 100%;
	}
</style>
<!-- FIM notícias-->
<footer style="background: #9a5613;"class="final">
	Desenvolvido por: <a href="https://twitter.com/vitu_xisto"><b>Vituriano</b></a>,
	<a href=""><b>Nícolas</b></a>, 
	<a href=""><b>Luís</b></a>,
	<a href=""><b>Saimor</b></a> e 
	<a href=""><b>Lucas</b></a>
</footer>
</body>
</html>