<?php 
	include_once("../../db/conection.php");
	
 	$comarca_id = $_POST['comarca_id'];
    $name = $_POST['name'];	

	$sql = "INSERT INTO `varas`(`comarca_id`, `name`) VALUES ('$comarca_id','$name')";

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