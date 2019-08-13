<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");
include '../conexao.php';

$titulo = $_POST["titulo"];
$ano = $_POST["ano"];

$search = "SELECT idmandato FROM mandato WHERE ano = '$ano'";
$searching = mysqli_query($con, $search);
$validations = mysqli_fetch_array($searching);
if(!$validations){
	$extensao = strtolower(substr($_FILES['input-file']['name'], -4)); //pega a extensão do arquivo
	$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
	$diretorio = "arquivos/"; //define o diretório para onde enviaremos o arquivo

	move_uploaded_file($_FILES['input-file']['tmp_name'], $diretorio.$novo_nome); //efetua upload

	$query = "INSERT INTO mandato (arquivo, ano, nome) VALUES('$novo_nome' /*referente ao arquivo*/, '$ano', '$titulo');";


	if (mysqli_query($con, $query)) {

	}
	mysqli_close($con);
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editamandato.php">';
}else{
	$_SESSION['mandatorepetido'] = "Esse plano de mandato já está cadastrado";
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=inseremandato.php">';
}
?>
