<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");
include '../conexao.php';

$nome = $_POST["titulo"];
$ano = $_POST["ano"];
$cargo = $_POST["cargo"];
$twitter = $_POST["twitter"];
$facebook = $_POST["facebook"];
$linkedin = $_POST["linkedin"];
$email = $_POST["email"];

$extensao = strtolower(substr($_FILES['input-file']['name'], -4)); //pega a extensão do arquivo
$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
$diretorio = "fotos/"; //define o diretório para onde enviaremos o arquivo

move_uploaded_file($_FILES['input-file']['tmp_name'], $diretorio.$novo_nome); //efetua upload

$query = "INSERT INTO membros (nome, imagem, ano_atuacao, cargo, twitter, facebook, linkedin, email) VALUES('$nome', '$novo_nome' /*referente ao arquivo*/, '$ano', '$cargo', '$twitter', '$facebook', '$linkedin', '$email');";


if (mysqli_query($con, $query)) {
	mysqli_close($con);
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editamembro.php">';
}


?>
