<?php
session_start();
include("controle/lib/db-connection.php");
include("controle/lib/util.php");
include("controle/lib/db-egressos.php");
include("controle/lib/db.php");
include("controle/lib/config.php");

$consultaFormulariosAluno = "SELECT
  *
FROM
  formulario
WHERE
  id = $_REQUEST[id]";

$resultadoFormulariosAluno = mysql_query($consultaFormulariosAluno);

$formulario = mysql_fetch_array($resultadoFormulariosAluno)
 
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
<div class="jumbotron">
<h1>Egressos</h1>
<p>Veja os dados do seu formulário</p>
</div>
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Informações Sócio-Econômicas</h3>
  </div>
  <div class="panel-body">
    <p><strong>Curso concluído na FA7: </strong> <?php echo $formulario['curso_concluido_fa7'] ?></p>
    <p><strong>Idade na conclusão do curso: </strong> <?php echo $formulario['idade_conclusao'] ?></p>
    <p><strong>Ano de conclusão do curso: </strong> <?php echo $formulario['ano_conclusao'] ?></p>
    <p><strong>Duração do curso: </strong> <?php echo $formulario['tempo_curso'] ?> anos</p>
  </div>
</div>
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Informações Profissionais</h3>
  </div>
  <div class="panel-body">
    <p><strong>Está trabalhando?: </strong> <?php echo $formulario['trabalhando'] ?></p>
    <?php if ($formulario['trabalhando'] == "SIM") { ?>
    <p><strong>Empresa onde trabalha: </strong> <?php echo $formulario['trabalhando_onde']; ?></p> <?php } ?>
    <p><strong>Possui emprego na área?: </strong> <?php echo $formulario['emprego_na_area'] ?></p>
    <p><strong>Neste emprego há quanto tempo?: </strong> <?php echo $formulario['tempo_emprego'] ?></p>
    <p><strong>Atual função no emprego: </strong> <?php 
      if ($formulario['funcao_trabalho'] == "outros") {
        echo $formulario['funcao_trabalho_outros']; }
      else {
        echo $formulario['funcao_trabalho']; }?> </p>
    <p><strong>Setor de atuação da empresa: </strong> <?php echo $formulario['setor_atuacao'] ?></p>
    <p><strong>Tipo de empresa: </strong> <?php echo $formulario['empresa'] ?></p>
    <p><strong>Faixa salarial: </strong> <?php echo $formulario['faixa_salarial'] ?></p>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Informações sobre a Formação na FA7</h3>
  </div>
  <div class="panel-body">
    <table class="table">
  <tr>
    <th>Critério</th>
    <th class="text-right">Nota</th>
  </tr>
  <tr>
    <td>Os conteúdos/programas das disciplinas foram adequadamente desenvolvidos, auxiliando na sua formação pessoal e profissional</td>
    <td class="text-right"><?php echo $formulario['formacao_a'] ?></td>
  </tr>
  <tr>
    <td>Em termos de experiência profissional, foi importante ter feito graduação na FA7</td>
    <td class="text-right"><?php echo $formulario['formacao_b'] ?></td>
  </tr>
  <tr>
    <td>A formação teórica foi importante para empregabilidade</td>
    <td class="text-right"><?php echo $formulario['formacao_c'] ?></td>
  </tr>
  <tr>
    <td>A formação na FA7 permite exercer a cidadania com ética</td>
    <td class="text-right"><?php echo $formulario['formacao_d'] ?></td>
  </tr>
  <tr>
    <td>A formação na FA7 permite compreender o contexto social e econômico para tomada de decisão</td>
    <td class="text-right"><?php echo $formulario['formacao_e'] ?></td>
  </tr>
  <tr>
    <td>A formação na FA7 permite ter flexibilidade para atuar no mercado de trabalho</td>
    <td class="text-right"><?php echo $formulario['formacao_f'] ?></td>
  </tr>
  <tr>
    <td>A disciplina de estágio supervisionado serviu para sistematizar/testar/exercitar os conhecimentos adquiridos</td>
    <td class="text-right"><?php echo $formulario['formacao_g'] ?></td>
  </tr>
</table>
<p class="text-muted"><small>Nota entre 1 (menor valor) a 10 (maior valor) para os critérios acima.</small></p>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Informações sobre a Instituição</h3>
  </div>
  <div class="panel-body">
    <table class="table">
  <tr>
    <th>Critério</th>
    <th class="text-right">Nota</th>
  </tr>
  <tr>
    <td>Ensino</td>
    <td class="text-right"><?php echo $formulario['instituicao_a'] ?></td>
  </tr>
  <tr>
    <td>Estrutura</td>
    <td class="text-right"><?php echo $formulario['instituicao_b'] ?></td>
  </tr>
  <tr>
    <td>Reconhecimento da FA7 como referência em educação</td>
    <td class="text-right"><?php echo $formulario['instituicao_c'] ?></td>
  </tr>
  
</table>
<p class="text-muted"><small>Nota entre 1 (menor valor) a 5 (maior valor) para os critérios acima.</small></p>
  </div>
</div>

  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Informações Acadêmicas</h3>
  </div>
  <div class="panel-body">
    <p><strong>Está cursando ou cursou outro curso de Graduação?: </strong> <?php echo $formulario['cursando_outra_graduacao'] ?></p>
    <?php if ($formulario['cursando_outra_graduacao'] == "SIM") { ?>
    <p><strong>Qual curso?: </strong><?php echo $formulario['qual_outra_graduacao'] ?></p> <?php } ?>
    <p><strong>Você cursou algum curso de pós-graduação?: </strong> <?php echo $formulario['cursou_pos_graduacao'] ?></p>
    <?php if ($formulario['cursou_pos_graduacao'] == "SIM") { ?>
    <p><strong>Qual curso?: </strong><?php echo $formulario['qual_pos_graduacao_cursou'] ?></p> <?php } ?>
    <p><strong>Você está cursando pós-graduação?: </strong> <?php echo $formulario['cursando_pos_graduacao'] ?></p>
    <?php if ($formulario['cursando_pos_graduacao'] == "SIM") { ?>
    <p><strong>Qual curso?: </strong><?php echo $formulario['qual_pos_graduacao_cursando'] ?></p> <?php } ?>
    <p><strong>Se não está cursando, pretende cursar?: </strong> <?php echo $formulario['pretende_cursar_pos_graduacao'] ?></p>
    <?php if ($formulario['pretende_cursar_pos_graduacao'] == "SIM") { ?>
    <p><strong>Qual curso?: </strong><?php echo $formulario['area_pos_graduacao_pretendida'] ?></p> <?php } ?>
    <p><strong>Você recomendaria seu curso para outras pessoas?: </strong> <?php echo $formulario['recomendaria_a_fa7'] ?></p>
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
