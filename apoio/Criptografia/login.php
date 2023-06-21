<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Criptografado - Natureza Viva</title>
</head>

<body>
    <main>
        <div class="panel">
            <form name="login" method="POST" action="descriptografar.php">
                <label for="user">Usuário</label>
                <input id="user" type="text" name="user-field">
                <label for="password">Senha</label>
                <input id="password" type="password" name="password-field">
                <input type="submit" value="Enviar">
            </form>
            <p>Não possui login? <a href="cadastro.php">cadastre-se</a></p>
        </div>
    </main>
</body>

</html>

