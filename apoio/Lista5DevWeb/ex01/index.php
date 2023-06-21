<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form em PHP e HTML</title>
</head>
<style>
    main form{
        display:flex;
        flex-direction:column;
        align-items:start;
    }
</style>
<body>
    <main>
        <form action="" method="post">
            <label for="name">Insira seu nome</label>
            <input id="name" name="name" type="text" placeholder="Insira seu nome aqui" >

            <label for="value1">Insira o valor da sua primeira nota</label>
            <input type="text" name="value1" id="value1" placeholder="Insira o valor aqui" >

            <label for="value2">Insira o valor da sua segunda nota</label>
            <input type="text" name="value2" id="value2" placeholder="Insira o valor aqui">

            <label for="value3">Insira o valor da sua terceira nota</label>
            <input type="text" name="value3" id="value3" placeholder="Insira o valor aqui">

            <input type="submit" value="Enviar">
        </form>
</main>
    <?php
        $name=$_POST['name'];
        $value1=$_POST['value1'];
        $value2=$_POST['value2'];
        $value3=$_POST['value3'];
        $media=($value1 + $value2 + $value3)/3;

        
        if ($media>=7) {
            echo "A média de ", $name, " vale: ", $media, " e você está APROVADO"; 
        } else {
            echo "A média de ", $name, " vale: ", $media, " e você está REPROVADO"; 
        }
        
    ?>
</body>
</html>