<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: lightcoral;
        width: 100vw;
        height: 100vh;
        padding: 10px;
    }

    a {
        background-color: #fff;
        color: lightcoral;
        border: 1px solid #000;
        padding: 5px;
        text-decoration: none;
    }

    p {
        margin-top: 20px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<body>
    <a href="index.php">Voltar</a>
    <main>
        <p>
            <?php
            $pointerData = fopen("C:/xampp/htdocs/exercicios/Aula_09/alunos.txt", "r");
            $pointerCount = fopen("C:/xampp/htdocs/exercicios/Aula_09/contador.txt", "r+");

            $content = fread($pointerData, 10000);
            $counter = fread($pointerCount, 10);
            $count = intval($counter) + 1;

            echo "<b>Você é o visitante de número: $count </b>";
            echo "<br><br>";
            fseek($pointerCount, 0);
            fwrite($pointerCount, $count);
            fclose($pointerCount);

            echo "<table>";
            echo "<tr><th>Prontuário</th><th>Nome</th><th>Nota na prova</th><th>Nota no trabalho</th><th>Status</th></tr>";

            $rows = explode(";", $content);
            foreach ($rows as $row) {
                if (!empty($row)) {
                    $code = "";
                    $name = "";
                    $exam = "";
                    $work = "";
                    $status = "";
                    list($code, $name, $exam, $work, $status) = explode(":", $row);
                    echo "<tr><td>$code</td><td>$name</td><td>$exam</td><td>$work</td><td>$status</td></tr>";
                }
            }

            echo "</table>";
            fclose($pointerData);
            ?>
        </p>
    </main>
</body>

</html>