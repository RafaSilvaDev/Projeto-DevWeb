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
            <label for="num">Insira um número</label>
            <input type="number" name="num" id="num" placeholder="Insira um valor aqui">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    $num = $_POST['num'];

    if ($num<0) {
        echo "O número inserido é um número negativo.";
    } else {
        echo "O número inserido é um número positivo.";
    }
    ?>
</body>

</html>