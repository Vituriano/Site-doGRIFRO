<!DOCTYPE html>
<!-- saved from url=(0053)http://getbootstrap.com.br/docs/4.1/examples/sign-in/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Sobre Nós</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="shortcout icon" type="logo/x-icon" href="Imagem/icone.png"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
	
	<link rel="stylesheet" href="css/estilo.css">





	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body style="background-color: #1c3d44;">
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
	</nav>
	<br><br><br>
	<style type="text/css">
	
	a.escolha{
		display: inline-block;
		background-color: white;
		padding:10px 20px;
		color: #bb2a38;
		text-decoration: none;
		margin: 10px;
	}
	a.sel {
		color: #94222d;
		background-color: #d0c5c5;
		display: inline-block;
	}

	.escolha a:hover{
		color: #94222d;
		text-decoration: none;
		background-color: #d0c5c5
	}
	.imgfora{
		position: relative;
		width: 70%;
		height: 400px;
		overflow: hidden;
	}
	.imgdentro{
		height: auto;
		width: 100%;	
	}
	.arquivo{
		color: white;
		padding: 20px;
		margin: 10px;
		display: block;
		border: 1px solid #FFF;
	}	
	.arquivo h3{
		color: white;
		padding: 20px;
	}
	.arquivo:hover{
		color: #0d1d21;
	}



</style>
<div id="fh5co-trainer">
	<div class="container">
		<div class="animate-box">
			<div class="text-center fh5co-heading">
				<h2 style="color: #FFF;">Diretoria do Grêmio Estudantil</h2>
				<div class="">
					<a href="#" class="sel escolha botao" data-item-id="atual"><b>Diretoria atual</b></a>
					<a href="#" class="escolha botao" data-item-id="Egressos"><b>Egressos</b></a>
					<a href="#" class="escolha botao"  data-item-id="mandato"><b>Planos de mandato</b></a>
				</div>
			</div>
		</div>
		<div id="atual"  style="display:;" class="mostra row">
			<?php
			include "conexao.php";

			$ano_atual = utf8_encode(strftime('%Y'));

			$sql = "SELECT * FROM membros where ano_atuacao = '$ano_atual'";
			$query = mysqli_query($con, $sql);
			while ($membros = mysqli_fetch_array($query)) {?>
				<div class="col-xs-8 col-sm-6 col-lg-4 animate-box">
					<div class="trainer">
						<div class="imgfora"><a href="<?php echo $membros['linkedin'];?>" target="_blank"><img class="imgdentro" src="cpanel/membro/fotos/<?php echo $membros['imagem'];?>" alt="trainer"></a></div>
						<div class="title">
							<h3><a href="<?php echo $membros['linkedin'];?>" target="_blank"><?php echo $membros["nome"]; ?></a></h3>
							<span><?php echo $membros["cargo"]. " - " . $membros["ano_atuacao"]; ?></span>
						</div>
						<div class="desc">
							<ul class="fh5co-social-icons">
								<li><a href="<?php echo $membros['twitter'];?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="<?php echo $membros['facebook'];?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
								<li><a href="<?php echo $membros['linkedin'];?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="mailto:<?php echo $membros['email'];?>" target="_blank"><i class="fas fab fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			<?php } ?>
			<div style="clear: both;"></div>
		</div>
		<div id="Egressos" style="display:none;" class="mostra row">
			<?php
			include "conexao.php";
			$sql = "SELECT * FROM membros where ano_atuacao != '$ano_atual'";
			$query = mysqli_query($con, $sql);

			while ($membros = mysqli_fetch_array($query)) {?>
				<div class="col-xs-8 col-sm-6 col-lg-4">
					<div class="trainer">
						<div class="imgfora"><a href="<?php echo $membros['linkedin'];?>" target="_blank"><img class="imgdentro" src="cpanel/membro/fotos/<?php echo $membros['imagem'];?>" alt="trainer"></a></div>
						<div class="title">
							<h3><a href="<?php echo $membros['linkedin'];?>" target="_blank"><?php echo $membros['nome'];?></a></h3>
							<span>Cordenador de Ensino, Ciencia e tecnologia -  <?php echo $membros["ano_atuacao"]; ?></span>
						</div>
						<div class="desc">
							<ul class="fh5co-social-icons">
								<li><a href="<?php echo $membros['twitter'];?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="<?php echo $membros['facebook'];?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
								<li><a href="<?php echo $membros['linkedin'];?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="mailto:<?php echo $membros['email'];?>"target="_blank"><i class="fas fab fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			<?php } ?>
			<div style="clear: both;"></div>
		</div>
		<div id="mandato" style="display:none;" class="container mostra row">
			<?php
			include "conexao.php";
			$sql = "SELECT * FROM mandato";
			$query = mysqli_query($con, $sql);
			$i = 0;
			while ($mandatos = mysqli_fetch_array($query) and $i < 3) { $i++;?>
				<div class="col-xs-8 col-sm-8 col-lg-8 container">
					<a class="arquivo" href="cpanel/mandato/arquivos/<?php echo $mandatos['arquivo'];?>" target="_blank"><i style="font-size: 50px;" class="fas fa-download"></i>
						<h3 style="display: inline;"><?php echo $mandatos["nome"] . " - " . $mandatos["ano"]; ?></h3>
					</a>

				</div>
			<?php } ?>
			<div style="clear: both;"></div>
		</div>
	</div>
</div>
<br>
<style type="text/css">

</style>
<footer style="background: #0d1d21; color: white;" class="final">
	Desenvolvido por: <a style="color: white;" shref="https://twitter.com/vitu_xisto"><b>Vituriano</b></a>,
	<a style="color: white;" href=""><b>Nícolas</b></a>, 
	<a style="color: white;" href=""><b>Luís</b></a>,
	<a style="color: white;" href=""><b>Saimor</b></a> e 
	<a style="color: white;" href=""><b>Lucas</b></a>
</footer>
</div>
</body>
<script src="JavaScript/jquery.min.js"></script>
<script src="JavaScript/jquery.easing.min.js"></script>
<script src="JavaScript/creative.min.js"></script>

</html>
<script type="text/javascript">
	
// uma função "helper" somente para não precisar ficar digitando "document.getElementById" toda hora
function $(id) {
	return document.getElementById(id);
}

// só será executado depois que o DOM estiver completamente carregado
document.addEventListener("DOMContentLoaded", function() { 
	function formatosClick() {
		for(var i = 0; i < conteudos.length; i++) {
            // esconde todas as divs de conteúdo
            conteudos[i].style.display = 'none';
        }
        
        for(var i = 0; i < formatos.length; i++) {
            // "desmarca" todas as divs de formato
            formatos[i].classList.remove('sel');
        }
        // pega o ID da div de conteúdo do atributo "data-item-id"
        $(this.getAttribute('data-item-id')).style.display = '';

        // "marca" o item atual com a classe 'sel'
        this.classList.add('sel');
    }
    
    // pega todos as divs com a classe 'formato' da página
    var formatos = document.getElementsByClassName('botao');
    // pega todas as divs com a classe 'conteúdo' da página
    var conteudos = document.getElementsByClassName('mostra');
    
    // percorre o array formatos e adiciona a função que 
    // será executada no evento onclick de todos eles (formatosClick)
    for(var i = 0; i < formatos.length; i++) {
    	formatos[i].onclick = formatosClick;
    }
});
</script>