<?php  session_start(); ?>
<html>
<head>

	<meta charset="utf-8">

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/docs.min.css" rel="stylesheet">
	<link href="css/hcentro.css" rel="stylesheet">

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
		<form role="form" method="post" action="salvar_formulario.php">

			<?php 

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

<div class="col-md-2"></div>
<div class="col-md-8">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Informações Sócio-Econômicas</h3>
  </div>
  <div class="panel-body">
    <p><strong>Curso concluído na FA7: </strong> <?php echo $_SESSION['curso_concluido_fa7'] ?></p>
    <p><strong>Idade na conclusão do curso: </strong> <?php echo $_SESSION['idade_conclusao'] ?></p>
    <p><strong>Ano de conclusão do curso: </strong> <?php echo $_SESSION['ano_conclusao'] ?></p>
    <p><strong>Duração do curso: </strong> <?php echo $_SESSION['tempo_curso'] ?> anos</p>
  </div>
</div>
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Informações Profissionais</h3>
  </div>
  <div class="panel-body">
    <p><strong>Está trabalhando?: </strong> <?php echo $_SESSION['trabalhando'] ?></p>
    <?php if ($_SESSION['trabalhando'] == "SIM") { ?>
    <p><strong>Empresa onde trabalha: </strong> <?php echo $_SESSION['trabalhando_onde']; ?></p> <?php } ?>
    <p><strong>Possui emprego na área?: </strong> <?php echo $_SESSION['emprego_na_area'] ?></p>
    <p><strong>Neste emprego há quanto tempo?: </strong> <?php echo $_SESSION['tempo_emprego'] ?></p>
    <p><strong>Atual função no emprego: </strong> <?php 
      if ($_SESSION['funcao_trabalho'] == "outros") {
        echo $_SESSION['funcao_trabalho_outros']; }
      else {
        echo $_SESSION['funcao_trabalho']; }?> </p>
    <p><strong>Setor de atuação da empresa: </strong> <?php echo $_SESSION['setor_atuacao'] ?></p>
    <p><strong>Tipo de empresa: </strong> <?php echo $_SESSION['empresa'] ?></p>
    <p><strong>Faixa salarial: </strong> <?php echo $_SESSION['faixa_salarial'] ?></p>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Informações sobre a Formação na FA7</h3>
  </div>
  <div class="panel-body">
    <table class="table">
  <tr>
    <th>Critério</th>
    <th class="text-right">Nota</th>
  </tr>
  <tr>
    <td>Os conteúdos/programas das disciplinas foram adequadamente desenvolvidos, auxiliando na sua formação pessoal e profissional</td>
    <td class="text-right"><?php echo $_SESSION['formacao_a'] ?></td>
  </tr>
  <tr>
    <td>Em termos de experiência profissional, foi importante ter feito graduação na FA7</td>
    <td class="text-right"><?php echo $_SESSION['formacao_b'] ?></td>
  </tr>
  <tr>
    <td>A formação teórica foi importante para empregabilidade</td>
    <td class="text-right"><?php echo $_SESSION['formacao_c'] ?></td>
  </tr>
  <tr>
    <td>A formação na FA7 permite exercer a cidadania com ética</td>
    <td class="text-right"><?php echo $_SESSION['formacao_d'] ?></td>
  </tr>
  <tr>
    <td>A formação na FA7 permite compreender o contexto social e econômico para tomada de decisão</td>
    <td class="text-right"><?php echo $_SESSION['formacao_e'] ?></td>
  </tr>
  <tr>
    <td>A formação na FA7 permite ter flexibilidade para atuar no mercado de trabalho</td>
    <td class="text-right"><?php echo $_SESSION['formacao_f'] ?></td>
  </tr>
  <tr>
    <td>A disciplina de estágio supervisionado serviu para sistematizar/testar/exercitar os conhecimentos adquiridos</td>
    <td class="text-right"><?php echo $_SESSION['formacao_g'] ?></td>
  </tr>
</table>
<p class="text-muted"><small>Nota entre 1 (menor valor) a 10 (maior valor) para os critérios acima.</small></p>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Informações sobre a Instituição</h3>
  </div>
  <div class="panel-body">
    <table class="table">
  <tr>
    <th>Critério</th>
    <th class="text-right">Nota</th>
  </tr>
  <tr>
    <td>Ensino</td>
    <td class="text-right"><?php echo $_SESSION['instituicao_a'] ?></td>
  </tr>
  <tr>
    <td>Estrutura</td>
    <td class="text-right"><?php echo $_SESSION['instituicao_b'] ?></td>
  </tr>
  <tr>
    <td>Reconhecimento da FA7 como referência em educação</td>
    <td class="text-right"><?php echo $_SESSION['instituicao_c'] ?></td>
  </tr>
  
</table>
<p class="text-muted"><small>Nota entre 1 (menor valor) a 5 (maior valor) para os critérios acima.</small></p>
  </div>
</div>

  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Informações Acadêmicas</h3>
  </div>
  <div class="panel-body">
    <p><strong>Está cursando ou cursou outro curso de Graduação?: </strong> <?php echo $_SESSION['cursando_outra_graduacao'] ?></p>
    <?php if ($_SESSION['cursando_outra_graduacao'] == "SIM") { ?>
    <p><strong>Qual curso?: </strong><?php echo $_SESSION['qual_outra_graduacao'] ?></p> <?php } ?>
    <p><strong>Você cursou algum curso de pós-graduação?: </strong> <?php echo $_SESSION['cursou_pos_graduacao'] ?></p>
    <?php if ($_SESSION['cursou_pos_graduacao'] == "SIM") { ?>
    <p><strong>Qual curso?: </strong><?php echo $_SESSION['qual_pos_graduacao_cursou'] ?></p> <?php } ?>
    <p><strong>Você está cursando pós-graduação?: </strong> <?php echo $_SESSION['cursando_pos_graduacao'] ?></p>
    <?php if ($_SESSION['cursando_pos_graduacao'] == "SIM") { ?>
    <p><strong>Qual curso?: </strong><?php echo $_SESSION['qual_pos_graduacao_cursando'] ?></p> <?php } ?>
    <p><strong>Se não está cursando, pretende cursar?: </strong> <?php echo $_SESSION['pretende_cursar_pos_graduacao'] ?></p>
    <?php if ($_SESSION['pretende_cursar_pos_graduacao'] == "SIM") { ?>
    <p><strong>Qual curso?: </strong><?php echo $_SESSION['area_pos_graduacao_pretendida'] ?></p> <?php } ?>
    <p><strong>Você recomendaria seu curso para outras pessoas?: </strong> <?php echo $_SESSION['recomendaria_a_fa7'] ?></p>
  </div>

</div>
<div>
  <button type="button" class="btn btn-primary" onClick="history.go(-1);">Voltar</button>
				
					<button type="submit" class="btn btn-success">Confirmar</button>
					</div>
</div>

		  <div>
				

				<div>
					
				</div>
			</div>
		</form>
</div>
	
</body>

</html>