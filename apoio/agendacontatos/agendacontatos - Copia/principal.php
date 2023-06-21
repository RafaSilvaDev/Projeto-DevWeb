<?php
	session_start();
	include "seguranca.php";
	include "conexao_mysql.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Página Principal</title>
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/theme.css" rel="stylesheet">
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<script src="js/ie-emulation-modes-warning.js"></script>
		<script src="js/jquery.js"></script>
	</head>
	<body role="document">		
		<?php
			include("menu.php");
			if(isset($_GET["link"]) && $_GET["link"] != ""){
				$link = $_GET["link"];
				switch ($link) {
					case 01:
						include "cadastro.php";
						break;
					case 03:
						include "relatorios.php";
						break;
					case 04:
						include "inserir_contato.php";
						break;
					case 05:
						include "consulta_contato.php";
						break;
					case 6:
						include "atualiza_contato.php";
						break;
					case 7:
						include "exclui_contato.php";
						break;
					case 11:
						include "confirmaatualizacao_contato.php";
						break;	
					default:
						include "bem_vindo.php";
						break;
				}
			}else{
				include "bem_vindo.php";
			}	
		?>				
		<script src="js/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/docs.min.js"></script>
		<script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
