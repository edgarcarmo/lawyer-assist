<?php 
	include_once("../../db/conection.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {

	 	$id = isset($_POST['id']) ? $_POST['id'] : "";
	 	$name = isset($_POST['name']) ? $_POST['name'] : "";
	    
	    // Possui comarca
	    $sql = "SELECT * FROM `comarcas` WHERE `name` = '$name'";
	    $resultado = mysql_query($sql, $conexao) or die("Não foi possível consultar comarcas já cadastradas");

	    if(!mysql_num_rows($resultado) > 0) {

			$sql = "UPDATE `comarcas` SET `name` =  '$name' WHERE `id` = '$id'";

			$resultado = mysql_query($sql, $conexao) or die ("Erro na seleção da tabela.");

			if ($resultado === TRUE) {
			    header('location:../../../comarcas.php');
			} else {
			    //echo "Error: " . $sql . "<br>" . $conexao->error;
			    $error = $conexao->error;
			    $url = "comarcas.php";
			    header('location:../../../error.php?error='.$error."&url=".$url);
			}
		} else {
			$error = "A comarca $name já está cadastrada.";
			$url = "comarcas.php";
			header('location:../../../error.php?error='.$error."&url=".$url);
		}

	} else {
		$error = "Não foi possível salvar os dados informados.";
		$url = "comarcas.php";
		header('location:../../../error.php?error='.$error."&url=".$url);
	}
 ?>