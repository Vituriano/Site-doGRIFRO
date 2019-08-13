<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include '../conexao.php';

$id = $_POST['idmembro'];
$nome = $_POST["titulo"];
$ano = $_POST["ano"];
$cargo = $_POST["cargo"];
$twitter = $_POST["twitter"];
$facebook = $_POST["facebook"];
$linkedin = $_POST["linkedin"];
$email = $_POST["email"];

$sql_unlike = "SELECT * FROM membros WHERE idmembro = '$id'";
$query_unlike = mysqli_query($con, $sql_unlike);


$extensao = strtolower(substr($_FILES['input-file']['name'], -4)); //pega a extensão do arquivo
$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
$diretorio = "fotos/"; //define o diretório para onde enviaremos o arquivo

move_uploaded_file($_FILES['input-file']['tmp_name'], $diretorio.$novo_nome); //efetua upload

$query = "UPDATE membros SET nome = '$nome', ano_atuacao = '$ano', imagem = '$novo_nome', cargo = '$cargo', twitter = '$twitter', facebook = '$facebook', linkedin = '$linkedin', email = '$email' WHERE idmembro = '$id'";

if (mysqli_query($con, $query)) {

	while ($mandato = mysqli_fetch_array($query_unlike)) {
		$tituloo = $mandato['imagem'];
		unlink("fotos/".$tituloo);
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editamembro.php">';
	}

} else{
	echo '<script type="text/javascript">alert("Não foi possivel fazer as mudanças");</script>';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editamembro.php">';
}
?>
