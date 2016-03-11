<?php

// Início da conexão com o banco
	$servername = "localhost";
	$username = "root";
	$password = "";
	//$username = "newsFa7";
	//$password = "3du@#d0";
	$dbname = "formulario_egressos";

	$conn = mysql_connect($servername, $username, $password) or die(mysql_error());
	mysql_set_charset('utf8', $conn);
	mysql_query("SET character_set_results=utf8", $conn);
    mb_language('uni');
    mb_internal_encoding('UTF-8');
    mysql_select_db($dbname, $conn) or die('Could not select database.');
    mysql_query("set names 'utf8'",$conn);

?>
