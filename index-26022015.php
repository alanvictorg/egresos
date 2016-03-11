<?
    session_start();
    session_destroy();
	include("../config/layout.php");
	include("includes/conexao.php");
	include("includes/funcoes.php");
	include ("../ypiranga/includes/funcoesmysql.php");
	include ("../ypirangaV3/egressos_depoimentos/daf.php");
	
?>

<html>
<head>
<title>Faculdade 7 de Setembro</title>
<!-- INICIO Scripts JavaScript --->
<script language="javascript" src="../ypiranga/includes/js.js"></script>
<!-- FIM Scripts JavaScript --->
<script language="javascript" type="text/javascript" src="includes/interno.js">
</script>
<link rel="icon" href="http://www.fa7.edu.br/icon_fa7.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="<?= $host ?>recursos/css/<?= $pele ?>/interno.css">
<!--[if lt IE 7]> 
<link rel="stylesheet" type="text/css" href="<?= $host ?>recursos/css/<?= $pele ?>/interno_IE6.css">
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?= $host ?>recursos/css/<?= $pele ?>/interno_IE7.css">
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.fa7.edu.br/recursos/css/azul/interno_IE8.css"">
<![endif]-->
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
    		
    <div id="destaquePrincipal" style="background: url(<?= $host ?>recursos/css/<?= $pele ?>/imagens/egressos_faixa.jpg) no-repeat;">
		<p id="migalhaDePao">
			Principal
		</p>
		<ul id="linksInterno">
            <!-- ? include("menuFaixa.php"); ? -->
      </ul>
    </div><!-- Fim destaquePrincipal  -->
    <div id="conteudo">
	  <div id="links">
          <div id="imagemDoCurso"> <?php include( "includes/lateral.php"); ?>  
        		
          	<p>&nbsp;</p>
		  </div><!-- imagemDoCurso -->
          
			  <!-------------------------- MENU DIREITA:INICIO ---------------------------->
			  <div id="linksCaderno" class="links">
					  
					  
			  </div>
			  <!-------------------------- MENU DIREITA:FIM ---------------------------->

	   </div><!-- links -->	 
	    
	   <div id="principal">        
		 <h1 class="preto">A FA7 faz parte da sua hist&oacute;ria
       <br>e quer estar sempre<br> em contato com voc&ecirc;.</h1>
		 <div id="loginDiv" style="width: 570px;">
			<div id="direita">
			<form action="inscricaoValida.php" name="form" method="post">
			  <p>Acesse o Egressos FA7 com a sua matr&iacute;cula e CPF</p><br>
                 <table width="241">
                        <tr>
                           <td align="right">Matrícula:</td>
                           <td><input name="matricula" type="text" id="matricula"></td>
                        </tr>
                        <tr>
                           <td align="right">CPF:</td>
                           <td><input name="cpf" type="text" id="cpf"></td>
                        </tr>		
                        <tr>
                           <td></td>
                           <td><input type="submit" name="Submit" value="Enviar"></td>
                        </tr>
                 </table>
		   	</form>		   
			 <? if(isset($_REQUEST['mensagem']))  {?>			 
			<p class="mensagem"><?= $_REQUEST['mensagem'] ?></p>
		<? } ?>
			 </div><!-- Fim Direita	-->
		 	<div id="esquerda" style="width: 270px;">
                O Portal do Egresso é um canal de comunicação para
                você saber  as notícias da sua faculdade, 
                da sua área de formação, informações de eventos,
                oportunidades de emprego e programas de Trainees,
                além de encontros com colegas de turma.
			</div><!-- Fim Esquerda	-->
            
            <? $result = recuperarDepoimentos();
		 if(!empty($result)){  ?>
      <!--<h1 align="center"><strong>Depoimentos</strong></h1> -->
      <?  if(mysql_num_rows($result)>0){
			   $count = 1;
		 	   while($count<3){
				   	$depoimento = mysql_fetch_array($result);
					if(!empty($depoimento)){
	  ?>
                        <p><strong><?= $depoimento['titulo'] ?></strong></p>
                        <p><?= $depoimento['mensagem'] ?></p><br />
                            <div align="right">
                                <strong>
                                    Nome: <?= $depoimento['nome'] ?><br />
                                    Curso: <?= $depoimento['curso'] ?><br />
                                    Ano de Formatura: <?= $depoimento['ano_formatura'] ?><br />
                                </strong>
                            </div><br/><br/>
      <?			} //fim else ?>
	  <?            $count++;
			   }//fim while
      		}//fim if mysql_num_rows
		 } //fim if empty ?>
         
			 </div><!-- Fim Login	-->
		   </div>	
		 </div>
    <!-- Fim #conteudo -->

   <div id="rodape"> Faculdade 7 de Setembro<br/>
    Rua Alm. Maximiniano da Fonseca, 1395 - Eng. Luciano Cavalcante -CEP 60811 - 020<br />
    Fortaleza-CE - Brasil -Fone: +55 85 4006-7600 - Fax:+55 85 4006-7614 </div>
  <!--------------------------- STOP COPYING THE HTML HERE --------------------------->
</div>
</div>
</body>
</html>