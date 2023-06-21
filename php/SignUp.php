<?php
include_once("config.php");

$nome = $_POST['campo-nome'];
$email = $_POST['campo-email'];
$senha = $_POST['campo-senha'];
$confirmarSenha = $_POST['campo-confirmar_senha'];
$tipo = 'cliente'; // Definimos o tipo de usuário como "Cliente"

// Verificar se o email já está cadastrado
$query = "SELECT * FROM usuario WHERE email = '$email' LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo '<script language="JavaScript" charset="utf-8">alert("Este e-mail já está cadastrado no sistema!")</script>';
} elseif ($senha !== $confirmarSenha) {
    echo '<script language="JavaScript" charset="utf-8">alert("As senhas não coincidem!")</script>';
} else {
    // Criar o hash da senha
    $senhaHash = base64_encode($senha);

    // Inserir o novo usuário no banco de dados
    $query = "INSERT INTO usuario (nome, email, senha, tipo, primeiro_acesso) VALUES ('$nome', '$email', '$senhaHash', '$tipo', 0)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script language="JavaScript" charset="utf-8">alert("Cadastrado com sucesso!")</script>';
        echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../index.html">';
    } else {
        echo '<script language="JavaScript" charset="utf-8">alert("Falha ao cadastrar usuário!")</script>';
    }
}
