<?
	include("../../config/layout.php");
	include("../../ypiranga/includes/conexao.php");
	include("../../ypiranga/includes/funcoes.php");
?>
<html>
<head>
	<title>Faculdade 7 de Setembro</title>
</head>
<body>
<div id="conteudo">
	<div id="principal">
	<form action="INDEFINIDO" method="post" name="INDEFINIDO">
		<table>
				<tr>
					<td><strong>3 - Dados Profissionais</strong><br/><br/></td>
				</tr>
				<tr>
					<td>
						Trabalhava/estagiava antes de iniciar seus estudos na FA7?<br/>
						<input name="flag_trabalhava_antes" type="radio" value="S" >Sim
						<input name="flag_trabalhava_antes" type="radio" value="N" >N&atilde;o						
					</td>
				</tr>
				<tr>
					<td>
						Trabalhou/estagiou durante seus estudos na FA7?<br/>
						<input name="flag_trabalhou_durante" type="radio" value="S" >Sim
						<input name="flag_trabalhou_durante" type="radio" value="N" >N&atilde;o						
					</td>
				</tr>
				<tr>
					<td>
						Sua situa��o ocupacional atual �:<br/>
						<input name="flag_situacao_atual" type="radio" value="opcao1">
							Exercendo atividade profissional
						<input name="flag_situacao_atual" type="radio" value="opcao2" >
							Sem atividade profissional					
					</td>
				</tr>
				<tr>
					<td>
						Voc� �:<br>
						<input name="flag_voce_e" type="radio" value="opcao1" >
							Empregador(a)
						<input name="flag_voce_e" type="radio" value="opcao2" >
							Outra						
					</td>
				</tr>
				<tr>
					<td>
						Se voc� est� trabalhando, sua fun��o exercida:<br/>
						<input name="flag_trabalhando_funcao" type="radio" value="opcao1" >
							� resultado da gradua��o na FA7
						<input name="flag_trabalhando_funcao" type="radio" value="opcao2" >
							Independe de escolaridade						
					</td>
				</tr>
				<tr>
					<td>
						Qual o ramo de atividade da empresa em que trabalha?<br/>
						<input name="flag_ramo_empresa" type="checkbox" value="industria" >
							Ind�stria
						<input name="flag_ramo_empresa" type="checkbox" value="comercio" >
							Com�rcio
						<input name="flag_ramo_empresa" type="checkbox" value="servicos" >
							Servi�os
						<input name="flag_ramo_empresa" type="checkbox" value="ong" >
							Terceiro Setor - ONG												
					</td>
				</tr>
				<tr>
					<td>
						A empresa na qual exerce sua fun��o �:<br/>
						<input name="flag_tipo_empresa" type="radio" value="privada" >
							Privada
						<input name="flag_tipo_empresa" type="radio" value="publica" >
							P�blica	
						<input name="flag_tipo_empresa" type="radio" value="propria" >
							Pr�pria			
					</td>
				</tr>
				<tr>
					<td>
						Se voc� trabalha, qual a sua fun��o/cargo:<br/>
						<select name="trabalha_funcao">
							<option value="opcao1" selected>Op��o 1</option>
							<option value="opcao2">Op��o 2</option>
							<option value="opcao3">Op��o 3</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Se voc� trabalha, a sua renda mensal � de:<br/>
						<input name="trabalha_renda" type="radio" value="opcao1" >
							at� 2 (dois) sal�rios m�nimos <br/>
						<input name="trabalha_renda" type="radio" value="opcao2" >
							de 2 (dois) a 5 (cinco) sal�rios m�nimos <br/>
						<input name="trabalha_renda" type="radio" value="opcao3" >
							de 5 (cinco) a 10 (dez) sal�rios m�nimos <br/>
						<input name="trabalha_renda" type="radio" value="opcao4" >
							de 10 (dez) a 20 (vinte) sal�rios m�nimos <br/>
						<input name="trabalha_renda" type="radio" value="opcao5" >
							mais de 20 (vinte) sal�rios m�nimos		
					</td>
				</tr>																										
			</table><br/>
		</form>
	</div> <!--<div id="principal"> -->
</div> <!--<div id="conteudo"> -->
</body>
</html>