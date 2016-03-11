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
						Sua situação ocupacional atual é:<br/>
						<input name="flag_situacao_atual" type="radio" value="opcao1">
							Exercendo atividade profissional
						<input name="flag_situacao_atual" type="radio" value="opcao2" >
							Sem atividade profissional					
					</td>
				</tr>
				<tr>
					<td>
						Você é:<br>
						<input name="flag_voce_e" type="radio" value="opcao1" >
							Empregador(a)
						<input name="flag_voce_e" type="radio" value="opcao2" >
							Outra						
					</td>
				</tr>
				<tr>
					<td>
						Se você está trabalhando, sua função exercida:<br/>
						<input name="flag_trabalhando_funcao" type="radio" value="opcao1" >
							É resultado da graduação na FA7
						<input name="flag_trabalhando_funcao" type="radio" value="opcao2" >
							Independe de escolaridade						
					</td>
				</tr>
				<tr>
					<td>
						Qual o ramo de atividade da empresa em que trabalha?<br/>
						<input name="flag_ramo_empresa" type="checkbox" value="industria" >
							Indústria
						<input name="flag_ramo_empresa" type="checkbox" value="comercio" >
							Comércio
						<input name="flag_ramo_empresa" type="checkbox" value="servicos" >
							Serviços
						<input name="flag_ramo_empresa" type="checkbox" value="ong" >
							Terceiro Setor - ONG												
					</td>
				</tr>
				<tr>
					<td>
						A empresa na qual exerce sua função é:<br/>
						<input name="flag_tipo_empresa" type="radio" value="privada" >
							Privada
						<input name="flag_tipo_empresa" type="radio" value="publica" >
							Pública	
						<input name="flag_tipo_empresa" type="radio" value="propria" >
							Própria			
					</td>
				</tr>
				<tr>
					<td>
						Se você trabalha, qual a sua função/cargo:<br/>
						<select name="trabalha_funcao">
							<option value="opcao1" selected>Opção 1</option>
							<option value="opcao2">Opção 2</option>
							<option value="opcao3">Opção 3</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Se você trabalha, a sua renda mensal é de:<br/>
						<input name="trabalha_renda" type="radio" value="opcao1" >
							até 2 (dois) salários mínimos <br/>
						<input name="trabalha_renda" type="radio" value="opcao2" >
							de 2 (dois) a 5 (cinco) salários mínimos <br/>
						<input name="trabalha_renda" type="radio" value="opcao3" >
							de 5 (cinco) a 10 (dez) salários mínimos <br/>
						<input name="trabalha_renda" type="radio" value="opcao4" >
							de 10 (dez) a 20 (vinte) salários mínimos <br/>
						<input name="trabalha_renda" type="radio" value="opcao5" >
							mais de 20 (vinte) salários mínimos		
					</td>
				</tr>																										
			</table><br/>
		</form>
	</div> <!--<div id="principal"> -->
</div> <!--<div id="conteudo"> -->
</body>
</html>