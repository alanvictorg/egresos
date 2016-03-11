<?  
    session_start();
	include("../../config/layout.php");
	include("../../ypirangaV3/includes/conexao.php");
	include("../../ypirangaV3/includes/funcoes.php");
	include("../../ypirangaV3/includes/funcoeshtml.php");
	include("../../ypirangaV3/includes/funcoesmysql.php");
	include("../../ypirangaV3/egressos_depoimentos/daf.php");
	include("paginator.php");
	include("../valida_login.php");	
	
	$resultados = recuperarDepoimentosPaginados();
	$result = $resultados[0];
?>

<html>
<head>
<title>Faculdade 7 de Setembro</title>
<!-- INICIO Scripts JavaScript --->
<script language="javascript" src="../ypiranga/includes/js.js"></script>
<script language="javascript" src="../ypiranga/includes/noticia.js"></script>
<script language="javascript" type="text/javascript" src="../egresso/includes/interno.js">
</script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
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
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
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

        <div id="imagemDoCurso"><?php include( "../includes/lateral.php"); ?>  
           <p></p>
		</div><!-- imagemDoCurso -->
          
			  <!-------------------------- MENU DIREITA:INICIO ---------------------------->
			  <div id="linksCaderno" class="links">	
			  </div>
			  <!-------------------------- MENU DIREITA:FIM ---------------------------->
	   </div><!-- links -->
	  <div id="principal">
      <p>O seu depoimento é muito importante para nós. Neste espaço você tem à disposição um formulário para envio de depoimentos e opiniões que expressam o que você achou da FA7 e o que lhe foi proporcionado no decorrer do período em que você tem sido nosso aluno. Preencha os campos com suas informações e deixa aqui o seu depoimento.</p><br /><br />
      <form name="form1" method="post" action="controle.php?acao=salvar">
  		<table align="center">
    		<tr>
      			<td align="right">Título:</td>
      			<td><input name="titulo" type="text" size="40"></td>
    		</tr>
    		<tr>
      			<td align="right">Mensagem:</td>
                <td>
                    <span id="sprytextarea1">
                        <textarea name="mensagem" cols="45" rows="3"></textarea>
                        <br/>characteres inseridos: <span id="countsprytextarea1">&nbsp;</span>
                        <p><span class="textareaRequiredMsg">O depoimento é Obrigatório.</span>
                        <span class="textareaMaxCharsMsg">O depoimento deve conter no máximo 350
                        caracteres.
                        </span>
                        </p>
                    </span>
                </td> 
    		</tr>
  		</table>
            
  <div style="margin-left:200px; margin-top:2px">
    <input type="submit"value="Enviar">
    <input type="reset" value="Limpar">
  </div>
</form>

      <br /><br />
      <? 
	  	 //$result = recuperarDepoimentos();
		 if(!empty($result)){
	  ?>
      <h1 align="center"><strong>Depoimentos</strong></h1>
      <?
	  	 	if(mysql_num_rows($result)>0){
		 	   while($depoimento = mysql_fetch_array($result)){
	  ?>
      			<p><strong><?= $depoimento['titulo'] ?></strong></p>
                <p><?= $depoimento['mensagem'] ?></p><br />
                <div align="right"><strong>
                    Nome: <?= $depoimento['nome'] ?><br />
                    Curso: <?= $depoimento['curso'] ?><br />
                    Ano de Formatura: <?= $depoimento['ano_formatura'] ?><br />
                    <? if($depoimento['matricula']==$_SESSION['matricula']){ ?>
                    <a href="controle.php?acao=excluir&id=<?= $depoimento['id'] ?>">Excluir</a>
                    <? } //fim if ?>
                </strong></div><br /><br />
	  	<?
			}//fim while
				}//fim if mysql_num_rows
			 } //fim if empty
			 
			 paginar($resultados[1],$resultados[2],$resultados[3],$resultados[4]);
		?>

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
<script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {maxChars:350, counterId:"countsprytextarea1", counterType:"chars_count", validateOn:["change"], useCharacterMasking:false});
//-->
</script>
</body>
</html>
