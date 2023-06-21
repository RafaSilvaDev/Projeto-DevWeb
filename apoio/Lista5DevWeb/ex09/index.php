<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form em PHP e HTML</title>
</head>
<style>
    main form {
        display: flex;
        flex-direction: column;
        align-items: start;
    }
</style>

<body>
    <main>
        <form action="" method="post">
            <label for="role">Selecione seu cargo</label>
            <select name="role" id="role">
                <option value="0.1">Gerente</option>
                <option value="0.2">Engenheiro</option>
                <option value="0.3">Técnico</option>
                <option value="0.4">Outro</option>
            </select>

            <label for="sal">Insira seu salário</label>
            <input type="number" name="sal" id="sal" placeholder="Insira o valor aqui">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    $role = $_POST['role'];
    $sal = $_POST['sal'];

    echo "Seu novo salário com o reajuste será de: R$", $sal + ($sal*$role), ".";
    ?>
</body>

</html>