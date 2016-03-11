<?php
/**
* Esta eh a funcao que recupera os dados dos alunos
*
* os campos retornados em um array indexado/associativo são
*   RA,
*   Aluno, (Nome)
*   Sede,
*   Turno,
*   Curso,
*   Serie,
*   Turma,
*   SeqTurma,
*   DtNascimento,
*   CPF (ou vazio quando for null)
*
*/
function recuperarDadosDoAluno($conTotvs, $ra) {
	$stmt = mssql_init('ZC7S_UMALUNO', $conTotvs);
	mssql_bind($stmt, '@RA',  $ra , SQLVARCHAR);
	$retorno = mssql_execute($stmt);
	mssql_free_statement($stmt);
	return $retorno;
}

/**
* Esta eh a funcao que recupera os dados de uma pessoa na base TOTVS da Educadora 7 de Setembro
* atraves da procedure E7S_PESSOA
*
* A assinatura da procedure:
*      E7S_PESSOA (
*			@PerLetivo VarChar(10),
*			@CPF Varchar(20),
*			@DataNascimento Varchar(10),
*			@RA VarChar(10),
*			@Nome Varchar(200))
*
* os campos retornados em um array indexado/associativo sao
*   [0] [Nome] -> Nome completo
*   [1] [CPF] -> CPF
*   [2] [DataNascimento] -> Data de Nascimento
*   [3] [RA] -> RA (Matricula)
*   [4] [Turma]-> Turma
*   [5] [Funcionario] -> Flag indicando se eh um funcionario ou nao (valores: [S, N])
*   [6] [RespAcademico] -> Responsavel academico
*   [7] [PaiOuMae] -> Flag indicando se o Responsavel Academico eh o pai ou a mae (valores: [S, N])
*   [8] [Aluno] -> Flag indicando se eh um aluno ou nao (valores: [S, N])
*   [9] [DtConclusaoCursoFA7] -> Data de conclusao do curso
*   [10] [DtColacaoGrauFA7] -> Data da colacao de grau
*   [11] [CursoFormacaoFA7] -> Curso de conclusao
*   [12] [HabilitacaoFormacaoFA7] -> Habilitacao do curso
*/
function recuperarDadosPessoa($conTotvs, $cpf, $nascimento) {
	$nulo = NULL;
	$stmt = mssql_init('E7S_PESSOA', $conTotvs);
	mssql_bind($stmt, '@PerLetivo', $nulo, SQLVARCHAR);
	mssql_bind($stmt, '@CPF', $cpf, SQLVARCHAR);
	mssql_bind($stmt, '@DataNascimento', $nascimento, SQLVARCHAR);
	mssql_bind($stmt, '@RA', $nulo, SQLVARCHAR);
	mssql_bind($stmt, '@Nome', $nulo, SQLVARCHAR);
	$retorno = mssql_execute($stmt) or die(mssql_get_last_message());
	mssql_free_statement($stmt);
	return $retorno;
}

/**
* Esta eh a funcao que recupera os dados de uma pessoa
*
* os campos retornados em um array indexado/associativo são
*   [0] -> Nome completo
*   [1] -> Email
*   [2] -> Telefone
*/
function recuperarDadosDoFunc($conTotvs, $cpf) {
	$stmt = mssql_init('ZUMAPESSOA', $conTotvs);
	$nascimento = $_REQUEST['nascimento'];
	mssql_bind($stmt, '@CPF', $cpf, SQLVARCHAR);
	mssql_bind($stmt, '@DataNascimento', $nascimento, SQLVARCHAR);
	$retorno = mssql_execute($stmt);
	mssql_free_statement($stmt);
	return $retorno;
}

?>
