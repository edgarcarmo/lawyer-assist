<?php

	include_once("../../db/conection.php");

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$name = isset($_POST["name"]) ? $_POST["name"] : "";
		$email = isset($_POST["email"]) ? $_POST["email"] : "";
		$password = isset($_POST["password"]) ? $_POST["password"] : "";
		$isAdmin = isset($_POST["isadmin"]) ? filter_var($_POST["isadmin"], FILTER_VALIDATE_BOOLEAN) : 0;

		$sql = "SELECT `email` FROM `users` WHERE `email` = '$email'";
		$resultado = mysql_query($sql, $conexao) or die ("Não foi possível consultar o email");

		if(!mysql_num_rows($resultado) > 0) {

			$sql = "INSERT INTO `users` (`name`, `email`, `password`, `isadmin`) VALUES ('$name','$email', '$password', $isAdmin)";

			$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");

			if ($resultado === TRUE) {
			    header('location:../../../usuarios.php');
			} else {
			    //echo "Error: " . $sql . "<br>" . $conexao->error;
			    header('location:../../../error.php?error='.$conexao->error);
			}
		} else {
			$error = urlencode("O e-mail $email já está cadastrado");
			$url = "usuarios.php";
			//header('location:../../../notfound.php');
			header('location:../../../error.php?error='.$error.'&url='.$url);
		}

	} else {
		header('location:../../../notfound.php');
	}

?>