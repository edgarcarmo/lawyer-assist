<!DOCTYPE html>
<html lang="en" ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo("Lawyer Assist - Advogados"); ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <?php include_once("includes/menu.php"); ?>
    
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
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/underscore-min.js"></script>
  </body>
</html>