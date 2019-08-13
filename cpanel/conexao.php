<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "noticias";
	$con = mysqli_connect($host, $user, $pass) or die (mysql_error());
	mysqli_select_db($con, $banco);
	mysqli_set_charset($con,"utf8");
?>