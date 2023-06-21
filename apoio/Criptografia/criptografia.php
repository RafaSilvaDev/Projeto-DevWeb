<?php
include_once("conexao.php");

$usuario = $_POST["user-field"];
$senha = $_POST["password-field"];
$senha_criptografada = base64_encode($senha);
$senha_descriptografada = base64_decode($senha_criptografada);
$insercao = "INSERT INTO usuario (login, senha) VALUES ('$usuario', '$senha_criptografada')";

$query = mysqli_query($conexao, $insercao);
echo '<script language="JavaScript" charset="utf-8">alert("Cadastrado com sucesso!")</script>';
echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=login.php">';