<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include "../conexao.php";

$id = $_POST['idmandato'];

$sql = "SELECT * FROM mandato WHERE idmandato = '$id'";
$query = mysqli_query($con, $sql);

$sql_code = "DELETE FROM mandato WHERE idmandato = '$id'";
$sql_query = mysqli_query($con, $sql_code);

if($sql_query) {

	if ($query) {
		while ($mandato = mysqli_fetch_array($query)) {
			$titulo = $mandato['arquivo'];
			unlink("arquivos/".$titulo);
			echo "<script> location.href='excluimandato.php'; </script>";
		}
	}
}else {
	echo "<script> alert('Não foi possível deletar o plano de mandato :(');
	location.href='excluimandato.php'; </script>";
}



?>