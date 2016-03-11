<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
?>

<?php
session_start();
include("controle/lib/db-connection.php");
include("controle/lib/util.php");
include("controle/lib/db-egressos.php");
include("controle/lib/db.php");
include("controle/lib/config.php");

$consultaFormulariosAluno = "SELECT * FROM  formulario";

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
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <link href="../favicon.ico" rel="icon">
        <title>
            FA7 | Faculdade 7 de Setembro | Egressos | Acompanhamento
        </title><!-- Bootstrap core CSS -->
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
                    <button aria-controls="navbar" aria-expanded="false" class=
                    "navbar-toggle collapsed" data-target="#navbar"
                    data-toggle="collapse" type="button"><span class=
                    "sr-only">Toggle navigation</span> <span class=
                    "icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button> <a class=
                    "navbar-brand" href="#">FA7 | Egressos</a>
                </div>

                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                  <ul class="nav nav-sidebar">
                    <li class="active"><a href="secretaria/index.php">Secretaria<span class="sr-only">(current)</span></a></li>
                    
                  </ul>
                </div>

                <div class=
                "col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header">
                        Egressos
                    </h1>

                    <div class="row placeholders">
                    </div>

                    <div class="page-header">
                        <h3>
                            Relatório de Formulários
                        </h3>
                    </div>

                   

                    <p class="text-muted">
                        <small>Selecione o intervalo de anos para gerar o relatório</small>
                    </p>

                    <form action="listar_pdf.php" method="post">
                        <div class="col-md-3 form-group">
                            <label for="ano_conclusao"><h4>Do ano:</h4></label>
                            <select id="ano_conclusao" name="ano_conclusao">
                                <option value="">
                                    Selecione o ano
                                </option><?php 
                                            $ano = 2006;
                                            while ( $ano <= date('Y/m/d')) { ?>
                                <option value="<?php echo $ano; ?>">
                                    <?php echo $ano; ?>
                                </option><?php 
                                            $ano += 1;
                                            }
                                            ?>
                            </select>
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="ano_conclusao"><h4>Até o ano:</h4></label>
                            <select id="ano_conclusao" name="ano_conclusao2">
                                <option value="">
                                    Selecione o ano
                                </option><?php 
                                            $ano2 = 2006;
                                            while ( $ano2 <= date('Y')) { ?>
                                <option value="<?php echo $ano2; ?>">
                                    <?php echo $ano2; ?>
                                </option><?php 
                                            $ano2 += 1;
                                            }
                                            ?>
                            </select> 
                            
                        </div>
                          <!--<input type="text" name="i"></input>   
                          <input type="text" name="f"></input> -->  
                        <input class="btn btn-primary" type="submit" value="Enviar">
                        
                    </form>


                    <div class="list-group col-md-12">
                        <div class="col-md-2 text-center">

                        </div>

                    </div>

                    
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=
        "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script> 
        <script src="/js/bootstrap.min.js">
        </script> 
        <script src="/js/docs.min.js">
        </script> <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/js/ie10-viewport-bug-workaround.js">
        </script>
    </body>
</html>