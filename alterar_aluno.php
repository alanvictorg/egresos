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
<script type="text/javascript" language="javascript">
<!-- 
function confere() {
	var mensagem = "";
	if (document.formulario.nome.value == "") {
		mensagem +=  "- Informe seu nome\n";
	}
	if (document.formulario.nascimento.value == "") {
		mensagem += "- Informe sua data de nascimento\n";
	}
	
	
	if (mensagem == "") {
		return true;	
	} else {
		mensagem = "Por favor, reveja as informações preenchidas, observando: \n" + mensagem;
			alert(mensagem);
			return false;
	}
	
}
//-->
</script>
</head>
<body >
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
	      <?	      				
		    $sql = "SELECT *, c.nome_curso as curso, a.nome as aluno FROM aluno a, curso c  WHERE matricula ='$_SESSION[matricula]'" ;
		    $resultado = mysql_query($sql) or die(mysql_error());
		    $linha = mysql_fetch_array($resultado);	
	      ?>

	    </div><!-- links -->
	    <div id="principal">
          <h1>
            <!-- CONTEUDO -->
            Dados Pessoais </h1>
          <p>Confira todos os seus dados. Fa&ccedil;a as devidas corre&ccedil;&otilde;es ou altera&ccedil;&otilde;es, caso seja necess&aacute;rio, para que a FA7 possa entrar em contato com voc&ecirc;. <br>
            <br>
          </p>
          <form action="sql_alterar.php" method="post" name="formulario"
					onsubmit="javascript: return confere();" >

			
			<div align="center"></div>
		  	<table bgcolor="#DEEEFF">
				<tr bgcolor="#EFF7FF">
					<td align="right">Nome completo:</td>
					<td><input name="nome" type="text" size="50" value="<?= isset($linha['aluno']) ? $linha['aluno'] : "" ?>"></td>
				</tr>
				<!--<tr bgcolor="#DEEEFF">
					<td align="right">CPF:</td>
					<td><input name="cpf" type="text" size="50" value="<?= isset($linha['cpf']) ? $linha['cpf'] : "" ?>"></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Matr&iacute;cula:</td>
					<td><input name="matricula" type="text" size="50" value="<?= isset($linha['matricula']) ? $linha['matricula'] : "" ?>"></td>
				</tr> -->
				<tr bgcolor="#DEEEFF">
					<td align="right">Status:</td>
					<td>
						<select name="status">
							<option>Egresso</option>
							<option>Cursando</option>
						</select>
					</td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Data de anivers&aacute;rio :</td>
					<td>
						<input type="text" name="nascimento" id="nascimento" onKeyPress="return ajustar_data(this, event)" value="<?= (isset($linha['nascimento']) && $linha['nascimento'] != '0000-00-00') ? dataPt($linha['nascimento']) : "" ?>"/>
					</td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Curso:</td>
					<td>
						<select name="id_curso" id="id_curso">
						<? 
			   				opcoesSelect(recuperarCurso(),"id_curso","nome_curso",$linha['id_curso']);
						?>
						</select>						
					</td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Ano de Conclusão:</td>
					<td><input name="ano_conclusao" type="text" size="10" value="<?= isset($linha['ano_conclusao']) ? $linha['ano_conclusao'] : "" ?>"></td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Endereço:</td>
					<td><input name="endereco" type="text" size="40" value="<?= isset($linha['endereco']) ? $linha['endereco'] : "" ?>"></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Número:</td>
					<td><input name="numero" type="text" size="2" value="<?= isset($linha['numero']) ? $linha['numero'] : "" ?>"></td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Bairro:</td>
					<td><input name="bairro" type="text" size="40" value="<?= isset($linha['bairro']) ? $linha['bairro'] : "" ?>"></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Complemento: <br> <small><em>(Ex.: n&ordm; do apartamento)</em></small></td>
					<td><input name="complemento" type="text" size="40" value="<?= isset($linha['complemento']) ? $linha['complemento'] : "" ?>"></td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Estado:</td>
					<td><? include ("includes/recuperarEstados.php") ?></td>
				</tr>				
				<tr bgcolor="#EFF7FF">
					<td align="right">Cidade:</td>
					<td><input name="cidade" type="text" size="20" value="<?= isset($linha['cidade']) ? $linha['cidade'] : "" ?> "></td>
				</tr>			
				<tr bgcolor="#DEEEFF">
					<td align="right">
						CEP <small>(somente n&uacute;meros)</small>:</td>
					<td><input name="cep" type="text" size="15" value="<?= isset($linha['cep']) ? $linha['cep'] : "" ?>"></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">Telefone Residencial:</td>
					<td>(<input name="fone_residencial_ddd" type="text" size="1" maxlength="2" value="<?= isset($linha['fone_residencial_ddd']) ? $linha['fone_residencial_ddd'] : "" ?>">) - <input name="fone_residencial" type="text" size="10" value="<?= isset($linha['fone_residencial']) ? $linha['fone_residencial'] : "" ?>"></td>
				</tr>
				<tr bgcolor="#DEEEFF">
					<td align="right">Celular:</td>
					<td>(<input name="fone_celular_ddd" type="text" size="1" maxlength="2" value="<?= isset($linha['fone_celular_ddd']) ? $linha['fone_celular_ddd'] : "" ?>">) - <input name="fone_celular" type="text" size="10" value="<?= isset($linha['fone_celular']) ? $linha['fone_celular'] : "" ?>"></td>
				</tr>
				<tr bgcolor="#EFF7FF">
					<td align="right">E-mail:</td>
					<td><input name="email" type="text" size="50" value="<?= isset($linha['email']) ? $linha['email'] : "" ?>"></td>
				</tr>																																	
			</table>
			<div align="center">
			<br/><input type="submit" name="Enviar" value="atualizar"/>
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
