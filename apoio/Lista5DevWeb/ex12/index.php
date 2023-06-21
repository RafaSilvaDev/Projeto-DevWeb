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
            <label for="hours">Insira uma hora</label>
            <input type="number" name="hours" id="hours" placeholder="Insira uma hora aqui">
            
            <label for="minutes">Insira um minuto</label>
            <input type="number" name="minutes" id="minutes" placeholder="Insira uma hora aqui">

            <label for="seconds">Insira um segundo</label>
            <input type="number" name="seconds" id="seconds" placeholder="Insira uma hora aqui">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    $hours = $_POST['hours'];
    $minutes = $_POST['minutes'];
    $seconds = $_POST['seconds'];

    // 3600 é uma hora em segundos
    echo "O horário inserido vale ", (($hours*3600) + ($minutes*60) + $seconds), " segundos.";
    ?>
</body>

</html>