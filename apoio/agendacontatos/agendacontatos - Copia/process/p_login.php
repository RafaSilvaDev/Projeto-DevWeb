<?php
   include "../conexao_mysql.php";
   $login=$_POST["usuario"];
   $senha=$_POST["senha"];
	$sql_logar = mysqli_query($conexao,"SELECT * FROM usuario WHERE login = '$login' && senha = '$senha'");    
    $sql_campos = mysqli_fetch_assoc($sql_logar);
    if (mysqli_num_rows($sql_logar) == 0){
		echo '<script language="JavaScript" charset="utf-8">alert("Login Inválido!")</script>';
		echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../login.php">';
    }
    else{
    	session_start();
		$_SESSION["usuario"] = $_POST["usuario"];
		$_SESSION["senha"]   = $_POST["senha"];
		$_SESSION["nome"]    = $sql_campos["nome"];
		header("Location: ../principal.php");     
    }

?>
