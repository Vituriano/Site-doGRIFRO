<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");
include '../conexao.php';


$search = "SELECT idestatuto FROM estatuto";
$searching = mysqli_query($con, $search);
$validations = mysqli_fetch_array($searching);
if(!$validations){
	$extensao = strtolower(substr($_FILES['input-file']['name'], -4)); //pega a extensão do arquivo
	$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
	$diretorio = "arquivos/"; //define o diretório para onde enviaremos o arquivo

	move_uploaded_file($_FILES['input-file']['tmp_name'], $diretorio.$novo_nome); //efetua upload

	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/manaus');
	$publicacao = utf8_encode(ucwords(strftime('%A')).', '.strftime('%d').' de '.ucwords(strftime('%B')).' de '.strftime('%Y')).', '.date("H:i");

	$query = "INSERT INTO estatuto (arquivo, data) VALUES('$novo_nome' /*referente ao arquivo*/, '$publicacao');";


	if (mysqli_query($con, $query)) {

	}
	mysqli_close($con);
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=editaestatuto.php">';
}else{
	$_SESSION['estatutorepetido'] = "Já foi cadastrado um estatuto, você pode somente atualizá-lo.";
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=insereestatuto.php">';
}
?>
