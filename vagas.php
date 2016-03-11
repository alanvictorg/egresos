<?  
    session_start();
	include("../config/layout.php");
	include("../ypiranga/includes/conexao.php");
	include("../ypiranga/includes/funcoes.php");
	include("../ypiranga/includes/funcoeshtml.php");
	include("../ypiranga/includes/funcoesmysql.php");
	include("../ypirangaV3/egressos_depoimentos/daf.php");
	include("../fa7carreiras/includes/daf.php");
	include ("valida_login.php");
	
	$vagas = NULL;
	$tipo = $_REQUEST['tipo'];
	$vagas = recuperarVagas($tipo);
?>

<html>
<head>
<title>Faculdade 7 de Setembro</title>
<!-- INICIO Scripts JavaScript --->
<script language="javascript" src="ypiranga/includes/js.js"></script>
<script language="javascript" src="ypiranga/includes/noticia.js"></script>
<script language="javascript" type="text/javascript" src="egresso/includes/interno.js">
</script>
<!-- FIM Scripts JavaScript --->
<link rel="icon" href="http://www.fa7.edu.br/icon_fa7.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="<?= $host ?>recursos/css/<?= $pele ?>/interno.css">
<!--[if lt IE 7]> 
<link rel="stylesheet" type="text/css" href="<?= $host ?>recursos/css/<?= $pele ?>/interno_IE6.css">
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?= $host ?>recursos/css/<?= $pele ?>/interno_IE7.css">
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Faculdade 7 de Setembro">
<!--Fireworks MX CSS Layer.
    Created -->
</head>
<body onLoad="MM_preloadImages('<?= $host ?>recursos/css/<?= $pele ?>/imagens/facaagorasuamatricula_f2.jpg');">

<div align="center">
<div id="container" align="center">
  <!-------------------------- TOPO:INICIO ---------------------------->
  <?php include($host . "recursos/includes/topo.php"); ?>
  <!-------------------------- TOPO:FIM ---------------------------->
  <div id="content">
   		<!-- div>
			<h1 style="padding: 10px;">P&oacute;s-Gradua&ccedil;&atilde;o</h1>
		</div -->
    		
    <div id="destaquePrincipal" style="background: url(<?= $host ?>recursos/css/<?= $pele ?>/imagens/egressos_faixa.jpg) no-repeat;">
		<p id="migalhaDePao">
			Principal > Atividades Complementares
		</p>
		<ul id="linksInterno">
            <!-- ? include("menuFaixa.php"); ? -->
      </ul>
    </div><!-- Fim destaquePrincipal  -->
    <div id="conteudo">
	  <div id="links">

        <div id="imagemDoCurso"><?php include( "includes/lateral.php"); ?>  
           <p></p>
		</div><!-- imagemDoCurso -->
          
			  <!-------------------------- MENU DIREITA:INICIO ---------------------------->
			  <div id="linksCaderno" class="links">	
			  </div>
			  <!-------------------------- MENU DIREITA:FIM ---------------------------->
	   </div><!-- links -->
	  <div id="principal">
				<br />
           		<?php
					if ($_REQUEST['tipo'] == "EMPREGO") {
				?>
          <img src="../recursos/imagens/Image/fa7carreiras/vagas_emprego_titulo.jpg" />
          <?php
				} else {
				?>
          <img src="../recursos/imagens/Image/fa7carreiras/vagas_estagio_titulo.jpg" />
          <?php
				} // fim else
			?>
          <br />
          <img src="../recursos/imagens/Image/fa7carreiras/barra_titulo_vagas_estagio.jpg" width="500"/> <br />
          <br />
          <!-- CONTEUDO -->
          <? while ($vagas != NULL && $vaga = mysql_fetch_assoc($vagas)) { ?>
          <div class="detalhado">
            <?php if (ltrim(rtrim($vaga['logomarca'])) != "") { ?>
            <div class="fotovagas"><img src="<?= $host ?>fa7carreiras/imagens/<?= $vaga['logomarca'] ?>" width="97" height="71" class="semborda" /> </div>
            <?php } ?>
            <div class="metadados">
              <p class="dataublicacao">
                <?= dataPt($vaga['datapublicacao']) ?>
              </p>
              <? if ($vaga['flag_titulo'] == "EMPRESA") {?>
              <h2> <a href="controle.php?acao=exibirVaga&id=<?= $vaga['id_vaga'] ?>">
                <?= $vaga['nome_fantasia'] ?>
                </a> </h2>
              <? } else { ?>
              <h2> <a href="controle.php?acao=exibirVaga&id=<?= $vaga['id_vaga'] ?>">
                <?= $vaga['segmento'] ?>
                </a> </h2>
              <? } ?>
              <?php if ($vaga['tipo'] == "EMPREGO") { ?>
              <h3><span class="titulo"><strong>Cargo:</strong></span>
                <?= $vaga['nome'] ?>
              </h3>
              <?php } ?>
              <h3><span class="titulo">Cursos:</span>
                <?= $vaga['area'] ?>
              </h3>
              <p><span class="titulo">Sobre a vaga:</span></p>
              <p>
                <?= $vaga['descricao'] ?>
              </p>
            </div>
          </div>
          <? } //fim do while ?>
          <? if ($vagas == NULL) { ?>
          <div align="center" style="color:#666666">
            <h2>Nenhuma vaga cadastrada no momento!</h2>
          </div>
          <? } //fim if ?>


	  </div><!-- Fim #principal -->
    </div><!-- Fim #conteudo -->

  </div>
   <div id="rodape"> Faculdade 7 de Setembro<br/>
    Rua Alm. Maximiniano da Fonseca, 1395 - Eng. Luciano Cavalcante -CEP 60811 - 020<br />
    Fortaleza-CE - Brasil -Fone: +55 85 4006-7600 - Fax:+55 85 4006-7614 </div>
  <!--------------------------- STOP COPYING THE HTML HERE --------------------------->
</div>
</div>
</body>
</html>
