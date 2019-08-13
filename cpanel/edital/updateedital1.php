<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

?>

<!DOCTYPE html>
<!-- saved from url=(0053)http://getbootstrap.com.br/docs/4.1/examples/sign-in/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Painel Administrativo</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="shortcout icon" type="logo/x-icon" href="../imagens/favicon.png"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
	<link rel="stylesheet" href="../css/signin.css">
	<link href="https://fonts.googleapis.com/css?family=Markazi+Text:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">  
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body style="background:#eaeaea91;">


	<nav style="background-color: white;" class="navbar fixed-top navbar-light navbar-expand-lg" id="mainNav">

		<div class="container">
			<div style="width: 5%; min-width:100px; margin: 0 auto;"><a href="../../index.php" style=""><img " src="../imagens/GRIFRO.png" alt=" GRIFRO" class="navbar-brand imagem-responsiva" ></a></div>

			<div class="sair" style="font-size: 25px; right: 0;">
				<a href="../sair.php">
					<i class="fas fa-sign-out-alt"></i>
				</a>
			</div>
		</div>
	</nav>

	<br><br>
	<div style="background-color: white;">
		<br>
		<hr>
		<h3 class="container text-danger"><?php echo $_SESSION['usuarioNome'];	?></h3>
		<hr>
		<ul class="container nav nav-tabs">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Atividades</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../atividade/inseriratividade.php">Inserir Atividade</a>
					<a class="dropdown-item" href="../atividade/editaratividade.php">Atualizar Atividade</a>
					<a class="dropdown-item" href="../atividade/excluiratividade.php">Remover Atividade</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Enquetes</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../enquete/inserirenquete.php">Inserir Enquete</a>
					<a class="dropdown-item" href="../enquete/editarenquete.php">Atualizar Enquete</a>
					<a class="dropdown-item" href="../enquete/excluirenquetes.php">Remover Enquete</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Notícias</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../noticia/inserirnoticia.php">Inserir Notícia</a>
					<a class="dropdown-item" href="../noticia/editarnoticia.php">Editar Notícia</a>
					<a class="dropdown-item" href="../noticia/excluirnoticia.php">Remover Notícia</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Editais</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="inseriredital.php">Inserir Edital</a>
					<a class="dropdown-item" href="editaredital.php">Atualizar Edital</a>
					<a class="dropdown-item" href="excluiredital.php">Remover Edital</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Eventos</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../evento/inserirevento.php">Inserir Evento</a>
					<a class="dropdown-item" href="../evento/editarevento.php">Editar Evento</a>
					<a class="dropdown-item" href="../evento/excluirevento.php">Remover Evento</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Membros</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../membro/inseremembro.php">Inserir Membro</a>
					<a class="dropdown-item" href="../membro/editamembro.php">Atualizar Membro</a>
					<a class="dropdown-item" href="../membro/excluimembro.php">Remover Membro</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Planos de Mandato</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../mandato/inseremandato.php">Inserir Plano</a>
					<a class="dropdown-item" href="../mandato/editamandato.php">Atualizar Plano</a>
					<a class="dropdown-item" href="../mandato/excluimandato.php">Remover Plano</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estatuto</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../estatuto/insereestatuto.php">Inserir Estatuto</a>
					<a class="dropdown-item" href="../estatuto/editaestatuto.php">Atualizar Estatuto</a>
					<a class="dropdown-item" href="../estatuto/excluiestatuto.php">Remover Estatuto</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admnistradores</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../adm/insereadm.php">Inserir Adm</a>
					<a class="dropdown-item" href="../adm/editaadm.php">Atualizar Adm</a>
					<a class="dropdown-item" href="../adm/excluiadm.php">Remover Adm</a>
				</div>
			</li>
		</ul>
	</div>
	<div class="container">
		
		<?php 
		include '../conexao.php';

		$id = $_POST['idEdital'];
		$titulo = $_POST["titulo"];
		$subtitulo = $_POST["subtitulo"];
		$texto = $_POST["texto"];
		$titulo1 = "";
		$search = "SELECT idEdital FROM editais WHERE titulo = '$titulo'";
		$searching = mysqli_query($con, $search);
		$validations = mysqli_fetch_array($searching);
		$sql = "SELECT * FROM editais WHERE idEdital = '$id'";
		$query = mysqli_query($con, $sql);
		

		while ($edital = mysqli_fetch_array($query)) {
			$titulo1 = $edital['titulo'];
			$novo_nome = $edital['imagem'];
		}
		$a = $titulo1;
		$b = $titulo;

		if(!$validations or $a == $b){
			$sql_unlike = "SELECT * FROM editais WHERE idEdital = '$id'";
			$query_unlike = mysqli_query($con, $sql_unlike);
			$extensao = strtolower(substr($_FILES['input-file']['name'], -4));//pega a extensão do arquivo

			if ($extensao != "") {
				$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
				$diretorio = "../uploadsImages/"; //define o diretório para onde enviaremos o arquivo
				move_uploaded_file($_FILES['input-file']['tmp_name'], $diretorio.$novo_nome); //efetua upload
			}

			setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
			date_default_timezone_set('America/manaus');
			$atualizacao = utf8_encode(ucwords(strftime('%A')).', '.strftime('%d').' de '.ucwords(strftime('%B')).' de '.strftime('%Y')).', '.date("H:i");

			$query = "UPDATE editais SET titulo = '$titulo', subtitulo = '$subtitulo', imagem = '$novo_nome', texto = '$texto', atualizacao = '$atualizacao' WHERE idEdital = '$id'";

			$texto = nl2br($texto);

			if (mysqli_query($con, $query)) {

				while ($edital = mysqli_fetch_array($query_unlike)) {
					$tituloo = $edital['titulo'];
					$imagem = $edital['imagem'];
					unlink("paginas/".$tituloo.".php");
					if ($extensao != "") {
						unlink("../uploadsImages/".$imagem);
					}
				}
				$sql = "SELECT * from editais where idEdital = (select max(idEdital) from editais)";

				$query = mysqli_query($con, $sql);

				$id = 0;

				while ($noticia = mysqli_fetch_array($query)) {
					$id = $noticia['idEdital'];

				}


				mysqli_close($con);



				$sql = '$sql';
				$query = '$query';
				$con = '$con';
				$noticia = '$noticia';
				$id1 = '$id1';
				$titulo1 ='$titulo1';
				$subtitulo1 ='$subtitulo1';
				$imagem1 ='$imagem1';
				$texto1 = '$texto1';
				$texto1 = '$texto1';
				$publicacao1 = '$publicacao1';
				$atualizacao1 = '$atualizacao1';
				$arquivo = '$arquivo';
				$html = "
				<!DOCTYPE html>
				<!-- saved from url=(0053)http://getbootstrap.com.br/docs/4.1/examples/sign-in/ -->
				<html lang='pt-br'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>

				<title>Notícias</title>

				<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
				<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
				<link rel='shortcout icon' type='logo/x-icon' href='../../Imagens/favicon.png'/>
				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
				<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
				<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
				<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>   
				<link rel='stylesheet' href='../../css/signin.css'>
				<link href='https://fonts.googleapis.com/css?family=Markazi+Text:500' rel='stylesheet'>
				<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
				<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet'>  
				<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
				<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' integrity='sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr' crossorigin='anonymous'><link href='https://fonts.googleapis.com/css?family=Cormorant+Garamond' rel='stylesheet'>
				<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
				<!-- Theme style  -->
				<link rel='stylesheet' href='css/style.css'>

				</head>

				<body style='background:#f3ead2;'>
				<?php

				include '../../conexao.php';
				".$sql." = 'SELECT * FROM editais WHERE idEdital = ".$id."';
				".$query." = mysqli_query(".$con.", ".$sql.");

				while (".$noticia." = mysqli_fetch_array(".$query.")) {
					".$id1." = ".$noticia."['idNoticias'];
					".$titulo1." = ".$noticia."['titulo'];
					".$subtitulo1." = ".$noticia."['subtitulo'];
					".$imagem1." = ".$noticia."['imagem'];
					".$texto1." = ".$noticia."['texto'];
					".$texto1." = nl2br(".$texto1.");
					".$publicacao1." = ".$noticia."['publicacao'];
					".$atualizacao1." = ".$noticia."['atualizacao'];
				}
				".$sql." = 'SELECT * FROM estatuto';
				".$query." = mysqli_query(".$con.", ".$sql.");

				while(".$noticia." = mysqli_fetch_array(".$query.")) {
					".$arquivo." = ".$noticia."['arquivo'];
				}
				?>

				<!-- INICIO Navbar principal do site -->
				<nav style='background-color: white;' class='navbar fixed-top navbar-light navbar-expand-lg' id='mainNav'>
				<div class='container'>
				<div style='overflow: hidden; width: 55%;'><a href='../../../index.php' style=''><img src='../../imagens/GRIFRO.png' alt='Logo GRIFRO' class='navbar-brand imagem-responsiva' ></a></div>
				<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo02' aria-controls='navbarTogglerDemo02' aria-expanded='false' aria-label='Toggle navigation'>
				<span class='navbar-toggler-icon'></span>
				</button>
				<div class='collapse navbar-collapse'  id='navbarTogglerDemo02'>
				<ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
				<li class='nav-item'>
				<a class='nav-link js-scroll-trigger' href='../../../index.php'>Home<span class='sr-only'>(current)</span></a>
				</li>
				<li class='nav-item'>
				<a class='font nav-link js-scroll-trigger' href='../estatuto/arquivos/<?php echo $arquivo;?>' target='_blank'>Estatuto<span class='sr-only'>(current)</span></a>
				</li>
				<li class='nav-item'>
				<a class='nav-link js-scroll-trigger' href='../../../enquetes.php'>Enquetes<span class='sr-only'>(current)</span></a>
				</li>
				<li class='nav-item'>
				<a class='font nav-link js-scroll-trigger' href='../../../noticias.php'>Notícias<span class='sr-only'>(current)</span></a>
				</li>
				<li class='nav-item'>
				<a class='font nav-link js-scroll-trigger' href='../../../editais.php'>Editais<span class='sr-only'>(current)</span></a>
				</li>
				<li class='nav-item'>
				<a class='font nav-link js-scroll-trigger' href='../../../eventos.php'>Eventos<span class='sr-only'>(current)</span></a>
				</li>
				<li class='nav-item'>
				<a class='font nav-link js-scroll-trigger' href='../../../contato.php'>Contato<span class='sr-only'>(current)</span></a>
				</li>
				</ul>
				</div>
				</div>
				</nav><br><br><br>
				<style type='text/css'>
				h3{
					font-family: 'Cormorant Garamond', serif;
					color: black;
					font-size: 50px;
					text-align: center;
				}
				span{
					color: gray;
					font-size: 14px;
				}
				ul{
					text-decoration: none;
					display: inline-block;
					list-style: none;	
					margin: 0;
					margin-left: 10px;
					padding: 0;
					position: absolute;
				}
				@media (max-width: 991px){
					ul.redes{
						position: relative;
						margin: 0;
					}
				}
				.redes li{
					float: left;
					padding: 0 10px;
					bottom: 0;
					margin: 0;
				}
				.fab{
					font-size: 22px;
					color: #bb2a38;
				}
				.paragrafo{
					font-size: 18px;
					color:black; 
					text-align: justify;
					margin: 20px; 
					font-family: 'Lora', serif;
				}
				.subtitulo{
					font-size: 18px;
					color:#544444; 
					text-align: justify;
					margin: 20px;
					font-family: 'Cormorant Garamond', serif;
				}
				</style>

				<div class='container'>
				<h3><?php echo $titulo1; ?></h3><br>
				<span>Publicado: <?php echo $publicacao1; ?>	|	Última atualização em <?php echo $atualizacao1; ?></span>
				<ul class='redes'>
				<li>
				<a href='http://www.linkedin.com/shareArticle?mini=true&url=https://site.com.br&title=Botões de compartilhamento'  target='_blank' title='Compartilhar no LinkedIn'>
				<i class='fab fa-linkedin'></i>
				</a>
				</li>
				<li>
				<a href='http://twitter.com/share?text=Botões de compartilhamento&url=https://site.com.br/'  target='_blank' data-role='shareLink' title='Compartilhar no Twitter'>
				<i class='fab fa-twitter'></i>
				</a>
				</li>
				<li>
				<a href='https://www.facebook.com/sharer/sharer.php?u=https://seusite.com.br/' target='_blank' title='Compartilhar no Facebook'>
				<i class='fab fa-facebook'></i>
				</a>
				</li>
				<li>
				<a href='whatsapp://send?text=Acesse: - http://codecommit.com.br' target='_blank' title='Compartilhar no Whatsapp'>
				<i class='fab fa-whatsapp'></i>
				</a>
				</li>
				<li>
				<a href='https://plus.google.com/share?url=https://seusite.com.br/'  target='_blank'  title='Compartilhar no Google '>
				<i class='fab fa-google-plus'></i>
				</a>
				</li>
				<li>
				<a href='http://pinterest.com/pin/create/button/?url=https://seusite.com.br/&media=https://seusite.com.br/uploads/imagem.png' target='_blank' title='Share on Pinterest'>
				<i class='fab fa-pinterest'></i>
				</a>
				</li>
				</ul>

				<p class='subtitulo'><b><?php echo $subtitulo1;?></b></p>
				<center><img style='width: 80%; height: auto;' src='../../uploadsImages/<?php echo  $imagem1;?>'></center>

				<p class='paragrafo'><?php echo $texto1;?></p>
				</div>

				<footer class='final' style='background-color: #b1a584;'>
				<center>
				Desenvolvido por: <a href='https://twitter.com/vitu_xisto'><b>Vituriano</b></a>,
				<a href=''><b>Nícolas</b></a>, 
				<a href=''><b>Luís</b></a>,
				<a href=''><b>Saimor</b></a> e 
				<a href=''><b>Lucas</b></a>
				</center>
				</footer>
				</body>
				</html>
				";
				printf(" <center>
					<h1>%s</h1>
					<h4 class='text-muted'>%s</h4>
					<img class='imgupdate' src='../uploadsImages/%s' alt='Imagem'>
					<p class='paragrafoupdate'><br>%s</p>
					<a  style='float:right;' href='editaredital.php'>
					</center>
					<button type='button' class='btn btn-success'>Continuar</button>
					</a>
					<br><br>", $titulo, $subtitulo, $novo_nome, $texto);
				file_put_contents('paginas/'.$titulo.'.php', $html);  

			} else {
				echo "Erro: " . mysqli_error($con);
			}	
		}else{
			echo '<script type="text/javascript">alert("Não foi possivel fazer as mudanças, existe um edital com mesmo título já cadastrado");</script>';
			echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editaredital.php">';
		}
		?>


		<style type="text/css">
		.imgupdate{
			width: 60%;
		}
		.paragrafoupdate{
			font-size: 16px;
		}
	</style>
</div>
<footer class="final" style="background-color: #253f55;">
	<center>
		Desenvolvido por: <a href="https://twitter.com/vitu_xisto"><b>Vituriano</b></a>,
		<a href=""><b>Nícolas</b></a>, 
		<a href=""><b>Luís</b></a>,
		<a href=""><b>Saimor</b></a> e 
		<a href=""><b>Lucas</b></a>
	</center>
</footer>
</body>
</html>