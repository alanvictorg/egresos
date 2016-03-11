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
		  	<table border="0px">
				<tr>
					<td><strong>1 - Identificação</strong><br/><br/></td>
				</tr>
				<tr>
					<td>
						Nome: <input name="nome" type="text" size="70"><br/>
					</td>
				</tr>
				<tr>
					<td>
						Nascimento: <input name="nascimento" type="text" size="15">
						Curso: <input name="curso" type="text" size="20">
						Ano de Conclusão: <input name="nome" type="text" size="10">
					</td>
				</tr>
				<tr>
					<td>
						Endereço: <input name="endereco" type="text" size="70">
						Número: <input name="numero" type="text" size="4">
					</td>
				</tr>
				<tr>
					<td>
						Complemento: <input name="complemento" type="text" size="40">
						Bairro: <input name="bairro" type="text" size="40">
					</td>
				</tr>
				<tr>
					<td>
						Cidade: <input name="cidade" type="text" size="20">
						CEP: <input name="cep" type="text" size="15">
					</td>
				</tr>
				<tr>
					<td>
						Telefone Residencial: (<input name="fone_residencial" type="text" size="1">) - <input name="nome" type="text" size="10">
						Celular: (<input name="fone_celular" type="text" size="1">) - <input name="nome" type="text" size="10">
					</td>
				</tr>
				<tr>
					<td>
						E-mail: <input name="email" type="text" size="70">
					</td>
				</tr>									
			</table><br/>
			<table>
				<tr>
					<td><strong>2 - Educa&ccedil;&atilde;o Continuada</strong><br/>
				  <br/></td>
				</tr>
				<tr>
					<td>
						Voc&ecirc; fez ou est&aacute; fazendo algum curso/programa de forma&ccedil;&atilde;o complementar?
						<br/>
						<input name="flag_curso" type="radio" value="S" >Sim
						<input name="flag_curso" type="radio" value="N" >N&atilde;o	
					</td>
				</tr>
				<tr>
					<td>
						Qual: <input name="qual_curso" type="text" size="30">
						Institui&ccedil;&atilde;o: <input name="instituicao_curso" type="text" size="30">	
					</td>
				</tr>
				<tr>
					<td>
						Voc&ecirc; tem interesse em realizar outro curso na FA7?
						<br/>
						<input name="flag_outro_curso" type="radio" value="S" >Sim
						<input name="flag_outro_curso" type="radio" value="N" >N&atilde;o	
				  </td>
				</tr>
				<tr>
					<td>
						Caso positivo qual?
						<br/>
						De gradua&ccedil;&atilde;o: <input name="nome" type="text" size="30"><br/>
						De especializa&ccedil;&atilde;o: 
						<input name="nome" type="text" size="30"><br/>
						De extens&atilde;o: 
						<input name="nome" type="text" size="30"><br/>
				  </td>
				</tr>							
			</table><br/>
			<table>
				<tr>
					<td><strong>3 - Dados Profissionais</strong><br/><br/></td>
				</tr>
				<tr>
					<td>
						Trabalhava/estagiava antes de iniciar seus estudos na FA7?<br/>
						<input name="flag_curso" type="radio" value="S" >Sim
						<input name="flag_curso" type="radio" value="N" >N&atilde;o						
					</td>
				</tr>
				<tr>
					<td>
						Trabalhou/estagiou durante seus estudos na FA7?<br/>
						<input name="flag_curso" type="radio" value="S" >Sim
						<input name="flag_curso" type="radio" value="N" >N&atilde;o						
					</td>
				</tr>
				<tr>
					<td>
						Sua situação ocupacional atual é:<br/>
						<input name="flag_curso" type="radio" value="opcao1">
							Exercendo atividade profissional
						<input name="flag_curso" type="radio" value="opcao2" >
							Sem atividade profissional					
					</td>
				</tr>
				<tr>
					<td>
						Você é:<br>
						<input name="flag_curso" type="radio" value="opcao1" >
							Empregador(a)
						<input name="flag_curso" type="radio" value="opcao2" >
							Outra						
					</td>
				</tr>
				<tr>
					<td>
						Se você está trabalhando, sua função exercida:<br/>
						<input name="flag_curso" type="radio" value="opcao1" >
							É resultado da graduação na FA7
						<input name="flag_curso" type="radio" value="opcao2" >
							Independe de escolaridade						
					</td>
				</tr>
				<tr>
					<td>
						Qual o ramo de atividade da empresa em que trabalha?<br/>
						<input name="flag_curso" type="checkbox" value="industria" >
							Indústria
						<input name="flag_curso" type="checkbox" value="comercio" >
							Comércio
						<input name="flag_curso" type="checkbox" value="servicos" >
							Serviços
						<input name="flag_curso" type="checkbox" value="ong" >
							Terceiro Setor - ONG												
					</td>
				</tr>
				<tr>
					<td>
						A empresa na qual exerce sua função é:<br/>
						<input name="flag_curso" type="radio" value="privada" >
							Privada
						<input name="flag_curso" type="radio" value="publica" >
							Pública	
						<input name="flag_curso" type="radio" value="propria" >
							Própria			
					</td>
				</tr>
				<tr>
					<td>
						Se você trabalha, qual a sua função/cargo:<br/>
						<select name="funcaocargo">
							<option value="opcao1" selected>Opção 1</option>
							<option value="opcao2">Opção 2</option>
							<option value="opcao3">Opção 3</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Se você trabalha, a sua renda mensal é de:<br/>
						<input name="flag_salario" type="radio" value="opcao1" >
							até 2 (dois) salários mínimos <br/>
						<input name="flag_salario" type="radio" value="opcao2" >
							de 2 (dois) a 5 (cinco) salários mínimos <br/>
						<input name="flag_salario" type="radio" value="opcao3" >
							de 5 (cinco) a 10 (dez) salários mínimos <br/>
						<input name="flag_salario" type="radio" value="opcao4" >
							de 10 (dez) a 20 (vinte) salários mínimos <br/>
						<input name="flag_salario" type="radio" value="opcao5" >
							mais de 20 (vinte) salários mínimos		
					</td>
				</tr>																										
			</table><br/>
			<table border="0px">
				<tr>
					<td>
						<strong>4 - Contribuição do Curso à sua Profissão<br/><br/></strong>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>O curso que você concluiu na FA7 proporcionou-lhe:</td>
				</tr>
				<tr>
				 	<td>
						
						<p>A articulação entre formação acadêmica e o exercício profissional:</p>
						<p>Facilidade de compreensão das relações de trabalho:</p>
						<p>Conhecimentos necessários e úteis para sua atividade profissional:</p>
						<p>Conhecimentos gerais:</p>
					</td>
					<td>
						<p>
							<input name="flag_concluiu" type="radio" value="S" >Sim
							<input name="flag_concluiu" type="radio" value="N" >N&atilde;o
						</p>
						<p>
							<input name="flag_academica" type="radio" value="S" >Sim
							<input name="flag_academica" type="radio" value="N" >N&atilde;o
						</p>
						<p>
							<input name="flag_academica" type="radio" value="S" >Sim
							<input name="flag_academica" type="radio" value="N" >N&atilde;o
						</p>
						<p>
							<input name="flag_academica" type="radio" value="S" >Sim
							<input name="flag_academica" type="radio" value="N" >N&atilde;o
						</p>	
					</td>					
				</tr>
				<tr>
					<td>
						Você destacaria positivamente da sua formação na graduação:<br/>
						<input name="flag_destacaria" type="checkbox" value="matriz" >
							O conjunto de disciplinas da matriz curricular
						<br/>
						<input name="flag_destacaria" type="checkbox" value="bibliografia" >
							A bibliografia utilizada no curso
						<br/>
						<input name="flag_destacaria" type="checkbox" value="corpodocente" >
							O corpo docente
						<br/>
						<input name="flag_destacaria" type="checkbox" value="conhecimentos" >
							Os conteúdos/conhecimentos desenvolvidos
						<br/>
						<input name="flag_destacaria" type="checkbox" value="instituicao" >
							A organização da instituição												
					</td>
				</tr>
				<tr>
					<td>
						O curso que você concluiu na FA7 atendeu às necessidades exigidas pelo mercado de trabalho:<br/>
						<input name="flag_destacaria" type="checkbox" value="matriz" >
							Atendeu totalmente
						<br/>
						<input name="flag_destacaria" type="checkbox" value="bibliografia" >
							Atendeu parcialmente
						<br/>
						<input name="flag_destacaria" type="checkbox" value="corpodocente" >
							Não atendeu												
					</td>
				</tr>				
			</table>
		</form>
	</div> <!--<div id="principal"> -->
</div> <!--<div id="conteudo"> -->
</body>
</html>
