<?php include_once("includes/login/login.php"); ?>
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
            </div>
            <div class="col-md-4">&nbsp;</div>
        </div>
        <?php  include_once("includes/template/scripts.php"); ?>
    </body>
</html>