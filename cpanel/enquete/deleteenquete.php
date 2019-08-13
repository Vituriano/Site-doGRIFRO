<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include "../conexao.php";

$id = $_POST['idEnquete'];
$sql = "SELECT * FROM enquetes WHERE idEnquete = '$id'";
$query = mysqli_query($con, $sql);
$sql_code = "DELETE FROM enquetes WHERE idEnquete = '$id'";
$sql_query = mysqli_query($con, $sql_code);

if($sql_query) {

	if ($query) {
		while ($noticia = mysqli_fetch_array($query)) {
			$imagem = $noticia['imagem'];
			unlink("../uploadsImages/".$imagem);
			echo "<script> location.href='excluirenquetes.php'; </script>";
		}
	}
}else {
	echo "<script> alert('Não foi possível deletar a Enquete :);

	location.href='excluirenquetes.php'; </script>";
}



?>