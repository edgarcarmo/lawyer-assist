<?php 
	include_once("../../db/conection.php");

    $name = $_POST['name'];	

	$sql = "INSERT INTO `varas`(`name`) VALUES ('$name')";

	$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");

	if ($resultado === TRUE) {
	    header('location:../../../varas.php');
	} else {
	    //echo "Error: " . $sql . "<br>" . $conexao->error;
	    $error = $conexao->error;
	    $url = "varas.php";
	    header('location:../../../error.php?error='.$error."&url=".$url);
	}
 ?>