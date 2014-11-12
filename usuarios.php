<?php include_once("includes/login/session_admin.php"); ?>
<?php include_once("includes/template/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
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

            $sql_user = "SELECT * FROM `users` WHERE 1 ORDER BY `id` asc";
            $resultado = mysql_query($sql_user,$conexao) or die ("Erro na seleção da tabela.");

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
    	    					<th>Nome</th>
    	    					<th>E-mail</th>
                                <th>Admin</th>
    	    					<th>A&ccedil;&otilde;es</th>
    	    				</tr>
    	    			</thead>
    	    			<tbody>
                            <?php while($prod = mysql_fetch_array($resultado)) { ?>
    	    				<tr>
    	    					<td><input type="checkbox" id="<?php echo $prod['id']; ?>" /></td>
    	    					<td><?php echo $prod['id']; ?></td>
    	    					<td><?php echo $prod['name']; ?></td>
    	    					<td><?php echo $prod['email']; ?></td>
                                <td><input type="checkbox" disabled="true" <?php if($prod['isadmin']==1) {echo 'checked="checked"'; } ?> /></td>
    	    					<td>
    	    						<button class="btn btn-default btn-xs" title="Editar"><span class="glyphicon glyphicon-pencil"></span></button>
    	    						<a href="#" onclick="excluir(<?php echo $prod['id'] ?>, 'usuarios');" class="btn btn-default btn-xs" title="Remover"><span class="glyphicon glyphicon-trash"></span></a>
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
        			<button class="btn btn-success" data-toggle="modal" data-target="#lawyer_add"><span class="glyphicon glyphicon-plus"></span> Cadastrar usuários</button>
        			<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Remover usuários</button>
        		</div>
        	</div>
        </div>
        <?php  
            include_once("includes/template/scripts.php"); 
            include_once("includes/modal/usuarios/lawyer_add.php"); 
        ?>
    </body>
</html>