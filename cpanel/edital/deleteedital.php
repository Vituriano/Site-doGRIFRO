<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include "../conexao.php";

$id = $_POST['idEdital'];
$sql = "SELECT * FROM editais WHERE idEdital = '$id'";
$query = mysqli_query($con, $sql);
$sql_code = "DELETE FROM editais WHERE idEdital = '$id'";
$sql_query = mysqli_query($con, $sql_code);

if($sql_query) {

	if ($query) {
		while ($edital = mysqli_fetch_array($query)) {
			$titulo = $edital['titulo'];
			$imagem = $edital['imagem'];
			unlink("paginas/".$titulo.".php");
			unlink("../uploadsImages/".$imagem);
			echo "<script> location.href='excluiredital.php'; </script>";
		}
	}
}else {
	echo "<script> alert('Não foi possível deletar o edital :(');
	location.href='excluiredital.php'; </script>";
}



?>