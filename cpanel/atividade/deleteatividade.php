<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include "../conexao.php";

$id = $_POST['idatividades'];
$sql = "SELECT * FROM atividades WHERE idatividades = '$id'";
$query = mysqli_query($con, $sql);
$sql_code = "DELETE FROM atividades WHERE idatividades = '$id'";
$sql_query = mysqli_query($con, $sql_code);

if($sql_query) {

	if ($query) {
		while ($noticia = mysqli_fetch_array($query)) {
			$titulo = $noticia['titulo'];
			$imagem = $noticia['imagem'];
			unlink("paginas/".$titulo.".php");
			unlink("../uploadsImages/".$imagem);
			echo '0';
			echo "<script> location.href='excluiratividade.php'; </script>";
		}
	}
}else {
	echo '0';
	echo "<script> alert('Não foi possível deletar a atividade :);

	location.href='excluiratividade.php'; </script>";
}



?>