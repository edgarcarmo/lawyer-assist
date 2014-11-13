<?php 
	include_once("../../db/conection.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {

	 	$id = isset($_POST['id']) ? $_POST['id'] : "";
	 	$name = isset($_POST['name']) ? $_POST['name'] : "";
	 	$email = isset($_POST['email']) ? $_POST['email'] : "";
	 	$password = isset($_POST['password']) ? $_POST['password'] : "";
	 	$isadmin = isset($_POST['isadmin']) ? $_POST['isadmin'] : "";
	    
	   	$sql = "SELECT `email` FROM `users` WHERE `email` = '$email' AND `id` <> '$id'";
	   	$resultado = mysql_query($sql, $conexao) or die ("Não foi possível consultar o email");

	    if(!mysql_num_rows($resultado) > 0) {

			$sql = "UPDATE `users` SET `name` =  '$name', `email` =  '$email', `password` =  '$password', `isadmin` =  '$isadmin' WHERE `id` = '$id'";

			$resultado = mysql_query($sql, $conexao) or die ("Erro na seleção da tabela.");

			if ($resultado === TRUE) {
			    header('location:../../../usuarios.php');
			} else {
			    //echo "Error: " . $sql . "<br>" . $conexao->error;
			    $error = $conexao->error;
			    $url = "usuarios.php";
			    header('location:../../../error.php?error='.$error."&url=".$url);
			}
		} else {
			$error = urlencode("O e-mail $email já está cadastrado");
			$url = "usuarios.php";
			//header('location:../../../notfound.php');
			header('location:../../../error.php?error='.$error.'&url='.$url);
		}

	} else {
		$error = urlencode("Não foi possível salvar os dados informados.");
		$url = "usuarios.php";
		header('location:../../../error.php?error='.$error."&url=".$url);
	}
 ?>