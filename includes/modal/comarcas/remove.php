<?php

	include_once("../../db/conection.php");

	$id = isset($_GET["id"]) ? $_GET["id"] : 0;

	if ($id > 0) {

		$sql = "DELETE FROM `comarcas` WHERE `id` = $id";
		$resultado = mysql_query($sql, $conexao);

	} else if(!empty($_POST['listCheckbox'])){
		foreach ($_POST['listCheckbox'] as $value) {
    		$sql = "DELETE FROM `comarcas` WHERE `id` = $value";
			$resultado = mysql_query($sql, $conexao);
    	}
	}

	if(!$resultado) {
		$error = mysql_error();
		$url = "comarcas.php";
		header('location:../../../error.php?error='.$error."&url=".$url);
	} else {
		header('location:../../../comarcas.php');
	}
?>