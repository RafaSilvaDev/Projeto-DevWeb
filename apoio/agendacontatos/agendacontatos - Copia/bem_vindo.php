		<div class="container theme-showcase" role="main">
			<?php
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$data = date('Y-m-d');
				$hora = date('H:i:s');				
				if (($hora >= 0) AND ($hora < 6)) {
					$mensagem = "Boa madrugada";
				}else if (($hora >= 6) AND ($hora < 12)) {
					$mensagem = "Bom dia";
				}else if (($hora >= 12) AND ($hora < 18)) {
					$mensagem = "Boa tarde";
				}else {
					$mensagem = "Boa noite";
				}
				echo '<div class="page-header">';
				echo "<h1>".$mensagem." ".$_SESSION['nome']."</h1><p>";
				echo "<br>Último acesso em: ".$_SESSION['ultimoacesso']."<p>";
				echo strftime("<p>Hoje é %A, %d de %B de %Y ",strtotime($data)); 
				<script type="text/javascript" src="standardclock1.js"></script>?>
			