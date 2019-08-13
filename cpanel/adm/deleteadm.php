<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include "../conexao.php";

$id = $_POST['idusuarios'];

$sql_code = "DELETE FROM usuarios WHERE idusuarios = '$id'";
$sql_query = mysqli_query($con, $sql_code);

if($sql_query) {

	echo "<script> location.href='excluiadm.php'; </script>";

}else {
	echo "<script> alert('Não foi possível deletar o administrador :(');
	location.href='excluiadm.php'; </script>";
}
?>