<?php

	include_once("../../db/conection.php");

	$id = isset($_GET["id"]) ? $_GET["id"] : 0;

	if ($id > 0) {

		$sql = "DELETE FROM `varas` WHERE `id` = $id";
		$resultado = mysql_query($sql, $conexao);

		if(!$resultado) {
			$error = mysql_error();
			$url = "varas.php";
			header('location:../../../error.php?error='.$error."&url=".$url);
		} else {
			header('location:../../../varas.php');
		}

	}

?>