<?php
include "conexao.php";
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <title>Cadastro</title>
</head>

<body>
    <form method="post" action="administra.php">
        <h1>Incluir Produtos</h1>
        <input type="hidden" name="operacao" value="incluir">
        <p>Código <input type="text" size="10" name="codigo" required>
        <p>Nome do Produto <input type="text" size="50" name="nome" required></p>
        <p>Preço <input type="text" size="10" name="preco" required>
        <p><input type="submit" value="Incluir Produto" name="enviar"></p>
    </form>
    <form method="post" action="administra.php">
        <h1>Excluir Produtos</h1>
        <input type="hidden" name="operacao" value="excluir">
        <p>Código <input type="text" size="10" name="codigo">
        <p><input type="submit" value="Excluir Produto" name="enviar"></p>
    </form>
    <form method="post" action="administra.php">
        <h1>Mostrar Produtos</h1>
        <input type="hidden" name="operacao" value="mostrar">
        <p>Clique no botão abaixo para exibir todos os produtos da loja.</p>
        <p><input type="submit" value="Mostrar Produto" name="enviar"></p>
    </form>
    <form method="post" action="administra.php">
        <h2>Alterar Produtos</h2>
        <input type="hidden" name="operacao" value="alterar">
        <p>Código <input type="text" size="10" name="codigo" required>
        <p>Nome do Produto <input type="text" size="20" name="nome" required></p>
        <p>Preço <input type="text" size="10" name="preco" required>
        <p><input type="submit" value="Alterar Produto" name="enviar"></p>
</body>

</html>