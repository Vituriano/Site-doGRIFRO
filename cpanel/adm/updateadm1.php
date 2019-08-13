<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include '../conexao.php';

$id = $_POST["idusuarios"];
$nome = $_POST["titulo"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$search = "SELECT idusuarios FROM usuarios WHERE email = '$email'";
$searching = mysqli_query($con, $search);
$validations = mysqli_fetch_array($searching);

$sql = "SELECT * FROM usuarios WHERE email = '$email' and idusuarios = '$id'";
$query = mysqli_query($con, $sql);
$email1 = "";
while ($usuario = mysqli_fetch_array($query)) {
	$email1 = $usuario['email'];
}
$a = $email1;
$b = $email;
if(!$validations or $a == $b){

	$query = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE idusuarios = '$id'";

	if (mysqli_query($con, $query)) {
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editaadm.php">';
	} else {
		echo "Erro: " . mysqli_error($con);
	}	
}else{
	echo '<script type="text/javascript">alert("Não foi possivel fazer as mudanças, já existe um usuário cadastrado com esse E-mail");</script>';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editaadm.php">';
}
?>
