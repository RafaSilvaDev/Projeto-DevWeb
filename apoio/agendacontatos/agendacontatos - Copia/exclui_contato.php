<?php
    include_once("seguranca.php");
    include_once("conexao_mysql.php");

    $usuario=$_SESSION['nome']; 

    $query2 = mysqli_query($conexao,"SELECT id,nome,telefone1,telefone2,email,cidade,foto,data FROM contato WHERE usuario='$usuario'");

    ?>
    <div class="container theme-showcase" role="main">
    <div class="row">
    <form class="form-horizontal" method="POST">
      <div class="form-group">
        <div class="col-sm-2">
          <select class="form-control" name="consultar_contato_select" required>
            <?php while($num_rows = mysqli_fetch_array($query2)){
                echo "<option value=".$num_rows['id'].">".$num_rows['nome']."</td>";
            }?>
          </select>
        </div>
        <input type="submit" value="Buscar">
        </div>
    </form>
    <?php     
        if($_POST){
        $excluir=$_POST['consultar_contato_select'];       
        $query3 = mysqli_query($conexao,"SELECT id,nome,telefone1,telefone2,email,cidade,foto,data FROM contato WHERE usuario='$usuario' and id='$excluir'");
        while($num_rows = mysqli_fetch_array($query3)){
            echo "<img src=".$num_rows["foto"]." width=50 height=50>";
            echo "<p>Nome..............: ",$num_rows['nome'];
            echo "<p>Telefone 1........: ",$num_rows['telefone1'];
            echo "<p>Telefone 2........: ",$num_rows['telefone2'];
            echo "<p>E-mail............: ",$num_rows['email'];
            echo "<p>Cidade............: ",$num_rows['cidade'];
            echo "<p>Data Nascimento...: ",$num_rows['data'];
            echo "<p>Confirma exclusão? "?>
            <form name="apagasn" method="POST" action="principal.php?link=7">
                <input type="submit" value="Sim">
                <input type="reset" value="Não">
            </form>
            <?php
            if($_POST){
                $query4=mysqli_query($conexao,"DELETE FROM contato WHERE usuario='$usuario' and id='$excluir'");    
                echo '<script language="JavaScript">alert("Contato Atualizado!")</script>';
            }

        } }?>        
    </div>
    </div>
        

    

