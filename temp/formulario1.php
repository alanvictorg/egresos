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
			</table>
		</form>
	</div> <!--<div id="principal"> -->
</div> <!--<div id="conteudo"> -->
</body>
</html>