<?php 
	include_once("../../db/conection.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {

	 	$name = isset($_POST['name']) ? $_POST['name'] : "";
	    $decjud = isset($_POST['decjud']) ? $_POST['decjud'] : "";

	    // Possui comarca
	    $sql = "SELECT * FROM `comarcas` WHERE `name` = '$name'";
	    $resultado = mysql_query($sql, $conexao) or die("Não foi possível consultar comarcas já cadastradas");

	    if(!mysql_num_rows($resultado) > 0) {

			$sql = "INSERT INTO `comarcas`(`name`, `decjud`) VALUES ('$name','$decjud')";

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