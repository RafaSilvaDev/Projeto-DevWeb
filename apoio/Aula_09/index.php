<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Alunos</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background-color: lightcoral;
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    main{
        background-color: #fff;
        border: 4px solid #000;
        padding: 20px;
        width: 450px;
    }

    .menu{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .menu button{
        background-color: lightcoral;
        color: #000;
        border: 1px solid #000;
        padding: 5px;
    }

    .menu a{
        background-color: #fff;
        color: lightcoral;
        border: 1px solid lightcoral;
        padding: 5px;
        text-decoration: none;
    }

    #form {
        display: none;
        margin: 10px 0;
        width: 100%;
    }

    #form input{
        width: 100%;
        margin-bottom: 5px;
        padding: 3px;
    }

    #form .submit-btn{
        background-color: lightcoral;
        border: 1px solid #000;
    }

    .content {
        display: flex;
        flex-direction: row;
        align-items: start;
    }
</style>

<body>
    <main>
        <div class="menu">
            <button class="insert-data-btn" onclick="openForm();">Gravar dados dos Alunos</button>
            <a class="show-data-btn" href="relatorio.php">Apresentar Dados dos Alunos</a>
        </div>
        <div class="content">
            <form action="" method="post" id="form">
                <label for="code">Insira o prontuário do aluno</label>
                <input type="text" name="code" placeholder="insira o prontuário aqui">

                <label for="name">Insira o nome completo do aluno</label>
                <input type="text" name="name" placeholder="Insira o nome aqui aqui">

                <label for="exam">Insira a nota da prova do aluno</label>
                <input type="text" name="exam" placeholder="insira a nota da prova aqui">

                <label for="work">Insira a nota do trabalho do aluno</label>
                <input type="text" name="work" placeholder="insira a nota do trabalho aqui">

                <input type="submit" value="Enviar" class="submit-btn">
            </form>
            <p id="resume"></p>
        </div>
    </main>

    <script type="text/javascript">
        function openForm() {
            var form = document.getElementById("form");
            form.style.display = "flex";
            form.style.flexDirection = "column";
            form.style.alignItems = "start";
        }
    </script>
</body>


<?php


if (
    $_POST["code"] != ""
    && $_POST["name"] != ""
    && $_POST["exam"] != ""
    && $_POST["work"] != ""
) {
    $code = $_POST["code"];
    $name = $_POST["name"];
    $exam = $_POST["exam"];
    $work = $_POST["work"];
    $status = "";
    $pointer = fopen("C:/xampp/htdocs/exercicios/Aula_09/alunos.txt", "a");

    if (($exam + $work) / 2 >= 6) {
        $status = "Aprovado";
    } else {
        $status = "Recuperação";
    }
    fwrite($pointer, $code . ":" . $name . ":" . $exam . ":" . $work . ":" . $status . ";");

    
}


?>

</html>