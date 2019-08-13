<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");
include '../conexao.php';

$nome = $_POST["titulo"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$link = $_POST["link"];

$search = "SELECT idusuarios FROM usuarios WHERE email = '$email'";
$searching = mysqli_query($con, $search);
$validations = mysqli_fetch_array($searching);

if(!$validations){

	$query = "INSERT INTO usuarios (nome, email, senha, link) VALUES('$nome', '$email','$senha', '$link');";


	if (mysqli_query($con, $query)) {

	}
	mysqli_close($con);
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editaadm.php">';
}else{
	$_SESSION['admrepetido'] = "Esse usuário já está cadastrado";
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=insereadm.php">';
}
?>
