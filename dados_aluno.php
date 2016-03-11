<?php
session_start();
include("controle/lib/db-connection.php");
include("controle/lib/util.php");
include("controle/lib/db-egressos.php");
include("controle/lib/db.php");
include("controle/lib/config.php");

$formularioMaisDeUmAno = "SELECT MAX(formulario.atualizado_em) as MAIS_DE_UM_ANO
FROM egressos INNER JOIN formulario
ON egressos.id = formulario.egresso_id
WHERE egressos.matricula = $_SESSION[matricula]?/*SESSAO ENCONTRADA NA PAGINA db-egresos.php*/
AND (formulario.atualizado_em + INTERVAL 1 YEAR) <= NOW()";

$consultaMaisDeUmAno = mysql_query($formularioMaisDeUmAno);
$resultadoMaisDeUmAno = mysql_fetch_array($consultaMaisDeUmAno)

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
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/dashboard.css" rel="stylesheet">
  <link href="css/acompanhamento.css" rel="stylesheet">
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
            </div><!--FECHA CLASS navbar-header-->
            
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Sair</a></li>
              </ul>
            </div><!--FECHA CLASS navbar-collapse collapse-->
        </div><!--FECHA CONTAINER-FLUID-->
      </nav>

<div class="container-fluid">
  <div class="row">
    <?php include("navegacao_lateral-dados_aluno.php"); ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Egressos</h1>

        <div class="row placeholders">

        </div>

        <div class="page-header">
          <h3>Informações Pessoais</h3>
        </div>
        
        <div class="panel panel-primary">
          <div class="panel-heading">
              <h3 class="panel-title">Seus dados</h3>
          </div>
          
          <div class="panel-body">
            <p><strong>Nome:</strong> <?php echo $_SESSION['nome']?> </p>
            <p><strong>Matrícula:</strong> <?php echo $_SESSION['matricula']?> </p>
            <p><strong>Email:</strong> <?php echo $_SESSION['email']?> </p>
            <p><strong>Telefone 1:</strong> <?php echo $_SESSION['telefone']?> </p>
            <p><strong>Telefone 2:</strong> <?php echo $_SESSION['telefone2']?> </p>
            <p><strong>Endereço:</strong> <?php echo $_SESSION['endereco']?> </p>
          </div>
        </div><!--fECHA A CLASS panel panel-primary-->
      
      <p class="lead">Você gostaria de alterar seus dados para contato?</p>
      <a class="btn btn-primary" href="dados_aluno_alterar.php"><strong>Alterar Dados</strong></a>
    </div><!--fECHA A CLASS col-sm-9 col-sm-offset-3 col-md-10-->
  </div><!--fECHA A CLASS row-->
</div><!--fECHA A CLASS container-fluid-->

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
