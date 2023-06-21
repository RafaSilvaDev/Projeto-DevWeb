
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Agenda de Contatos</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
		<style>
			body {
			    background-image: url("imagens/<?php echo rand(1, 5); ?>.JPG");
			    background-repeat: no-repeat;
			    background-size: cover;
				-webkit-background-size: cover; /* SAFARI / CHROME */
				-moz-background-size: cover; /* FIREFOX */
				-ms-background-size: cover; /* IE */
				-o-background-size: cover; /* OPERA */
			}
		</style>
    </head>
	<body>
		<div id="login" class="container" align="center" style="width:350px; height:300px; background: #fff; border: 1px solid; border-color: #dbdbdb; border-radius: 10px;">
			<form class="form-signin" method="POST" action="p_login.php">
				<div class="form-signin">
					<img width="30%" height="30%" src="imagens/logo.png" align="center" />
					<br />
					<br />
					<input type="text" name="usuario" class="form-control" placeholder="Usuário" required autocomplete="off" autofocus>
					<input type="password" name="senha" class="form-control" placeholder="Senha" required autocomplete="off">
					<br />
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="enviar">Entrar</button>					
				</div>
			</form>
			<br />
		</div>
  </body>
</html>
