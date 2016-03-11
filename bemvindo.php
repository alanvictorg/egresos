<?  session_start();
	include("../config/layout.php");
	include("../ypiranga/includes/conexao.php");
	include("../ypiranga/includes/funcoes.php");
	include ("includes/daf.php");
	include ("../ypiranga/includes/funcoeshtml.php");	
	include ("valida_login.php");
?>

<html>
<head>
<title>Faculdade 7 de Setembro</title>
<!-- INICIO Scripts JavaScript --->
<script language="javascript" src="../ypiranga/includes/js.js"></script>
<script language="javascript" src="../ypiranga/includes/noticia.js"></script>
<script language="javascript" type="text/javascript" src="includes/interno.js">
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
          <!-- CONTEUDO -->
	        <?	
				$sql = "SELECT *, c.nome_curso as curso, a.nome as aluno, c.id_curso, a.id_curso FROM aluno a, curso c  WHERE matricula ='$_SESSION[matricula]'
				AND a.id_curso = c.id_curso" ;
				$resultado = mysql_query($sql) or die(mysql_error());
				$linha = mysql_fetch_array($resultado);					
						
				/*$select = "SELECT matricula FROM questionario_egresso WHERE matricula ='$_SESSION[matricula]'";
				$result = mysql_query($select) or die(mysql_error());
				$dados = mysql_fetch_array($result);	
				$rows = mysql_num_rows($result);
				if($rows == 0){			 
				redirect("formulario.php");			
				}*/
		     ?>
		<form action="alterar_aluno.php" method="post" name="formulario">			
		<div align="left">
		  <h1><strong>Ol&aacute;, <?= isset($linha['aluno']) ? $linha['aluno'] : "" ?></strong></h1>
			<? if(isset($_REQUEST['mensagem']))  {?>			 
			<p class="mensagem">Obrigado por participar do nosso question&aacute;rio. Em breve entraremos em contato para comunicar novidades no site do egresso.</p>
		<? } ?>

		  <p>&nbsp;</p>
		</div>		
		<div align="center"></div>
		  	<table bgcolor="#DEEEFF">				
				<tr bgcolor="#DEEEFF">
					<td align="right">CPF:</td>
					<td> <?= isset($linha['cpf']) ? $linha['cpf'] : "" ?></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Matr&iacute;cula:</td>
					<td> <?= isset($linha['matricula']) ? $linha['matricula'] : "" ?></td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Status:</td>
					<td>
						<?= isset($linha['status']) ? $linha['status'] : "" ?>
					</td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Nascimento:</td>
					<td> <?= isset($linha['nascimento']) ? dataPt($linha['nascimento']) : "" ?></td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Curso:</td>
					<td><?= isset($linha['curso']) ? $linha['curso'] : "" ?></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Ano de Conclusão:</td>
					<td> <?= isset($linha['ano_conclusao']) ? $linha['ano_conclusao'] : "" ?></td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Endereço:</td>
					<td> <?= isset($linha['endereco']) ? $linha['endereco'] : "" ?></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Número:</td>
					<td> <?= isset($linha['numero']) ? $linha['numero'] : "" ?></td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Bairro:</td>
					<td> <?= isset($linha['bairro']) ? $linha['bairro'] : "" ?></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Complemento:</td>
					<td> <?= isset($linha['complemento']) ? $linha['complemento'] : "" ?></td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Estado:</td>
					<td> <?= isset($linha['estado']) ? $linha['estado'] : "" ?></td>
				</tr>				
				<tr bgcolor="#EFF7FF">
					<td align="right">Cidade:</td>
					<td> <?= isset($linha['cidade']) ? $linha['cidade'] : "" ?></td>
				</tr>			
				<tr bgcolor="#DEEEFF">
					<td align="right">CEP:</td>
				  <td><?= isset($linha['cep']) ? $linha['cep'] : "" ?></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Telefone Residencial:</td>
					<td>(<?= isset($linha['fone_residencial_ddd']) ? $linha['fone_residencial_ddd'] : "" ?>)<?= isset($linha['fone_residencial']) ? $linha['fone_residencial'] : "" ?></td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Celular:</td>
					<td>(<?= isset($linha['fone_celular_ddd']) ? $linha['fone_celular_ddd'] : "" ?>)<?= isset($linha['fone_celular']) ? $linha['fone_celular'] : "" ?></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">E-mail:</td>
					<td><?= isset($linha['email']) ? $linha['email'] : "" ?></td>
				</tr>																																	
			</table>
			<div align="right" style="margin-right:32px;"><br/><input type="submit" name="Alterar" value="alterar" /></div>
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
