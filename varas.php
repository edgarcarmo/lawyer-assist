<?php include_once("includes/login/session_admin.php"); ?>
<?php include_once("includes/template/functions.php"); ?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
    <head>
        <title>Lawyer Assist - <?php echo ucfirst($paginaURL); ?></title>
        <?php
            include_once("includes/template/metas.php");
            include_once("includes/template/stylesheet.php");
        ?>
    </head>
    <body>
        <?php
            include_once("includes/template/menu.php");
            include_once("includes/db/conection.php");
            $sql_varas = "SELECT v.id, v.name as vara, c.name as comarca\n"
                        . "FROM varas as v\n"
                        . "INNER JOIN comarcas as c on v.comarca_id = c.id \n"
                        . "WHERE 1\n"
                        . "ORDER BY c.name asc, v.name asc";
            $resultado_varas = mysql_query($sql_varas,$conexao) or die ("Erro na seleção da tabela.");
        ?>
        <div class="container">
        	<div class="col-md-6">
        		<h1><?php echo ucfirst($paginaURL); ?></h1>
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
    	    					<th>ID</th>
    	    					<th>Comarca</th>
    	    					<th>Vara</th>
                                <th>A&ccedil;&otilde;es</th>
    	    				</tr>
    	    			</thead>
    	    			<tbody>
    	    				<?php while($prod = mysql_fetch_array($resultado_varas)) { ?>
                                 <tr>
                                    <td><input type="checkbox" /></td>
                                    <td><?php echo $prod['id']; ?></td>
                                    <td><?php echo $prod['vara']; ?></td>
                                    <td><?php echo $prod['comarca']; ?></td>
                                    <td>
                                        <button class="btn btn-default btn-xs" title="Editar"><span class="glyphicon glyphicon-pencil"></span></button>
                                        <a href="#" onclick="excluir(<?php echo $prod['id'] ?>, 'varas');" class="btn btn-default btn-xs" title="Remover"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                </tr>
                            <?php } ?>
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
        			<button class="btn btn-success" data-toggle="modal" data-target="#lawyer_add"><span class="glyphicon glyphicon-plus"></span> Cadastrar vara</button>
        			<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Remover vara</button>
        		</div>
        	</div>
        </div>
        <?php  include_once("includes/template/scripts.php"); ?>
        <?php include_once("includes/modal/varas/varas_add.php"); ?>
    </body>
</html>