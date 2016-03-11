<?php 

session_start();
include("controle/lib/db-connection.php");
include("controle/lib/util.php");
include("controle/lib/db-egressos.php");
include("controle/lib/db.php");
include("controle/lib/config.php");

/*CONSULTA DO BANCO DE DADOS*/
	if(isset($_POST['visualizar']))
 	{
		include("listar_planilhaVisualizacao.php");
	}
	else
	{
		include("listar_planilhaExcel.php");
	}
			   
 ?>