<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include '../conexao.php';

$id = $_POST['idestatuto'];

$sql_unlike = "SELECT * FROM estatuto WHERE idestatuto = '$id'";
$query_unlike = mysqli_query($con, $sql_unlike);

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/manaus');
$publicacao = utf8_encode(ucwords(strftime('%A')).', '.strftime('%d').' de '.ucwords(strftime('%B')).' de '.strftime('%Y')).', '.date("H:i");

$extensao = strtolower(substr($_FILES['input-file']['name'], -4)); //pega a extensão do arquivo
$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
$diretorio = "arquivos/"; //define o diretório para onde enviaremos o arquivo

move_uploaded_file($_FILES['input-file']['tmp_name'], $diretorio.$novo_nome); //efetua upload

$sql = "UPDATE estatuto SET data = '$publicacao', arquivo = '$novo_nome' WHERE idestatuto = '$id'";


if(mysqli_query($con, $sql)){
	while ($estatuto = mysqli_fetch_array($query_unlike)) {
		$tituloo = $estatuto['arquivo'];
		unlink("arquivos/".$tituloo);
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editaestatuto.php">';
	}
}
?>
