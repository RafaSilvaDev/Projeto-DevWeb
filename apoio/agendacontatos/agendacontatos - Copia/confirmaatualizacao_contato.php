<?php     
    		include_once("seguranca.php");
    		include_once("conexao_mysql.php");
		    $usuario=$_SESSION['nome']; 
		    $id=$_POST['txtIdentificacao'];  
		    $nome=$_POST['txtNome'];
		    $telefone1=$_POST['txtTelefone1'];
		    $atualiza=mysqli_query($conexao,"update contato set nome='$nome', telefone1='$telefone1' where usuario='$usuario' and id='$id'")
		    ;
		    echo '<script language="JavaScript">alert("Contato Atualizado!")</script>';
?>