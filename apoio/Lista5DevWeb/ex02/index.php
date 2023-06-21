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
            <label for="level">Selecione o seu nível</label>
            <select name="level" id="level">
                <option value="1">Nível 1</option>
                <option value="2">Nível 2</option>
                <option value="3">Nível 3</option>
            </select>

            <label for="classes">Insira a quantidade de horas de aula ministradas</label>
            <input type="number" name="classes" id="classes" placeholder="Insira o valor aqui">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    $level = $_POST['level'];
    $classes = $_POST['classes'];
    $sal=0;

    switch ($level) {
        case '1':
            $sal = 12*$classes;
            break;
        case '2':
            $sal = 17*$classes;
            break;
        case '3':
            $sal = 25*$classes;
            break;
    }
    
    if ($sal != null){
        echo "Seu salário a ser recebido vale R$", $sal, ".";
    }
   
    

    ?>
</body>

</html>