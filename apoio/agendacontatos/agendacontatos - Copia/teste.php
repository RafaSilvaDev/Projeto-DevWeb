<form method="POST" action="" name="dados">
Nome: <input type="text" name="oi">
<input type="submit" value="Enviar">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
   $nome=$_POST['oi'];
   echo "oi".$nome;
}
?>
