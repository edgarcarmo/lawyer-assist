<?php include_once("includes/login/session.php"); ?>
<?php include_once("includes/template/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lawyer Assist - <?php echo ucfirst($paginaURL); ?></title>

	<?php 
		include_once("includes/template/metas.php");
        include_once("includes/template/stylesheet.php");
	?>
</head>
<body>
	<div class="container">
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-4">
			<h1>Putz. <small>That's an error.</small></h1>
			<p>&nbsp;</p>
			<p><div class="alert alert-danger" role="alert"><?php echo $_GET["error"]; ?>.</div></p>
			<p>That's all we know.</p>
			<p>&nbsp;</p>
			<a class="btn btn-primary" href="<?php echo $_GET['url'] ?>">Voltar</a></p>
		</div>
		<div class="col-md-6">
			<h1><img src="images/robot.png" width="171" height="213" alt="robot"></h1>
		</div>
	</div>

	<?php include_once("includes/template/scripts.php"); ?>
</body>
</html>