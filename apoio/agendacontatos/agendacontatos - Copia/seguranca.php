<?php
	ob_start();
	if(($_SESSION['usuario'] == "")||($_SESSION['nome'] == "")){
		$_SESSION['login_erro'] = "Área restrita para usuários cadastrados";
		header("Location: ../login.php");
	}
?>