<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include "../conexao.php";

$id = $_POST['idEventos'];
$sql = "SELECT * FROM eventos WHERE idEventos = '$id'";
$query = mysqli_query($con, $sql);
$sql_code = "DELETE FROM eventos WHERE idEventos = '$id'";
$sql_query = mysqli_query($con, $sql_code);

if($sql_query) {

	if ($query) {
		while ($evento = mysqli_fetch_array($query)) {
			$titulo = $evento['titulo'];
			$imagem = $evento['imagem'];
			unlink("paginas/".$titulo.".php");
			unlink("../uploadsImages/".$imagem);
			echo "<script> location.href='excluirevento.php'; </script>";
		}
	}
}else {
	echo "<script> alert('Não foi possível deletar o evento :(');
	location.href='excluirevento.php'; </script>";
}



?>