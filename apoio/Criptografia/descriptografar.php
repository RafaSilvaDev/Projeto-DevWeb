<?php
include_once("conexao.php");

$usuario = $_POST["user-field"];
$senha = $_POST["password-field"];
$senha_criptografada = base64_encode($senha);
$insercao = "SELECT id, login, senha FROM usuario WHERE login='$usuario' and senha='$senha_criptografada' ORDER BY id";

$query = mysqli_query($conexao, $insercao);
$num_rows = mysqli_num_rows($query);
if($num_rows != 0){
    echo '<script language="JavaScript" charset="utf-8">alert("Logado com sucesso!")</script>';
} else {
    echo '<script language="JavaScript" charset="utf-8">alert("Usuário não encontrado!")</script>';
}
