<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <title>Meus Gastos Financeiros</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    main{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        width: 100vw;
        height: 60vh;
    }

    main form{
        display: flex;
        flex-direction: column;
    }

    main form input{
        margin-bottom: 5px;
        padding: 5px;
    }
</style>

<body>
    <main>
        <form action="" method="post" id="form">
            <h2>Gastos financeiros no primeiro semestre</h2>
            <label for="m1">Insira os gastos de <b>janeiro</b></label>
            <input type="text" name="m1" placeholder="insira o valor em reais aqui">

            <label for="m2">Insira os gastos de <b>fevereiro</b></label>
            <input type="text" name="m2" placeholder="insira o valor em reais aqui">

            <label for="m3">Insira os gastos de <b>março</b></label>
            <input type="text" name="m3" placeholder="insira o valor em reais aqui">

            <label for="m4">Insira os gastos de <b>abril</b></label>
            <input type="text" name="m4" placeholder="insira o valor em reais aqui">

            <label for="m5">Insira os gastos de <b>maio</b></label>
            <input type="text" name="m5" placeholder="insira o valor em reais aqui">

            <label for="m6">Insira os gastos de <b>junho</b></label>
            <input type="text" name="m6" placeholder="insira o valor em reais aqui">

            <input type="submit" name="submit" class="button" id="submit-btn" value="Enviar" />
        </form>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13162.372036951685!2d-47.22897637495584!3d-22.856612809552068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8bc16c66f0bed%3A0x1aee5c111efc6196!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%2C%20Campus%20Hortol%C3%A2ndia!5e0!3m2!1spt-BR!2sbr!4v1682461408568!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    <section class="chart">
        <div id="chart_div"></div>
    </section>

    <script type="text/javascript">
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {
            'packages': ['corechart']
        });

        var dataString;
        $("form").on("submit", function(e) {
            dataString = $(this).serializeArray();

            $.ajax({
                type: "POST",
                url: "./",
                data: dataString,
            });
            e.preventDefault();
            console.log(dataString[0].value);
            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Gastos');
                data.addRows([
                    ["Janeiro", parseInt(dataString[0].value)],
                    ["Fevereiro", parseInt(dataString[1].value)],
                    ["Março", parseInt(dataString[2].value)],
                    ["Abril", parseInt(dataString[3].value)],
                    ["Maio", parseInt(dataString[4].value)],
                    ["Junho", parseInt(dataString[5].value)],
                ]);

                // Set chart options
                var options = {
                    'title': 'Gastos Financeiros Primeiro Semestre',
                    'width': 800,
                    'height': 200
                };

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        });
    </script>
</body>

</html>