<?php
session_start();

if (isset($_POST['submit'])) {
    require 'config.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmar_senha'];
    $tipo = 'Cliente'; // Definimos o tipo de usuário como "Cliente"

    // Verificar se o email já está cadastrado
    $query = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $erro = "O email já está cadastrado.";
    } elseif ($senha !== $confirmarSenha) {
        $erro = "As senhas não coincidem.";
    } else {
        // Criar o hash da senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Inserir o novo usuário no banco de dados
        $query = "INSERT INTO usuarios (nome, email, senha, tipo, primeiro_acesso) VALUES ('$nome', '$email', '$senhaHash', '$tipo', 0)";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: Login.php');
            exit();
        } else {
            $erro = "Erro ao cadastrar o usuário.";
        }
    }
}
?>