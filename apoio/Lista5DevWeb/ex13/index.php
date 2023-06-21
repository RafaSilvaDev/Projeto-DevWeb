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
            <label for="increase">Selecione o código de aumento do produto</label>
            <select name="increase" id="increase">
                <option value="0.15">Código 1</option>
                <option value="0.2">Código 2</option>
                <option value="0.35">Código 3</option>
                <option value="0.4">Código 4</option>
            </select>

            <label for="value">Insira o valor do produto</label>
            <input type="number" name="value" id="value" placeholder="Insira o valor aqui">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    $increase = $_POST['increase'];
    $value = $_POST['value'];

    echo "Seu novo valor do produto com o reajuste será de: R$", $value + ($value*$increase), ".";
    ?>
</body>

</html>