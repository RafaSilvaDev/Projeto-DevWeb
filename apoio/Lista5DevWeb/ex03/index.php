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
            <label for="num1">Insira um número</label>
            <input type="number" name="num1" id="num1" placeholder="Insira um valor aqui">

            <label for="num2">Insira outro número</label>
            <input type="number" name="num2" id="num2" placeholder="Insira outro valor aqui">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if($num1 == $num2){
        echo "Os valores inseridos são iguais!";
    }elseif ($num1 > $num2) {
        echo "Os valores inseridos são diferentes!";
        echo " O número ", $num1, " é maior que ", $num2;
    }else{
        echo "Os valores inseridos são diferentes!";
        echo " O número ", $num2, " é maior que ", $num1;
    }
    ?>
</body>

</html>