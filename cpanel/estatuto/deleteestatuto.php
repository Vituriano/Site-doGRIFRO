<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include "../conexao.php";

$id = $_POST['idestatuto'];

$sql = "SELECT * FROM estatuto WHERE idestatuto = '$id'";
$query = mysqli_query($con, $sql);

$sql_code = "DELETE FROM estatuto WHERE idestatuto = '$id'";
$sql_query = mysqli_query($con, $sql_code);

if($sql_query) {

	if ($query) {
		while ($estatuto = mysqli_fetch_array($query)) {
			$titulo = $estatuto['arquivo'];
			unlink("arquivos/".$titulo);
			echo "<script> location.href='excluiestatuto.php'; </script>";
		}
	}
}else {
	echo "<script> alert('Não foi possível deletar o estatuto :(');
	location.href='excluiestatuto.php'; </script>";
}



?>