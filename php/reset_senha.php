<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario_id']) || $_SESSION['usuario_tipo'] !== 'Proprietario') {
    // Redirecionar para a página de login se não estiver logado como proprietário
    header('Location: login.php');
    exit();
}

// Verificar se o formulário de redefinição de senha foi enviado
if (isset($_POST['submit'])) {
    require 'config.php';

    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmar_senha'];

    if ($senha !== $confirmarSenha) {
        $erro = "As senhas não coincidem.";
    } else {
        // Gerar o hash da nova senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Atualizar a senha e definir o primeiro acesso como 0 (já que a senha foi redefinida)
        $usuarioId = $_SESSION['usuario_id'];
        $query = "UPDATE usuarios SET senha = '$senhaHash', primeiro_acesso = 0 WHERE id = '$usuarioId'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Redirecionar para a página do proprietário
            header('Location: proprietario.php');
            exit();
        } else {
            $erro = "Erro ao redefinir a senha.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Redefinir Senha</title>
</head>
<body>
    <h2>Redefinir Senha</h2>
    <?php if (isset($erro)) { ?>
        <p><?php echo $erro; ?></p>
    <?php } ?>
    <form method="POST" action="reset_senha.php">
        <label>Nova Senha:</label>
        <input type="password" name="senha" required><br><br>

        <label>Confirmar Senha:</label>
        <input type="password" name="confirmar_senha" required><br><br>

        <input type="submit" name="submit" value="Redefinir Senha">
    </form>
</body>
</html>
