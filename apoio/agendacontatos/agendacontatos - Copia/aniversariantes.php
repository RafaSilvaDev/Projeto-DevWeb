<?php
    include_once("seguranca.php");
    include_once("conexao_mysql.php");

    $usuario=$_SESSION['nome'];

    $query2 = mysqli_query($conexao,"SELECT nome,data FROM contato WHERE usuario='$usuario' ORDER BY data desc");  
    $num_rows = mysqli_num_rows($query2);
?>
<div class="container theme-showcase" role="main">
    <div class="row">
        <div class="form-group">
            <a href='principal.php'><button type="button" class="btn btn-default">Voltar</button></a>
        </div>
        <div class="page-header">
            <h1>Lista de Contatos - <?php echo $usuario; ?></h1>
        </div>
        <div class="col-md-12">
            <table class="table" width=100%>
        <thead>
          <tr>
            <th></th>
            <th>Nome</th>
            <th>Data Nascimento</th>
          </tr>        
        <tbody>
          <?php
            if($num_rows == 0){
                echo "<tr>";
                    echo "<td>Nenhum contato encontrado para o usuário ativado.</td>";
                echo "</tr>";
            }
            else{
                while($num_rows = mysqli_fetch_array($query2)){;
                    echo "<tr>";
                    echo "<th></th>";
                    echo "<td>".$num_rows['nome']."</td>";
                    echo "<td>".$num_rows['data']."</td>"; 
                    echo "</tr>";
                }
            }
          ?>
        </tbody>
      </table>
        </div>
    </div>
</div>
    

