<?php 
	include_once("../../db/conection.php");
	
 	$name = $_POST['name'];
    $decjud = $_POST['decjud'];	

	$sql = "INSERT INTO `comarcas`(`name`, `decjud`) VALUES ('$name','$decjud')";

	$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");

	if ($resultado === TRUE) {
	    header('location:../../../comarcas.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $conexao->error;
	}
 ?>