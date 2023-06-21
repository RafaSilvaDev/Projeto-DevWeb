<?php
    include("seguranca.php");
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div class="container theme-showcase" role="main">
            <div class="page-header">
            <h1>Cadastrar Contatos</h1>
            </div>
            <div class="form-group has-error">
                <label class="control-label" id="mensagem"></label>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST" action="principal.php?link=02">
                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Nome do Contato</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="txtNome" id="nome" placeholder="Nome Completo" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefone1" class="col-sm-2 control-label">Telefone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="txtTelefone1" placeholder="Primeiro Telefone de Contato">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefone2" class="col-sm-2 control-label">Telefone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="txtTelefone2" placeholder="Segundo Telefone de Contato" required>
                            </div>
                            <label for="email" class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" name="txtEmail" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cidade" class="col-sm-2 control-label">Cidade</label>
                            <div class="col-sm-4">
                                  <select class="form-control" name="txtCidade" required>
                                    <option value="">Selecione</option>
                                    <option value="Americana">Americana</option>
                                    <option value="Campinas">Campinas</option>
                                    <option value="Hortolândia">Hortolândia</option>
                                    <option value="Nova Odessa">Nova Odessa</option>
                                    <option value="Piracicaba">Piracicaba</option>
                                    <option value="Santa Bárbara D´Oeste">Santa Bárbara D´Oeste</option>
                                    <option value="São Paulo">São Paulo</option>
                                </select>
                            </div>
                            <label for="data" class="col-sm-2 control-label">Data de Nascimento</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" name="txtData" placeholder="DD/MM/AAAA" required>
                            </div>                                                   
                        </div>      
                        <div class="form-group"> 
                            <label for="cidade" class="col-sm-2 control-label">Foto</label>
                                <div class="col-sm-4">                                
                                    <input type="file" class="form-control" name="txtFoto" placeholder="Selecione a imagem no diretório">
                                </div>                        
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                   <input type="submit" values="Adicionar" class="btn btn-default">
                                   <a href='principal.php'><button type="button" class="btn btn-default">Voltar</button></a>
                            </div>
                        </div>
                    </form>
                </div>
        </body>
</html>