<?php include_once("includes/login/session.php"); ?>
<?php include_once("includes/template/functions.php"); ?>
<!DOCTYPE html>
<html lang="pt" ng-app="myApp">
    <head>
        <title>Lawyer Assist - <?php echo ucfirst($paginaURL); ?></title>
        <?php
            include_once("includes/template/metas.php");
            include_once("includes/template/stylesheet.php");
            include_once("includes/template/scripts.php");
        ?>
    </head>
    <body>
        <?php include_once("includes/template/menu.php");?>
        <div class="container">
        	<div class="col-md-6">
        		<h1><?php echo ucfirst($paginaURL); ?></h1>
        	</div>
        </div>
        <br />

        <!-- cadastro -->
        <form action="#" role="form">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Dados Cadastrais</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="oab">OAB</label>
                                            <input type="text" id="oab" name="oab" class="form-control" placeholder="OAB">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="oabuf">UF</label>
                                            <select name="oabuf" id="oabuf" name="oabuf" class="form-control" required>
                                                <option value="" selected="selected">Selecione o Estado</option> 
                                                <option value="ac">Acre</option> 
                                                <option value="al">Alagoas</option> 
                                                <option value="am">Amazonas</option> 
                                                <option value="ap">Amapá</option> 
                                                <option value="ba">Bahia</option> 
                                                <option value="ce">Ceará</option> 
                                                <option value="df">Distrito Federal</option> 
                                                <option value="es">Espírito Santo</option> 
                                                <option value="go">Goiás</option> 
                                                <option value="ma">Maranhão</option> 
                                                <option value="mt">Mato Grosso</option> 
                                                <option value="ms">Mato Grosso do Sul</option> 
                                                <option value="mg">Minas Gerais</option> 
                                                <option value="pa">Pará</option> 
                                                <option value="pb">Paraíba</option> 
                                                <option value="pr">Paraná</option> 
                                                <option value="pe">Pernambuco</option> 
                                                <option value="pi">Piauí</option> 
                                                <option value="rj">Rio de Janeiro</option> 
                                                <option value="rn">Rio Grande do Norte</option> 
                                                <option value="ro">Rondônia</option> 
                                                <option value="rs">Rio Grande do Sul</option> 
                                                <option value="rr">Roraima</option> 
                                                <option value="sc">Santa Catarina</option> 
                                                <option value="se">Sergipe</option> 
                                                <option value="sp">São Paulo</option> 
                                                <option value="to">Tocantins</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cpf">CPF</label>
                                            <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Nome">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefone">Telefone</label>
                                            <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="celular">Celular</label>
                                            <input type="text" id="celular" name="celular" class="form-control" placeholder="celular">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Endereço</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cep">CEP</label>
                                            <div class="input-group">
                                                <input type="text" id="cep" name="cep" class="form-control" placeholder="CEP">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button" title="Localizar endereço">
                                                        <span class="glyphicon glyphicon-search"></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        </div>
                                    <div class="col-md-6">
                                        <p>&nbsp;</p>
                                        <p><span class="label label-primary">Aguarde, estamos tentando encontrar o endereço...</span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="logradouro">Endereço</label>
                                            <input type="text" id="logradouro" name="logradouro" class="form-control" placeholder="Endereço">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="numero">Número</label>
                                            <input type="number" id="numero" name="numero" class="form-control" placeholder="Número">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complemento">Complemento</label>
                                            <input type="text" id="complemento" name="complemento" class="form-control" placeholder="Complemento">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="cidade">Cidade</label>
                                            <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="estado">Estado</label>
                                            <input type="text" id="estado" name="estado" class="form-control" placeholder="Estado" maxlength="2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">&nbsp;</div>
                    <div class="col-md-4">
                        <div class="pull-right">
                            <button class="btn btn-default" onclick="window.location.href='advogados.php';">Cancelar</button>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- cadastro -->
    </body>
</html>