<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

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
    
    <?php include_once("includes/menu_initial.php"); ?>
    
    <div class="container">
    	<div class="col-md-4">&nbsp;</div>
    	<div class="col-md-4">
    		<h1>Login</h1>
    		<p>Acesse o sistema com seu e-mail e senha</p>
    		<br />
    		<form action="" role="form">
    			<div class="form-group">
    				<label for="email">E-mail</label>
    				<input type="text" class="form-control" id="email" placeholder="E-mail" />
    			</div>
    			<div class="form-group">
    				<label for="password">Senha</label>
    				<input type="password" class="form-control" id="password" placeholder="Senha" />
    			</div>
    			<button type="submit" class="btn btn-success">Acessar</button>
    		</form>
    	</div>
    	<div class="col-md-4">&nbsp;</div>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/underscore-min.js"></script>
  </body>
</html>