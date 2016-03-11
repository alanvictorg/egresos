<?php  session_start(); ?>
<html>
<head>

	<meta charset="utf-8">

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/docs.min.css" rel="stylesheet">
	<link href="../css/hcentro.css" rel="stylesheet">

	<title>FA7 | Formulário de Egressos</title>

</head>

<body>
	<div class="container-fluid">
  		<h1 class="h1center">Atenção</h1>
		<fieldset class="highlight">
		<h3>Por favor, verifique se todos os dados informados estão corretos.</h3>
		<h3>Caso encontre erros, clique em VOLTAR e corrija-os.</h3>
		<h3>Caso todos os dados estejam corretos, clique em CONFIRMAR.</h3>
		</fieldset>
		<form role="form" method="post" action="save.php">

			<?php 
			$_SESSION["nome"] = $_POST["nome"];
			$_SESSION["matricula"] = $_POST["matricula"];

			$_SESSION['pai'] = $_POST["pai"];
			$_SESSION['mae'] = $_POST["mae"];
			$_SESSION['nacionalidade'] = $_POST["nacionalidade"];
			$_SESSION['uf'] = $_POST["uf"];
			$_SESSION['pais'] = $_POST["pais"];
			$_SESSION['identidade'] = $_POST["identidade"];
			$_SESSION['uf_identidade'] = $_POST["uf_identidade"];
			$_SESSION['emissor'] = $_POST["emissor"];

			$_SESSION["telefone"] = $_POST["telefone"];
			$_SESSION["telefone2"] = $_POST["telefone2"];
			$_SESSION["endereco"] = $_POST["endereco"];
			$_SESSION["email"] = $_POST["email"];
			$_SESSION["genero"] = $_POST["genero"];
			$_SESSION["estado_civil"] = $_POST["estado_civil"];
			$_SESSION["estado_civil_outros"] = $_POST["estado_civil_outros"];
			$_SESSION["curso_concluido_fa7"] = $_POST["curso_concluido_fa7"];
			$_SESSION["idade_conclusao"] = $_POST["idade_conclusao"];
			$_SESSION["ano_conclusao"] = $_POST["ano_conclusao"];
			$_SESSION["tempo_curso"] = $_POST["tempo_curso"];
			$_SESSION["trabalhando"] = $_POST["trabalhando"];
			$_SESSION["trabalhando_onde"] = $_POST["trabalhando_onde"];
			$_SESSION["emprego_na_area"] = $_POST["emprego_na_area"];
			$_SESSION["tempo_emprego"] = $_POST["tempo_emprego"];
			$_SESSION["funcao_trabalho"] = $_POST["funcao_trabalho"];
			$_SESSION["funcao_trabalho_outros"] = $_POST["funcao_trabalho_outros"];
			$_SESSION["setor_atuacao"] = $_POST["setor_atuacao"];
			$_SESSION["empresa"] = $_POST["empresa"];
			$_SESSION["faixa_salarial"] = $_POST["faixa_salarial"];
			$_SESSION["formacao_a"]= $_POST["formacao_a"];
			$_SESSION["formacao_b"] = $_POST["formacao_b"];
			$_SESSION["formacao_c"] = $_POST["formacao_c"];
			$_SESSION["formacao_d"] = $_POST["formacao_d"];
			$_SESSION["formacao_e"] = $_POST["formacao_e"];
			$_SESSION["formacao_f"] = $_POST["formacao_f"];
			$_SESSION["formacao_g"] = $_POST["formacao_g"];
			$_SESSION["instituicao_a"] = $_POST["instituicao_a"];
			$_SESSION["instituicao_b"] = $_POST["instituicao_b"];
			$_SESSION["instituicao_c"] = $_POST["instituicao_c"];
			$_SESSION["cursando_outra_graduacao"] = $_POST["cursando_outra_graduacao"];
			$_SESSION["qual_outra_graduacao"] = $_POST["qual_outra_graduacao"];
			$_SESSION["cursou_pos_graduacao"] = $_POST["cursou_pos_graduacao"];
			$_SESSION["qual_pos_graduacao_cursou"] = $_POST["qual_pos_graduacao_cursou"];
			$_SESSION["cursando_pos_graduacao"] = $_POST["cursando_pos_graduacao"];
			$_SESSION["qual_pos_graduacao_cursando"] = $_POST["qual_pos_graduacao_cursando"];
			$_SESSION["pretende_cursar_pos_graduacao"] = $_POST["pretende_cursar_pos_graduacao"];
			$_SESSION["area_pos_graduacao_pretendida"] = $_POST["area_pos_graduacao_pretendida"];
			$_SESSION["recomendaria_a_fa7"] = $_POST["recomendaria_a_fa7"]; 

			?>

		  <div>
				<fieldset class="highlight">
				<p><label class="control-label">Matrícula:</label> <?php echo $_SESSION["matricula"]; ?></p>
				<p><label class="control-label">Nome:</label> <?php echo $_SESSION["nome"]; ?></p>
				
				<p><label class="control-label">Pai:</label> <?php echo $_SESSION["pai"]; ?></p>
				<p><label class="control-label">Mãe:</label> <?php echo $_SESSION["mae"]; ?></p>
				<p><label class="control-label">Nacionalidade:</label> <?php echo $_SESSION["nacionalidade"]; ?></p>
				<p><label class="control-label">Estado (UF):</label> <?php echo $_SESSION["uf"]; ?></p>
				<p><label class="control-label">País:</label> <?php echo $_SESSION["pais"]; ?></p>
				<p><label class="control-label">Carteira de Identidade:</label> <?php echo $_SESSION["identidade"]; ?></p>
				<p><label class="control-label">Emissor: </label> <?php echo $_SESSION["emissor"]; ?> - <?php echo $_SESSION["uf_identidade"]; ?></p>

				<p><label class="control-label">Telefone:</label> <?php echo $_SESSION["telefone"]; ?></p>
				<p><label class="control-label">Telefone:</label> <?php echo $_SESSION["telefone2"]; ?></p>
				<p><label class="control-label">Endereço:</label> <?php echo $_SESSION["endereco"]; ?></p>
				<p><label class="control-label">E-mail:</label> <?php echo $_SESSION["email"]; ?></p>
				<p><label class="control-label">Gênero:</label> <span class="text-capitalize"><?php echo $_SESSION["genero"]; ?></span></p>
				<p><label class="control-label">Estado Civil:</label> <span class="text-capitalize"><?php echo $_SESSION["estado_civil"]; ?></span></p>
				<p><label class="control-label">Curso concluído:</label> <?php echo $_SESSION["curso_concluido_fa7"]; ?></p>
				<p><label class="control-label">Idade que terminou o curso:</label> <?php echo $_SESSION["idade_conclusao"]; ?></p>
				<p><label class="control-label">Ano de conclusão:</label> <?php echo $_SESSION["ano_conclusao"]; ?></p>
				</fieldset>

				<div>
					<button type="button" class="btn btn-primary" onClick="history.go(-1);">Voltar</button>
				
					<button type="submit" class="btn btn-success">Confirmar</button>
				</div>
			</div>
		</form>
</div>
	
</body>

</html>