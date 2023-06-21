<?php
require 'config.php';

$email = $_POST['campo-email'];
$senha = $_POST['campo-senha'];
$confirmarSenha = $_POST['campo-confirmar_senha'];

if ($senha !== $confirmarSenha) {
    echo '<script language="JavaScript" charset="utf-8">alert("As senhas não coincidem!")</script>';
} else {
    // Gerar o hash da nova senha
    $senhaHash = base64_encode($senha);

    // Atualizar a senha e definir o primeiro acesso como 0 (já que a senha foi redefinida)
    $query = "UPDATE usuarios SET senha = '$senhaHash', primeiro_acesso = 0 WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script language="JavaScript" charset="utf-8">alert("Logado com sucesso!")</script>';
        echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../pages/Solicitacoes.html">';
    } else {
        echo '<script language="JavaScript" charset="utf-8">alert("Falha ao resetar senha. Tente novamente!")</script>';
        echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../pages/Solicitacoes.html">';
    }
}
