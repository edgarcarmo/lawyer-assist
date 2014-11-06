<?PHP

	$hostname="127.0.0.1";
	$username="root";
	$password="123456";
	$database="lawyer-assist";

	//Conexão mysql
	$conexao = mysql_connect($hostname, $username, $password) or die ("<h1>Erro na conexão do banco de dados.</h1>");

	//Seleciona o banco de dados
	$selecionabd = mysql_select_db($database,$conexao) or die ("<h1>Banco de dados inexistente.</h1>");

?>