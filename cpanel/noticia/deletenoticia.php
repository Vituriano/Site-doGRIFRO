<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include "../conexao.php";

$id = $_POST['idNoticias'];
$sql = "SELECT * FROM noticias WHERE idNoticias = '$id'";
$query = mysqli_query($con, $sql);
$sql_code = "DELETE FROM noticias WHERE idNoticias = '$id'";
$sql_query = mysqli_query($con, $sql_code);

if($sql_query) {

	if ($query) {
		while ($noticia = mysqli_fetch_array($query)) {
			$titulo = $noticia['titulo'];
			$imagem = $noticia['imagem'];
			unlink("paginas/".$titulo.".php");
			unlink("../uploadsImages/".$imagem);
			echo "<script> location.href='excluirnoticia.php'; </script>";
		}
	}
}else {
	echo "<script> alert('Não foi possível deletar a notícia :(');
	location.href='excluirnoticia.php'; </script>";
}



?>