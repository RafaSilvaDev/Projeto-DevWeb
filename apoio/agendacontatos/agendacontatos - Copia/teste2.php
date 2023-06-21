<?php
session_start();
?>
<form name="form1" method="POST" action="<?php $PHP_SELF; ?>" >
    <input type="text" name="nome" />
    <input type="submit" name="btn" value="Cadastrar"></input>
    <input type="submit" name="btn" value="Visualizar"></input>
</form>

<?php
if(isset($_POST['nome'])){
//Pronto, aqui a "mágica" acontece
$_SESSION['ta_salvo'] = $_POST['nome'];
}
switch($_POST['btn'])
{
    case "Cadastrar":
    header("Location: registrar.php");
    break;
    
    case "Visualizar":
    header("Location: ver.php");
    break;
}
?>