<?php
    include_once("seguranca.php");
    include_once("conexao_mysql.php");

    $usuario=$_SESSION['nome']; 

    $query2 = mysqli_query($conexao,"SELECT id,nome,telefone1,telefone2,email,cidade,foto,data FROM contato WHERE usuario='$usuario'");

    ?>
    <div class="container theme-showcase" role="main">
    <div class="row">
    <form name="form_seleciona_contato" class="form-horizontal" method="POST">
        <div class="form-group">
        <div class="col-sm-2">
          <select class="form-control" name="consultar_contato_select" required>
            <?php while($num_rows = mysqli_fetch_array($query2)){
                echo "<option value=".$num_rows['id'].">".$num_rows['nome']."</td>";
            }?>
          </select>
        </div>
        <input type="submit" name='botao_busca' value="Buscar">
        </div>
    </form>
    <?php     
     if(isset($_POST['botao_busca'])){
        $atualizar=$_POST['consultar_contato_select'];       
        $query3 = mysqli_fetch_array(mysqli_query($conexao,"SELECT id,nome,telefone1,telefone2,email,cidade,foto,data FROM contato WHERE usuario='$usuario' and id='$atualizar'")); ?>
        <form name="form_dados_altera" class="form-horizontal" method="POST" action="principal.php?link=11">
                <div class="form-group" id="grid">
                    <div class="form-group">
                        <label for="txtIdentificacao" class="col-sm-2 control-label">Identificação</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtIdentificacao" value="<?php echo $query3[0];?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtNome" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="txtNome" value="<?php echo $query3[1];?>" autofocus>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="txtTelefone1" class="col-sm-2 control-label">Telefone 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtTelefone1" value="<?php echo $query3[2];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtTelefone1" class="col-sm-2 control-label"></label>
                        <div class="col-sm-2">
                            <input type="submit" name="alteracao" value="Confirma Alteração">
                        </div>
                    </div>
                </div>
        </form>
    <?php } ?>        
    </div>
    </div>
        

    

