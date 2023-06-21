<?php include "conexao_mysql.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
        img{border-radius: 50px;}
    </style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class='navbar navbar-inverse navbar-fixed-top'>
			<div class='container'>
				<a class='navbar-brand' href='principal.php'>PÁGINA INICIAL</a>
				<ul class='nav navbar-nav'>
					<li class='dropdown'>
						<!-- Observe o exemplo abaixo. Ele chama principal.php levando o valor 1 com a variável link.
							 No arquivo principal.php ele analisará o switch e executará a opção
						-->
						<a href='principal.php?link=01' class='dropdown-toggle'>Pessoas</a>
					</li>
					<li class='dropdown'>
						<a href='principal.php?link=03' class='dropdown-toggle'>Relatórios</a>
					</li>
					<li class='dropdown'>
						<a href='principal.php?link=6' class='dropdown-toggle'>Atualizar</a>
					</li>
					<li class='dropdown'>
						<a href='principal.php?link=7' class='dropdown-toggle'>Excluir</a>
					</li>
				</ul>				
				<ul class='nav navbar-nav navbar-right'>
					<li>
					<?php
					 $usuario=$_SESSION['usuario'];
					 $campoimagem = mysqli_query($conexao,"SELECT * FROM usuario WHERE login = '$usuario'"); 
					 $sql_campo = mysqli_fetch_assoc($campoimagem);
					 echo "<img src='imagens/pessoas/".$sql_campo['foto']."' width=50 height=50>"; ?>					 
					</li>
					<li><a href='sair.php'>Sair</a></li>
				</ul>
			</div>
		</nav>
</body>
</html>
