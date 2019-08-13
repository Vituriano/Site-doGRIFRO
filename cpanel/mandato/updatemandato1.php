<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

include '../conexao.php';

$id = $_POST['idmandato'];
$titulo = $_POST["titulo"];
$ano = $_POST["ano"];
$ano1 = "";
$search = "SELECT idmandato FROM mandato WHERE ano = '$ano'";
$searching = mysqli_query($con, $search);
$validations = mysqli_fetch_array($searching);

$sql = "SELECT * FROM mandato WHERE ano = '$ano' and idmandato = '$id'";
$query = mysqli_query($con, $sql);

$sql_unlike = "SELECT * FROM mandato WHERE idmandato = '$id'";
$query_unlike = mysqli_query($con, $sql_unlike);
while ($mandato = mysqli_fetch_array($query)) {
	$ano1 = $mandato['ano'];
}
$a = $ano1;
$b = $ano;
if(!$validations or $a == $b){


	$extensao = strtolower(substr($_FILES['input-file']['name'], -4)); //pega a extensão do arquivo
	$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
	$diretorio = "arquivos/"; //define o diretório para onde enviaremos o arquivo

	move_uploaded_file($_FILES['input-file']['tmp_name'], $diretorio.$novo_nome); //efetua upload

	$query = "UPDATE mandato SET nome = '$titulo', ano = '$ano', arquivo = '$novo_nome' WHERE idmandato = '$id'";


	if (mysqli_query($con, $query)) {

		while ($mandato = mysqli_fetch_array($query_unlike)) {
			$tituloo = $mandato['arquivo'];
			unlink("arquivos/".$tituloo);
			echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editamandato.php">';
		}

	} 
}else{
	echo '<script type="text/javascript">alert("Não foi possivel fazer as mudanças, já existe um documento cadastrado para o ano informado");</script>';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editamandato.php">';
}
?>
