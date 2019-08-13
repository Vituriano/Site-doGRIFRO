<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include "../conexao.php";

$id = $_POST['idmembro'];

$sql = "SELECT * FROM membros WHERE idmembro = '$id'";
$query = mysqli_query($con, $sql);

$sql_code = "DELETE FROM membros WHERE idmembro = '$id'";
$sql_query = mysqli_query($con, $sql_code);

if($sql_query) {

	if ($query) {
		while ($membro = mysqli_fetch_array($query)) {
			$titulo = $membro['imagem'];
			unlink("fotos/".$titulo);
			echo "<script> location.href='excluimembro.php'; </script>";
		}
	}
}else {
	echo "<script> alert('Não foi possível deletar o membro :(');
	location.href='excluimembro.php'; </script>";
}

?>