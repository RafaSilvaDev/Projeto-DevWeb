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
            <label for="yold">Insira sua idade</label>
            <input type="number" name="yold" id="yold" placeholder="Insira o valor aqui">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    $yold = $_POST['yold'];

    if ($yold < 16) {
        echo "Você ainda não pode votar.";
    } elseif ($yold >= 18 && $yold <= 65) {
        echo "Você possui obrigatoriedade em votar.";
    } elseif (($yold >= 16 && $yold < 18) || ($yold > 65)) {
        echo "Você possui voto facultativo.";
    }
    ?>
</body>

</html>