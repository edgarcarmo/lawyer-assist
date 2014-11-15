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
        <div class="container" ng-controller="adminListResult" id="adminListResult">
        	<div class="row">
                <div class="col-md-4 search">
                    <input type="text" ng-model="search" class="form-control" placeholder="Busca r&#225;pida" ng-change="filterPage();"/>
                </div>
            </div>
            <form role="form" id="remove_sumbit">
                <div class="row">
        	    	<div class="col-md-12">
        	    		<table class="table table-striped table-bordered table-hover">
        	    			<thead>
        	    				<tr>
        	    					<th><input type="checkbox" ng-model="checkboxMaster" name="checkboxMaster" id="checkboxMaster"/></th>
        	    					<th>OAB</th>
        	    					<th>UF</th>
        	    					<th>Nome</th>
        	    					<th>Telefone</th>
        	    					<th>Celular</th>
        	    					<th>E-mail</th>
        	    					<th>A&ccedil;&otilde;es</th>
        	    				</tr>
        	    			</thead>
        	    			<tbody>
        	    				<tr ng-repeat="item in filterItens = (itens | filter:search) | startForm:currentPage*pageSize | limitTo:pageSize">
        	    					<td><input type="checkbox" ng-checked="checkboxMaster" id="listCheckbox{{item.id}}" name="listCheckbox[]" value="{{item.id}}"/></td>
        	    					<td>{{item.oab}}</td>
        	    					<td>{{item.oabuf}}</td>
        	    					<td>{{item.name}}</td>
        	    					<td>{{item.phone}}</td>
        	    					<td>{{item.cellphone}}</td>
        	    					<td>{{item.email}}</td>
        	    					<td>
                                        <a href="#" ng-click="editar(item.id)" data-toggle="modal" data-target="#lawyer_edit" class="btn btn-default btn-xs btn_edit" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="#" ng-click="excluir(item.id, null, 'advogados');" class="btn btn-default btn-xs" title="Remover"><span class="glyphicon glyphicon-trash"></span></a>
                                        <!--
                                        <button class="btn btn-default btn-sm" title="Upload de arquivos"><span class="glyphicon glyphicon-upload"></span></button>
                                        <button class="btn btn-default btn-sm" title="Histórico"><span class="glyphicon glyphicon-list-alt"></span></button>
                                        -->
                                    </td>
        	    				</tr>
        	    			</tbody>
        	    		</table>
        	    	</div>
            	</div>
            </form>
        	<div class="row">
        		<div class="col-md-8">
        			<div class="btn-group">
                        <button class="btn" ng-disabled="previous();" ng-click="currentPage=currentPage-1">&laquo;</button>
                        <span class="btn">{{currentPage+1}} / {{numberOfPages()}}</span>
                        <button class="btn" ng-disabled="next();" ng-click="currentPage=currentPage+1">&raquo;</button>
                    </div>
        		</div>
        		<div class="col-md-4">
                    <button class="btn btn-success" onclick="window.location.href = 'novo_advogado.php';"><span class="glyphicon glyphicon-plus"></span> Cadastrar advogados</button>
                    <button class="btn btn-danger" ng-click="excluir(null, 'remove_sumbit', 'advogados');"><span class="glyphicon glyphicon-trash"></span> Remover advogados</button>
                </div>
        	</div>
        </div>
        <?php include_once("includes/modal/advogados/lawyer_add.php"); ?>
        <?php include_once("includes/modal/advogados/lawyer_edit.php"); ?>
    </body>
</html>