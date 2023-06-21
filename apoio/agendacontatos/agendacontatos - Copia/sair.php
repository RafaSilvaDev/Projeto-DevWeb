<?php
	session_start();
	include "conexao_mysql.php";
	date_default_timezone_set('America/Sao_Paulo');
	$atual=date('Y-m-d H:i:s');;
	$usuario=$_SESSION["usuario"];
	$salvardata=mysqli_query($conexao,"UPDATE usuario set ultimoacesso='$atual' WHERE login='$usuario'");
	session_destroy();
	//Remover as informações dos usuários.
	unset($_SESSION['usuario'],
		  $_SESSION['senha'],
		  $_SESSION["nome"]);
	header("Location: login.php");
?>
