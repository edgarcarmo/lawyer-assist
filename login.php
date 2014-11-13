<?php include_once("includes/template/functions.php"); ?>
<!DOCTYPE html>
<html lang="pt">
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
        ?>
        <div class="container">
    	   <div class="col-md-4">&nbsp;</div>
        	<div class="col-md-4">
        		<h1><?php echo ucfirst($paginaURL); ?></h1>
        		<p>Acesse o sistema com seu e-mail e senha</p>
        		<br />
        		<form method="post" action="index.php" role="form">
        			<div class="form-group">
        				<label for="login">E-mail</label>
        				<input type="text" class="form-control" id="email" name="email" placeholder="E-mail" />
        			</div>
        			<div class="form-group">
        				<label for="password">Senha</label>
        				<input type="password" class="form-control" id="password" name="password" placeholder="Senha" />
        			</div>
        			<button type="submit" class="btn btn-success">Acessar</button>
        		</form>
        	</div>
        	<div class="col-md-4">&nbsp;</div>
        </div>
     	<?php  include_once("includes/template/scripts.php"); ?>
    </body>
</html>