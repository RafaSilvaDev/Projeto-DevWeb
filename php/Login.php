<?php
session_start();

if (isset($_POST['submit'])) {
    require 'config.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];

    // Consultar o banco de dados para verificar se o usuário existe
    $query = "SELECT * FROM usuarios WHERE email = '$email' AND tipo = '$tipo' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);

        // Verificar a senha
        if (password_verify($senha, $usuario['senha'])) {
            
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_tipo'] = $usuario['tipo'];

            if ($usuario['tipo'] == 'Proprietario') {
                if ($usuario['primeiro_acesso'] == 1) {
                    // Redirecionar para a página de reset de senha
                    header('Location: reset_senha.php');
                    exit();
                } else {
                    // Redirecionar para a página do proprietário
                    header('Location: proprietario.php');
                    exit();
                }
            } else {
                // Redirecionar para a página do cliente
                header('Location: cliente.php');
                exit();
            }
        } else {
            $erro = "Senha incorreta";
        }
    } else {
        $erro = "Usuário não encontrado";
    }
}
?>
