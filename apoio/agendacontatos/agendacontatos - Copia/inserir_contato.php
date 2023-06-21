<?php
    include_once("seguranca.php");
    include_once("conexao_mysql.php");

    $nome = $_POST["txtNome"];
    $telefone1 = $_POST["txtTelefone1"];
    $telefone2 = $_POST["txtTelefone2"];
    $email = $_POST["txtEmail"];
    $cidade = $_POST["txtCidade"];
    $data = $_POST["txtData"];
    $foto = $_POST["txtFoto"];
    $usuario=$_SESSION['nome'];

    $query = mysqli_query($conexao, "INSERT INTO contato (nome,telefone1,telefone2,email,cidade,data,foto,usuario) VALUES ('$nome', '$telefone1', '$telefone2', '$email', '$cidade', '$data', '$foto', '$usuario')"); 
    echo '<script language="JavaScript" charset="utf-8">alert("Contato Cadastrado!")</script>';
        
    $query2 = mysqli_query($conexao,"SELECT id,nome,telefone1,telefone2,email,cidade,foto,data FROM contato WHERE usuario='$usuario' ORDER BY nome");  
    $num_rows = mysqli_num_rows($query2);
?>
<div class="container theme-showcase" role="main">
    <div class="row">
        <br/>
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
            <th>1º Telefone</th>
            <th>2º Telefone</th>
            <th>E-mail</th>
            <th>Cidade</th>
            <th>Data Nascimento</th>
            <th>Foto</th>
            <hr>
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
    

