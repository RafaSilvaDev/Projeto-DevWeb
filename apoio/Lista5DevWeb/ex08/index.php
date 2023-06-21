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
            <label for="type">Selecione o tipo do veículo</label>
            <select name="type" id="type">
                <option value="8">Tipo A</option>
                <option value="9">Tipo B</option>
                <option value="12">Tipo C</option>
            </select>

            <label for="km">Insira a quantidade de quilômetros rodados:</label>
            <input type="number" name="km" id="km" placeholder="Insira o valor aqui">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    $type = $_POST['type'];
    $km = $_POST['km'];

    echo "O consumo médio do veículo foi de ", $km/$type, " litros.";
    ?>
</body>

</html>