<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lawyer Assist - Login</title>
        <?php
            include_once("includes/metas.php");
            include_once("includes/stylesheet.php");
        ?>
    </head>
    <body>
        <?php
            include_once("includes/menu_initial.php");
        ?>
        <div class="container">
    	   <div class="col-md-4">&nbsp;</div>
        	<div class="col-md-4">
        		<h1>Login</h1>
        		<p>Acesse o sistema com seu e-mail e senha</p>
        		<br />
        		<form method="post" action="index.php" role="form">
        			<div class="form-group">
        				<label for="login">Login</label>
        				<input type="text" class="form-control" id="login" name="login" placeholder="Login" />
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
     	<?php  include_once("includes/scripts.php"); ?>
    </body>
</html>