<?php
include("../controle/lib/db-connection.php");
include("../controle/lib/util.php");
include("../controle/lib/db-egressos.php");

//$dados_egresso = recuperarEgresso($_REQUEST['id']);

$egresso = recuperarArrayEgresso($_REQUEST['id']);


include("../controle/lib/db.php");
include("../controle/lib/config.php");
$conTotvs = mssql_connect($hostTotvs, $userTotvs, $passTotvs);
mssql_select_db($dbTotvs, $conTotvs);

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
    <link href="../css/print.css" rel="stylesheet">
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
    <div id="imprimir">
      <button type="button" onClick="window.print();">Imprimir</button>
    </div>
    <div id="tudo">
      <div class="print-only" id="cabecalho-print">
      <img id="logo" src="../img/fa7-logo.gif">
      <h2>FACULDADE 7 DE SETEMBRO</h2>
      <p id="endereco">Rua Alm. Maximiniano da Fonseca, 1395 - Luc. Cavalcante - Fortaleza - CE - CEP 60811-020 - Fone: 85 4006-7600</p>
      <h4 id="req">REQUERIMENTO - DIPLOMA</h4>
      </div>
      <div>
        <p class="print-only"><strong>PROTOCOLO Nº ____________</strong></p>
        <table>
  <tr>
    <td>NOME: <?php echo $egresso["nome"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'nome'); ?></td>
    <td>MATRÍCULA: <?php echo $egresso["matricula"]; ?></td>
  </tr>
  <tr>
    <td colspan="2">CURSO: <?php echo $egresso["curso_concluido_fa7"]; ?></td>
  </tr>
  <tr>
    <td>TELEFONE 1: <?php echo $egresso["telefone"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'telefone'); ?></td>
    <td>TELEFONE 2: <?php echo $egresso["telefone2"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'telefone2'); ?></td>
  </tr>
  <tr>
    <td colspan="2">E-MAIL: <?php echo $egresso["email"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'email'); ?></td>
  </tr>
</table>
<p>Eu, abaixo assinado, venho requerer o DIPLOMA de conclusão de curso.</p>

        <table id="quadro">
  <tr>
    <td colspan="3"><strong>ALUNO</strong><br />
       <?php echo $egresso["nome"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'nome'); ?></td>
  </tr>
  <tr>
    <td colspan="3"><strong>PAI</strong><br />
      <?php echo $egresso["pai"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'pai'); ?></td>
  </tr>
  <tr>
    <td colspan="3"><strong>MÃE</strong><br />
      <?php echo $egresso["mae"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'mae'); ?></td>
  </tr>
  <tr>
    <td><strong>NACIONALIDADE</strong><br />
      <?php echo $egresso["nacionalidade"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'nacionalidade'); ?></td>
    <td><strong>UF</strong><br />
      <?php echo $egresso["uf"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'uf'); ?></td>
    <td><strong>PAÍS</strong><br />
      <?php echo $egresso["pais"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'pais'); ?></td>
  </tr>
  <tr>
    <td><strong>DATA DE NASCIMENTO</strong><br />
      <?php echo $egresso["data_nascimento"]; ?></td>
    <td><strong>CART IDENTIDADE</strong><br />
      <?php echo $egresso["identidade"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'identidade'); ?></td>
    <td><strong>ORG EMISSOR</strong><br />
      <?php echo $egresso["emissor"]; ?>  <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'emissor'); ?> - <?php echo $egresso["uf_identidade"]; ?> <?php indicar_diferenca_de_valores($egresso, $egresso_totvs, 'uf_identidade'); ?></td>
  </tr>
  <tr>
    <td><strong>DATA DE CONCLUSÃO</strong><br />
      <?php echo $egresso["data_conclusao"]; ?></td>
    <td colspan="2"><strong>DATA DE COLAÇÃO</strong><br />
      <?php echo $egresso["data_colacao"]; ?></td>
  </tr>
</table>

                <div class="print-only">
                <p>Confirmo que as informações acima estão corretas.</p>
                <p>Assinatura do Aluno: ___________________________________________________________</p>
                <p><span> FA7, <?php echo date("d/m/Y"); ?></span> <span>Atendido por: _____________________________________</span></p>
                <div id="parecer">
                  <h4><strong>PARECER</strong></h4>
                </div>
                <p class="lines">&nbsp;</p>
                <p>Data:____/____/____  Responsável pelo parecer: ______________________________</p>
                <p class="lines">&nbsp;</p>
                <p id="via">VIA DO ALUNO</p>
                <p>Protocolo Nº: ____________</p>
                <p>Solicitação de DIPLOMA de conclusão de curso</p>
                <p>NOME: <?php echo $egresso["nome"]; ?></p>
                <p>CURSO: <?php echo $egresso["curso_concluido_fa7"]; ?></p>
                <p>A confecção e registro do diploma tem um prazo de entrega de 180 dias. Encaminharemos um email assim que o mesmo estiver pronto.</p>
                <p><span> FA7, <?php echo date("d/m/Y"); ?></span> <span >Atendido por: _____________________________________</span></p>
                <p class="foot">&nbsp;</p>
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
