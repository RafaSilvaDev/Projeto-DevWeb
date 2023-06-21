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
            <label for="days">Insira quantos dias o cliente ficou hospedado</label>
            <input type="number" name="days" id="days" placeholder="Insira o valor aqui">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    $days = $_POST['days'];
    $total;

    if ($days == 15) {
        $total = 60 + (6 * $days);
    } elseif ($days > 15) {
        $total = 60 + (5.5 * $days);
    } elseif ($days < 15) {
        $total = 60 + (8 * $days);
    }

    echo "O total a pagar pelo cliente é: R$", $total;
    ?>
</body>

</html>