<?php
include("../controle/lib/db-connection.php");
include("../controle/lib/util.php");
include("../controle/lib/db-egressos.php");

$dados_egresso = recuperarEgresso($_REQUEST['chave']);

$egresso = mysql_fetch_array($dados_egresso);

if ($egresso == NULL) {
	redirect("index.php", "O aluno não preencheu o formulário de egresso.");
}


include("../controle/lib/db.php");
include("../controle/lib/config.php");

$conTotvs = mssql_connect($hostTotvs, $userTotvs, $passTotvs);
mssql_select_db($dbTotvs, $conTotvs);

// Prepara e executa a procedure no TOTVS
$resultado_egresso_totvs = recuperarDadosPessoa($conTotvs, $egresso['cpf'], $egresso['data_nascimento']);
//$resultado_egresso_totvs = recuperarDadosPessoa($conTotvs, '69256047349', '21/11/1974');

$egresso_totvs = mssql_fetch_array($resultado_egresso_totvs);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>FA7 | Faculdade 7 de Setemrbro | Egressos | Acompanhamento</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/dashboard.css" rel="stylesheet">
  <link href="../css/acompanhamento.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="../js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">FA7 | Egressos</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <!-- ul class="nav navbar-nav navbar-right">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Help</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
      </form -->
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <?php include("navegacao-lateral-secretaria.php"); ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="print-only" id="cabecalho-print">
        <img id="logo" src="../img/fa7-logo.gif">
        <h2 class="col-xs-12">FACULDADE 7 DE SETEMBRO</h2>
        <p class="col-xs-12" id="endereco">Rua Alm. Maximiniano da Fonseca, 1395 - Luc. Cavalcante - Fortaleza - CE - CEP 60811-020 - Fone: 85 4006-7600</p>
        <h4 class="col-xs-12" id="req">REQUERIMENTO - DIPLOMA</h4>
      </div>

      <div id="cabecalho">
        <div class="jumbotron">
          <div class="container">
            <h1>Egressos</h1>
						<p><strong>Importante:</strong> Campos marcados com "*" indicam que os valores no sistema acadêmico devem ser atualizados de acordo com as informações aqui apresentadas</p>
          </div>
        </div>



        <h1><?php echo $egresso["nome"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'nome'); ?></h1>
        <div class="page-header">
          <h3>Informações Pessoais</h3>
        </div>
      </div>
      <div class="content">
        <p><strong>MATRÍCULA:</strong> <?php echo $egresso["matricula"]; ?><p>
        <p><strong>CURSO:</strong> <?php echo $egresso["curso_concluido_fa7"]; ?></p>
        <p><strong>TELEFONE 1:</strong> <?php echo $egresso["telefone"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'telefone'); ?></p>
        <p><strong>TELEFONE 2:</strong> <?php echo $egresso["telefone2"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'telefone2'); ?></p>
        <p><strong>E-MAIL:</strong> <?php echo $egresso["email"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'email'); ?></p>



        <div class="content col-xs-12" id="quadro">
          <p>
            <strong>PAI</strong><br />
            <?php echo $egresso["pai"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'pai'); ?>
          </p>
          <p>
            <strong>MÃE</strong><br />
            <?php echo $egresso["mae"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'mae'); ?>
          </p>
          <div class="col-xs-3">
            <strong>NACIONALIDADE</strong><br />
            <?php echo $egresso["nacionalidade"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'nacionalidade'); ?>
          </div>
          <div class="col-xs-1">
            <strong>UF</strong><br />
            <?php echo $egresso["uf"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'uf'); ?>
          </div>
          <div class="col-xs-8">
            <strong>PAÍS</strong><br />
            <?php echo $egresso["pais"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'pais'); ?>
          </div>
          <div class="col-xs-4">
            <strong>DATA DE NASCIMENTO</strong><br />
            <?php echo $egresso["data_nascimento"]; ?>
          </div>
          <div class="col-xs-3">
            <strong>CART IDENTIDADE</strong><br />
            <?php echo $egresso["identidade"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'identidade'); ?>
          </div>
          <div class="col-xs-5">
            <strong>ORG EMISSOR</strong><br />
            <?php echo $egresso["emissor"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'emissor'); ?> - <?php echo $egresso["uf_identidade"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'uf_identidade'); ?>
          </div>
          <div class="col-xs-4">
            <strong>DATA DE CONCLUSÃO</strong><br />
            <?php echo $egresso["data_conclusao"]; ?>
          </div>
          <div class="col-xs-8">
            <strong>DATA DE COLAÇÃO</strong><br />
            <?php echo $egresso["data_colacao"]; ?>
          </div>
        </div>

        <div class="print-only content">
          <p class="col-xs-12">Confirmo que as informações acima estão corretas.</p>
          <p class="col-xs-12">Assinatura do Aluno: ___________________________________________________________</p>
          <p><span class="col-xs-3"> FA7, <?php echo date("d/m/Y"); ?></span><span class="col-xs-9">Atendido por: _________________________</span></p>
          <div id="parecer" class="col-xs-12">
            <h4><strong>PARECER</strong></h4>
          </div>
          <p class="lines col-xs-12">&nbsp;</p>
          <p class="col-xs-12">Data:____/____/____  Responsável pelo parecer: ______________________________</p>
          <p class="lines col-xs-12">&nbsp;</p>
          <p id="via" class="col-xs-12">VIA DO ALUNO</p>
          <p class="col-xs-12">Protocolo Nº: ____________</p>
          <p class="col-xs-12">Solicitação de DIPLOMA de conclusão de curso</p>
          <p class="col-xs-12">NOME: <?php echo $egresso["nome"]; ?></p>
          <p class="col-xs-12">CURSO: <?php echo $egresso["curso_concluido_fa7"]; ?></p>
          <p class="col-xs-12">A confecção e registro do diploma tem um prazo de entrega de 180 dias. Encaminharemos um e-mail assim que o mesmo estiver pronto.</p>
          <p><span class="col-xs-3"> FA7, <?php echo date("d/m/Y"); ?></span><span class="col-xs-9">Atendido por: _________________________________</span></p>
        </div>
        <div class="col-md-12">
          <br />
          <button type="button" class="btn btn-primary" onClick="history.go(-1);">Voltar</button>

          <!-- a href="egresso-editar.php?id=<?php echo $egresso["id"]; ?>&form_id=<?php echo $egresso["form_id"]; ?>" class="btn btn-success">Alterar Dados</a -->

          <a href="egresso-imprimir.php?id=<?php echo $egresso["cpf"]; ?>" target="_blank" class="btn btn-warning">Imprimir para verificação do aluno</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/docs.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
