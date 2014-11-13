<?php 
	include_once("../../db/conection.php");
    $sql = "SELECT * FROM `comarcas` WHERE 1 ORDER BY `name` asc";
    $resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");
   	while($row = mysql_fetch_array($resultado)) {
    	foreach ($row as $key => $value) {
    		$arr[$key] = $value;
    	}
    	$main_arr[] = $arr;
    }
    echo json_encode($main_arr);
 ?>