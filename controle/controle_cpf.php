<?php
session_start();
include("lib/util.php");
include("lib/config.php");
include("lib/db.php");
//include("../totvs/logger.php");

$conTotvs = mssql_connect($hostTotvs, $userTotvs, $passTotvs);
mssql_select_db($dbTotvs, $conTotvs);

// Prepara e executa a procedure no TOTVS
$resultado_dados_pessoa = recuperarDadosPessoa($conTotvs, $_REQUEST['cpf'], $_REQUEST['nascimento']);

if (mssql_num_rows($resultado_dados_do_func) <= 0 ){
	//deslogar_por_dados_nao_autenticados();
	echo "erro";
}

$dados_do_aluno = mssql_fetch_array($resultado_dados_pessoa);

$_SESSION['cpf'] = $_REQUEST['cpf'];
$_SESSION['nome'] = utf8_encode($dados_do_aluno[0]);
$_SESSION['data_nascimento'] = utf8_encode($dados_do_aluno[2]);
$_SESSION['matricula'] = utf8_encode($dados_do_aluno[3]);
$_SESSION['data_conclusao_do_curso'] = utf8_encode($dados_do_aluno[9]);
$_SESSION['curso'] = utf8_encode($dados_do_aluno[11]);

redirect("../formulario");

// Liberação de conexão
mssql_close($conTotvs);


?>
