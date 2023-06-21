<?php
    include_once("seguranca.php");
    include_once("conexao_mysql.php");

    $usuario=$_SESSION['nome']; 

    $select = $_POST["consultar_contato_select"];
    $consultar = $_POST["consultar_contato_input"];
    if($select == 1){
        $query2 = mysqli_query($conexao,"SELECT id,nome,telefone1,telefone2,email,cidade,foto,data FROM contato WHERE usuario='$usuario' and nome like '%$consultar%' ORDER BY nome"); }
    else{
          $query2 = mysqli_query($conexao,"SELECT id,nome,telefone1,telefone2,email,cidade,foto,data FROM contato WHERE usuario='$usuario' and cidade like '%$consultar%' ORDER BY cidade");}
    $num_rows = mysqli_num_rows($query2);
?>
<div class="container theme-showcase" role="main">
    <div class="row">
        <div class="page-header">
            <h1>Lista de Contatos - <?php echo $usuario; ?></h1>
        </div>
        <div class="col-md-12">
            <table class="table" width=100%>
        <thead>
          <tr>
            <th></th>
            <th>Nome</th>
            <th>1º Telefone</th>
            <th>2º Telefone</th>
            <th>E-mail</th>
            <th>Cidade</th>
            <th>Data Nascimento</th>
            <th>Foto</th>
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
                    echo "<td>".$num_rows['id']."</td>";
                    echo "<td>".$num_rows['nome']."</td>";
                    echo "<td>".$num_rows['telefone1']."</td>";
                    echo "<td>".$num_rows['telefone2']."</td>";
                    echo "<td>".$num_rows['email']."</td>";
                    echo "<td>".$num_rows['cidade']."</td>";
                    echo "<td>".$num_rows['data']."</td>"; 
                    echo "<td><img src='imagens/pessoas/".$num_rows['foto']."' width=50 height=50></td>";                           
                    echo "</tr>";
                }
            }
          ?>
        </tbody>
      </table>
        </div>
    </div>
</div>
    

