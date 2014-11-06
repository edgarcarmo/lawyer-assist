<!DOCTYPE html>
<html lang="en" ng-app="myApp">
    <head>
        <title>Lawyer Assist - Index</title>
        <?php
            include_once("includes/template/metas.php");
            include_once("includes/template/stylesheet.php");
        ?>
    </head>
    <body>
        <?php
            include_once("includes/login/session.php");
            include_once("includes/template/menu.php");
        ?>
        <div class="container">
        	<div class="col-md-6">
        		<h1>Advogados</h1>
        	</div>
        </div>
        <br />
        <div class="container">
        	<div class="row">
    	    	<div class="col-md-12">
    	    		<table class="table table-striped table-bordered table-hover">
    	    			<thead>
    	    				<tr>
    	    					<th><input type="checkbox" /></th>
    	    					<th>OAB</th>
    	    					<th>UF</th>
    	    					<th>Nome</th>
    	    					<th>A&ccedil;&otilde;es</th>
    	    				</tr>
    	    			</thead>
    	    			<tbody>
    	    				<tr>
    	    					<td><input type="checkbox" /></td>
    	    					<td>0000/0000</td>
    	    					<td>SP</td>
    	    					<td>Edgar de Oliveira Carmo</td>
    	    					<td>
    	    						<button class="btn btn-default btn-xs" title="Remover"><span class="glyphicon glyphicon-pencil"></span></button>
    	    						<button class="btn btn-default btn-xs" title="Remover"><span class="glyphicon glyphicon-trash"></span></button>
    	    					</td>
    	    				</tr>
    	    				<tr>
    	    					<td><input type="checkbox" /></td>
    	    					<td>0000/0000</td>
    	    					<td>SP</td>
    	    					<td>Edgar de Oliveira Carmo</td>
    	    					<td>
    	    						<button class="btn btn-default btn-xs" title="Remover"><span class="glyphicon glyphicon-pencil"></span></button>
    	    						<button class="btn btn-default btn-xs" title="Remover"><span class="glyphicon glyphicon-trash"></span></button>
    	    					</td>
    	    				</tr>
    	    			</tbody>
    	    		</table>
    	    	</div>
        	</div>
        	<div class="row">
        		<div class="col-md-8">
        			<nav>
    					<ul class="pagination" style="margin: 0">
    						<li class="disabled"><a href="#">&laquo;</a></li>
    						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    						<li class="disabled"><a href="#">&raquo;</a></li>
    					</ul>
    				</nav>
        		</div>
        		<div class="col-md-4">
        			<button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Cadastrar advogado</button>
        			<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Remover advogados</button>
        		</div>
        	</div>
        </div>
        <?php  include_once("includes/template/scripts.php"); ?>
    </body>
</html>