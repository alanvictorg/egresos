<?php
session_start();
include("controle/lib/db-connection.php");
include("controle/lib/util.php");
include("controle/lib/db-egressos.php");
include("controle/lib/db.php");
include("controle/lib/config.php");

$consultaFormulariosAluno = "SELECT * FROM
                                      formulario
                                      WHERE
                                      egresso_id = $_SESSION[id]";

$resultadoFormulariosAluno = mysql_query($consultaFormulariosAluno);
 
$formularioMaisDeUmAno = "SELECT
  MAX(atualizado_em) as MAIS_DE_UM_ANO
FROM
  formulario
WHERE
  egresso_id = $_SESSION[id]
AND
  (formulario.atualizado_em + INTERVAL 1 YEAR) <= NOW()";

$consultaMaisDeUmAno = mysql_query($formularioMaisDeUmAno);
$resultadoMaisDeUmAno = mysql_fetch_array($consultaMaisDeUmAno);


$formularioMaisRecente = "SELECT
MAX(atualizado_em) as MAIS_RECENTE
FROM
formulario
WHERE
egresso_id = $_SESSION[id]";

$consultaMaisRecente = mysql_query($formularioMaisRecente);
$resultadoMaisRecente = mysql_fetch_array($consultaMaisRecente)

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/../favicon.ico">

  <title>FA7 | Faculdade 7 de Setembro | Egressos | Acompanhamento</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
  <link href="css/acompanhamento.css" rel="stylesheet">



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
       <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Sair</a></li>

      </ul> 
  </div>
</div>
</nav>

<div class="container-fluid">
  <div class="row">
    <?php include("navegacao_lateral-dados_aluno.php"); ?>


    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Egressos</h1>

      <div class="row placeholders">

      </div>

      <div class="page-header">
        <h3>Formulários</h3>
      </div>
      <p class="lead">Você possui formulário(s) preenchido(s) na(s) seguinte(s) data(s): </p>
      <p class="text-muted"><small>Clique na data para visualizar o formulário</small></p>
      <div class="list-group col-md-12">
      <div class="col-md-2 text-center">
      <?php while ($listaFormulariosAluno = mysql_fetch_array($resultadoFormulariosAluno, MYSQL_BOTH))
      {
        $data = strtotime($listaFormulariosAluno['atualizado_em']);
        $listaFormulariosAluno['atualizado_em'] = date( 'd/m/Y', $data ); ?>
        
        <a href="ver_formulario.php?id=<?php echo $listaFormulariosAluno['id']; ?>" class="list-group-item"><strong><?php echo $listaFormulariosAluno['atualizado_em']; ?></strong></a>
      <?php } ?>
      </div>
      </div>
      <?php if(strtotime($resultadoMaisRecente['MAIS_RECENTE'])<strtotime('-1 year')) {
        ?>
      <div>
        <p class="col-md-12 lead alert alert-info">Faz mais de um ano que você preencheu um formulário com seus dados. Você gostaria de preencher um novo formulário com informações mais atualizadas?</p>
        <div class="col-md-12">
        <a class="btn btn-primary" href="novo_formulario.php"><strong>Novo formulário</strong></a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
