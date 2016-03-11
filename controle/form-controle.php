<?php
session_start();
include("lib/util.php");
include("lib/config.php");
//include("../totvs/logger.php");

include("lib/db-connection.php");
include("lib/db-formularios.php");
include("lib/db-egressos.php");

$_SESSION['cpf'] = $_REQUEST['cpf'];

if (existe_formulario_preenchido_para_o_cpf($_REQUEST['cpf'])) {
	$dados_egresso = recuperarEgresso($_REQUEST['cpf']);
	$egresso = mysql_fetch_array($dados_egresso);

	$_SESSION['id'] = $egresso['id'];
	$_SESSION['nome'] = utf8_encode($egresso['nome']);
	$_SESSION['data_nascimento'] = utf8_encode($egresso['data_nascimento']);
	$_SESSION['matricula'] = utf8_encode($egresso['matricula']);
	$_SESSION['email'] = utf8_encode($egresso['email']);
	$_SESSION['data_conclusao_do_curso'] = utf8_encode($egresso['data_conclusao_do_curso']);
	$_SESSION['data_colacao_de_grau'] = ltrim(rtrim(utf8_encode($egresso['data_colacao_de_grau'])));
	$_SESSION['curso'] = utf8_encode($egresso['curso_concluido_fa7']);
	$_SESSION['genero'] = $egresso['genero'];
	$_SESSION['pai'] = $egresso['pai'];
	$_SESSION['mae'] = $egresso['mae'];
	$_SESSION['nacionalidade'] = $egresso['nacionalidade'];
	$_SESSION['uf'] = $egresso['uf'];
	$_SESSION['pais'] = $egresso['pais'];
	$_SESSION['identidade'] = $egresso['identidade'];
	$_SESSION['uf_identidade'] = $egresso['uf_identidade'];
	$_SESSION['emissor'] = $egresso['emissor'];
	$_SESSION['telefone'] = $egresso['telefone'];
	$_SESSION['telefone2'] = $egresso['telefone2'];
	$_SESSION['endereco'] = $egresso['endereco'];
	$_SESSION['estado_civil'] = $egresso['estado_civil'];

	redirect("../dados_aluno.php");
} else {
	include("lib/db.php");

	$conTotvs = mssql_connect($hostTotvs, $userTotvs, $passTotvs);
	mssql_select_db($dbTotvs, $conTotvs);

	// Prepara e executa a procedure no TOTVS
	$resultado_dados_pessoa = recuperarDadosPessoa($conTotvs, $_REQUEST['cpf'], $_REQUEST['nascimento']);

	if (mssql_num_rows($resultado_dados_pessoa) <= 0 ){
		deslogar_por_dados_nao_autenticados();
		//echo "erro";
	}

	$dados_do_aluno = mssql_fetch_array($resultado_dados_pessoa);


	$_SESSION['nome'] = utf8_encode($dados_do_aluno[0]);
	$_SESSION['data_nascimento'] = utf8_encode($dados_do_aluno[2]);
	$_SESSION['matricula'] = utf8_encode($dados_do_aluno[3]);
	$_SESSION['data_conclusao_do_curso'] = utf8_encode($dados_do_aluno[9]);
	$_SESSION['data_colacao_de_grau'] = ltrim(rtrim(utf8_encode($dados_do_aluno[10])));
	$_SESSION['curso'] = utf8_encode($dados_do_aluno[11]);
	$_SESSION['genero'] = $dados_do_aluno['Sexo'];
	$_SESSION['pai'] = $dados_do_aluno['Pai'];
	$_SESSION['mae'] = $dados_do_aluno['Mae'];
	$_SESSION['nacionalidade'] = $dados_do_aluno['Nacionalidade'];
	$_SESSION['uf'] = $dados_do_aluno['UF'];
	$_SESSION['pais'] = $dados_do_aluno['Pais'];
	$_SESSION['identidade'] = $dados_do_aluno['CartIdentidade'];
	$_SESSION['uf_identidade'] = $dados_do_aluno['UFCartIdentidade'];
	$_SESSION['emissor'] = $dados_do_aluno['OrgEmissorIdentidade'];
	$_SESSION['telefone'] = $dados_do_aluno['Telefone1'];
	$_SESSION['telefone2'] = $dados_do_aluno['Telefone2'];
	$_SESSION['endereco'] = $dados_do_aluno['Endereco'];


	if ($_SESSION['data_colacao_de_grau'] == "") {
		redirect("../formulario.php", "Olá, não consta no sistema que você tenha colado grau ainda. Caso haja divergência na informação, favor contactar a Secretaria da FA7.");
	}


	redirect("../formulario");
}
// Liberação de conexão
//mssql_close($conTotvs);


?>
