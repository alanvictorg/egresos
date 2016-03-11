<?  session_start();
	include("../config/layout.php");
	include("../ypiranga/includes/conexao.php");
	include("../ypiranga/includes/funcoes.php");
	include("abas/abas_opcoes.php");
	include ("valida_login.php");
?>
<html>
<head>
<title>Faculdade 7 de Setembro</title>
<!-- INICIO Scripts JavaScript --->
<script language="javascript" src="../ypiranga/includes/js.js"></script>
<script language="javascript" src="abas/funcoes_ajax.js"></script>
<!-- FIM Scripts JavaScript --->
<script language="javascript" type="text/javascript" src="includes/interno.js">
</script>
<script type="text/JavaScript">
<!--

function exibe(elemento) {
	var elem = document.getElementById(elemento);
	elem.style.display = "block";
}
function exibeli(elemento) {
	var elem = document.getElementById(elemento);
	elem.style.display = "inline";
}
function esconde(elemento) {
	var elem = document.getElementById(elemento);
	elem.style.display = "none";
}
//-->
    </script>
<link rel="stylesheet" type="text/css" href="../recursos/css/abas.css">
<link rel="icon" href="http://www.fa7.edu.br/icon_fa7.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="<?= $host ?>recursos/css/<?= $pele ?>/interno.css">
<!--[if lt IE 7]> 
<link rel="stylesheet" type="text/css" href="<?= $host ?>recursos/css/<?= $pele ?>/interno_IE6.css">
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?= $host ?>recursos/css/<?= $pele ?>/interno_IE7.css">
<![endif]-->
<style>
	#egresso {
		margin: 0px;
		padding: 0px;
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Faculdade 7 de Setembro">
<!--Fireworks MX CSS Layer.
    Created -->
</head>
<body>
<div align="center">
  <div id="container" align="center">
    <!-------------------------- TOPO:INICIO ---------------------------->
    <?php include($host . "recursos/includes/topo.php"); ?>
    <!-------------------------- TOPO:FIM ---------------------------->
    <div id="content">
      <!-- div>
			<h1 style="padding: 10px;">P&oacute;s-Gradua&ccedil;&atilde;o</h1>
		</div -->
      <div id="destaquePrincipal" style="background: url(<?= $host ?>recursos/css/<?= $pele ?>/imagens/atividadescomplementares_faixa.jpg) no-repeat;">
        <p id="migalhaDePao"> Principal > Atividades Complementares </p>
        <ul id="linksInterno">
          <!-- ? include("menuFaixa.php"); ? -->
        </ul>
      </div>
      <!-- Fim destaquePrincipal  -->
      <div id="conteudo">
        <div id="links">
          <div id="imagemDoCurso"> <img src="<?= $host ?>recursos/css/<?= $pele ?>/imagens/administracao_logo.gif" alt="Atividades Complementares" />
            <p>Atividades Complementares</p>
          </div>
          <!-- imagemDoCurso -->
          <!-------------------------- MENU DIREITA:INICIO ---------------------------->
          <div id="linksCaderno" class="links"> NAVEGAÇÃO </div>
          <!-------------------------- MENU DIREITA:FIM ---------------------------->
        </div>
        <!-- links -->
        <div id="principal">
          <!-- CONTEUDO -->
          <form action="sql_formulario.php" method="post" name="formulario" id="egresso">
            <input type="hidden" name="matricula" value="<?= $_REQUEST['matricula'] ?>"/>
            <input type="hidden" id="abatual" value="1" />
            <div id="opcoes">
              <ul class="abas">
                <li class="ativo" id="edAt"><a href="javascript:exibe('opcao1');esconde('opcao2');esconde('opcao3');esconde('edInat');esconde('proAt');esconde('conAt');exibeli('edAt');exibeli('proInat');exibeli('conInat');" class="ativo">Educação Continuada</a></li>
                <li class="inativo" id="edInat" style="display:none;"><a href="javascript:exibe('opcao1');esconde('opcao2');esconde('opcao3');esconde('edInat');esconde('proAt');esconde('conAt');exibeli('edAt');exibeli('proInat');exibeli('conInat');" class="inativo">Educação Continuada</a></li>
                <li class="ativo" id="proAt"  style="display:none;"><a href="javascript:esconde('opcao1');exibe('opcao2');esconde('opcao3');" class="ativo">Dados Profissionais</a></li>
                <li class="inativo" id="proInat" ><a href="javascript:esconde('opcao1');exibe('opcao2');esconde('opcao3'); esconde('edAt');exibeli('edInat');exibeli('edInat');exibeli('proAt');esconde('conAt');esconde('proInat');exibeli('conInat');" class="inativo">Dados Profissionais</a></li>
                <li class="ativo" id="conAt"  style="display:none;"><a href="javascript:esconde('opcao1');esconde('opcao2');exibe('opcao3');esconde('edAt');exibeli('edInat');exibeli('edInat');esconde('proAt');exibeli('conAt');exibeli('proInat');esconde('conInat');" class="ativo">Contribuição do Curso à Sua Profissão</a></li>
                <li class="inativo" id="conInat"><a href="javascript:esconde('opcao1');esconde('opcao2');exibe('opcao3');esconde('edAt');exibeli('edInat');exibeli('edInat');esconde('proAt');exibeli('conAt');exibeli('proInat');esconde('conInat');" class="inativo">Contribuição do Curso à Sua Profissão</a></li>
              </ul>
            </div>
            <div>
              <div id="opcao1" style="background-color:#FFFFFF; display:block;">
                <?php include 'educacao_continuada.php'; ?>
              </div>
              <div id="opcao2" style="background-color:#FFFFFF; display:none;">
                <?php include 'contribuicao_curso_profissao.php'; ?>
              </div>
              <div id="opcao3" style="background-color:#FFFFFF; display:none;">
                <?php include 'dados_profissionais.php'; ?>
              </div>
            </div>
            <div align="center"><br/>
              <input type="submit" name="Enviar" value="Enviar"/>
            </div>
          </form>
        </div>
      </div>
      <!-- Fim #conteudo -->
    </div>
    <div id="rodape"> Faculdade 7 de Setembro<br/>
      Rua Alm. Maximiniano da Fonseca, 1395 - Eng. Luciano Cavalcante -CEP 60811 - 020<br />
      Fortaleza-CE - Brasil -Fone: +55 85 4006-7600 - Fax:+55 85 4006-7614 </div>
    <!--------------------------- STOP COPYING THE HTML HERE --------------------------->
  </div>
</div>
</body>
</html>
