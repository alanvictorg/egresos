<?php
include("../controle/lib/db-connection.php");
include("../controle/lib/util.php");
include("../controle/lib/db-egressos.php");

$dados_egresso = recuperarEgressoComFormulario($_REQUEST['id'], $_REQUEST['form_id']);

$egresso = mysql_fetch_array($dados_egresso);

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
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Visão Geral <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="jumbotron">
              <div class="container">
                <h1>Egressos</h1>
              </div>
            </div>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

            <h1><?php echo $egresso["nome"]; ?></h1>
            <div class="page-header">
                <h3>Informações Pessoais</h3>
            </div>
            <div>
                
                <p><label class="control-label">Matrícula:</label> <?php echo $egresso["matricula"]; ?></p>
                <p><label class="control-label">Telefone:</label>
                <input type="tel" name="telefone" value="<?php echo $egresso["telefone"]; ?>"/></p>
                <p><label class="control-label">Endereço:</label> <input type="text" name="endereco" size="100" value="<?php echo $egresso["endereco"]; ?>"/></p>
                <p><label class="control-label">E-mail:</label> <input type="email" name="email" size="100" value="<?php echo $egresso["email"]; ?>"/></p>
                <p><label class="control-label">Gênero:</label> 
                 <input type="radio" name="genero" value="Masculino" <?php echo($egresso["genero"] == "masculino" ? "checked" : ""); ?> /> Masculino  <input type="radio" name="genero" value="Feminino" <?php echo($egresso["genero"] == "feminino" ? "checked" : ""); ?>/> Feminino</p>
                <p><label class="control-label">Estado Civil:</label> <span class="text-capitalize"><?php echo $egresso["estado_civil"]; ?></span></p>
                <p><label class="control-label">Curso concluído:</label> <?php echo $egresso["curso_concluido_fa7"]; ?></p>
                <p><label class="control-label">Idade que terminou o curso:</label> <?php echo $egresso["idade_conclusao"]; ?></p>
                <p><label class="control-label">Ano de conclusão:</label> <?php echo $egresso["ano_conclusao"]; ?></p>
            
                <div>
                    <button type="button" class="btn btn-primary" onClick="history.go(-1);">Voltar</button>
                
                    <button type="submit" class="btn btn-success">Alterar Dados</button>
                </div>
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
