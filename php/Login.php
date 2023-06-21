<?php
session_start();

require 'config.php';

$email = $_POST['campo-email'];
$senha = $_POST['campo-senha'];
$tipo = $_POST['campo-tipo'];

// Consultar o banco de dados para verificar se o usuário existe
$query = "SELECT * FROM usuario WHERE email = '$email' AND tipo = '$tipo' LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_assoc($result);
    $senha_descriptografada = base64_decode($usuario['senha']);

    // Verificar a senha
    if ($senha == $senha_descriptografada) {

        if ($tipo == 'adm') {
            if ($usuario['primeiro_acesso'] == 1) {
                echo '<script language="JavaScript" charset="utf-8">alert("Logado com sucesso!")</script>';
                echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../pages/ResetPassword.html">';
            } else {
                echo '<script language="JavaScript" charset="utf-8">alert("Logado com sucesso!")</script>';
                echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../pages/Solicitacoes.html">';
                $_SESSION["usuario_id"] = $usuario['id'];
            }
        } else {
            echo '<script language="JavaScript" charset="utf-8">alert("Logado com sucesso!")</script>';
            echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../pages/Home.html">';
            $_SESSION["usuario_id"] = $usuario['id'];
        }
    } else {
        echo '<script language="JavaScript" charset="utf-8">alert("Senha incorreta!")</script>';
        echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../index.html">';
    }
} else {
    echo '<script language="JavaScript" charset="utf-8">alert("Usuário não encontrado!")</script>';
    echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../index.html">';
}
