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
            <label for="balance">Insira o saldo médio do cliente</label>
            <input type="number" name="balance" id="balance" placeholder="Insira o valor aqui">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    $balance = $_POST['balance'];

    if ($balance > 0 && $balance <=200){
        echo "Infelizmente você não receberá nenhum aumento de crédito.";
    } elseif ($balance > 200 && $balance <= 400){
        echo "Seu novo saldo médio com o adicional de 20% de crédito agora vale: ", $balance + ($balance * 0.2);
    } elseif ($balance > 400 && $balance <= 600){
        echo "Seu novo saldo médio com o adicional de 30% de crédito agora vale: ", $balance + ($balance * 0.3);
    } elseif ($balance > 600){
        echo "Seu novo saldo médio com o adicional de 40% de crédito agora vale: ", $balance + ($balance * 0.4);
    }

    ?>
</body>

</html>