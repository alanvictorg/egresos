<?php
session_start();

include("controle/lib/db-connection.php");
include("controle/lib/util.php");
include("controle/lib/db-egressos.php");
include("controle/lib/db.php");
include("controle/lib/config.php");

$cpf = $_SESSION['cpf'];
$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$estado_civil = $_POST['estado_civil'];
$estado_civil_outros = $_POST['estado_civil_outros'];
$data_hoje = date("Y-m-d H:i:s");

$alterarEgresso = "UPDATE egressos SET
				telefone = '$telefone',
				telefone2 = '$telefone2',
				endereco = '$endereco',
				email = '$email',
				estado_civil = '$estado_civil',
				estado_civil_outros = '$estado_civil_outros',
				atualizado_em = '$data_hoje'
				WHERE cpf = '$cpf'";

executarConsulta($alterarEgresso);

$dados_egresso = recuperarEgresso($cpf);
$egresso = mysql_fetch_array($dados_egresso);

$_SESSION['nome'] = utf8_encode($egresso['nome']);
$_SESSION['data_nascimento'] = utf8_encode($egresso['data_nascimento']);
$_SESSION['matricula'] = utf8_encode($egresso['matricula']);
$_SESSION['email'] = utf8_encode($egresso['email']);
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

redirect("dados_aluno.php");
 ?>
