<?php  session_start();
include("../controle/lib/util.php");

//$idade_na_conclusao = idade_pela($_SESSION['data_nascimento'], $_SESSION['data_conclusao_do_curso']);
//$dados_conclusao = explode("/", $_SESSION['data_conclusao_do_curso']);
?>
<!DOCTYPE>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="file:///Macintosh HD/Applications/XAMPP/xamppfiles/htdocs/sitefa7/favicon.ico">
  <!--link rel="stylesheet" href="../css/bootstrapValidator.css"/>
<script type="text/javascript" src="../js/bootstrapValidator.js"></script-->

	<title>FA7 | Formulário de Egressos</title>

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/docs.min.css" rel="stylesheet">

</style>
	<!-- Custom styles for this template -->
	<link href="../css/style.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

 <!-- Bootstrap Form Helpers -->
    <link href="../css/bootstrap-formhelpers.min.css" rel="stylesheet" media="screen">



	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body role="document">
	<?php include("../includes/topo.php"); ?>

    <?php
      if(isset($_SESSION['cpf'])) {

      $contador = 1;
    ?>
  	<div class="container-fluid" role="main">
    	<div class="jumbotron">
            <h1>Egressos</h1>
            <p>Verifique os dados abaixo e atualize aqueles que forem necessários.</p>

      	</div>


  			<form role="form" id="egressos-form" method="post" action="form-confirm.php" class="form-horizontal">
              <div class="page-header">
                <h3>Informações Pessoais</h3>
              </div>
				<fieldset class="highlight">
				<div class="form-group">
  					<label for="EgressoMatricula" class="col-sm-3 control-label"><?php echo $contador++; ?>. Número de matrícula</label>
  					<div class="col-sm-9">
                    	<input name="matricula" value="<?php echo $_SESSION['matricula']?>" data-validation="required" class="form-control" type="text" id="EgressoMatricula" readonly/>
                    </div>
  				</div>

                <div class="form-group">
  					<label for="EgressoNome" class="col-sm-3 control-label"><?php echo $contador++; ?>. Nome completo</label>
                    <div class="col-sm-9">
  						<input type="text" data-validation="required"
  							class="form-control" name="nome"
                            value="<?php echo $_SESSION['nome']?>"
                            id="EgressoNome" placeholder="Informe o seu nome"
                            required/>
                    </div>
  				</div>

  				<div class="form-group">
  					<label for="EgressoPai" class="col-sm-3 control-label"><?php echo $contador++; ?>. Pai</label>
                    <div class="col-sm-9">
  						<input type="text" data-validation="required"
  							class="form-control" name="pai"
                            value="<?php echo $_SESSION['pai']?>"
                            id="EgressoPai" placeholder="Informe o nome do seu pai"
                            required/>
                    </div>
  				</div>

  				<div class="form-group">
  					<label for="EgressoMae" class="col-sm-3 control-label"><?php echo $contador++; ?>. Mãe</label>
                    <div class="col-sm-9">
  						<input type="text" data-validation="required"
  							class="form-control" name="mae"
                            value="<?php echo $_SESSION['mae']?>"
                            id="EgressoMae" placeholder="Informe o nome da sua mãe"
                            required/>
                    </div>
  				</div>

  				<div class="form-group">
  					<label for="EgressoNacionalidade" class="col-sm-3 control-label"><?php echo $contador++; ?>. Nacionalidade</label>
                    <div class="col-sm-9">
  						<input type="text" data-validation="required"
  							class="form-control" name="nacionalidade"
                            value="<?php echo $_SESSION['nacionalidade']?>"
                            id="EgressoNacionalidade" placeholder="Informe sua nacionalidade"
                            required/>
                    </div>
  				</div>

  				<div class="form-group">
  					<label for="EgressoUf" class="col-sm-3 control-label"><?php echo $contador++; ?>. UF (Estado)</label>
                    <div class="col-sm-9">
  						<input type="text" data-validation="required"
  							class="form-control" name="uf"
  							maxlenght="2"
                            value="<?php echo $_SESSION['uf']?>"
                            id="EgressoUf" placeholder="Informe a sigla do seu estado de nascimento (UF)"
                            required/>
                    </div>
  				</div>

  				<div class="form-group">
  					<label for="EgressoPais" class="col-sm-3 control-label"><?php echo $contador++; ?>. País</label>
                    <div class="col-sm-9">
  						<input type="text" data-validation="required"
  							class="form-control" name="pais"
                            value="<?php echo $_SESSION['pais']?>"
                            id="EgressoPais" placeholder="Informe seu país de nascimento"
                            required/>
                    </div>
  				</div>

  				<div class="form-group">
  					<label for="EgressoIdentidade" class="col-sm-3 control-label"><?php echo $contador++; ?>. Carteira de Identidade (RG)</label>
                    <div class="col-sm-9">
  						<input type="text" data-validation="required"
  							class="form-control" name="identidade"
                            value="<?php echo $_SESSION['identidade']?>"
                            id="EgressoIdentidade" placeholder="Informe o número da sua Identidade"
                            required/>
                    </div>
  				</div>

  				<div class="form-group">
  					<label for="EgressoEmissor" class="col-sm-3 control-label"><?php echo $contador++; ?>. Órgão Emissor</label>
                    <div class="col-sm-9">
  						<input type="text" data-validation="required"
  							class="form-control" name="emissor"
                            value="<?php echo $_SESSION['emissor']?>"
                            id="EgressoEmissor" placeholder="Informe o órgão emisssor da identidade"
                            required/>
                    </div>
  				</div>

  				<div class="form-group">
  					<label for="EgressoUfIdentidade" class="col-sm-3 control-label"><?php echo $contador++; ?>. Estado(UF) do Órgão Emissor</label>
                    <div class="col-sm-9">
  						<input type="text" data-validation="required"
  							class="form-control" name="uf_identidade"
                            value="<?php echo $_SESSION['uf_identidade']?>"
                            id="EgressoUfIdentidade" placeholder="Informe o Estado (UF) do órgão emisssor da identidade"
                            required/>
                    </div>
  				</div>


  				<div class="form-group">
  					<label for="EgressoTelefone" class="col-sm-3 control-label"><?php echo $contador++; ?>. Telefone de contato</label>
                    <div class="col-sm-9">
  					<input name="telefone" data-validation="required" required
                    	class="form-control bfh-phone" data-format="(dd) dddd-dddd" type="text" id="EgressoTelefone"
                        placeholder="(XX) XXXX-XXXX"
  										  value="<?php echo (ltrim(rtrim($_SESSION['telefone'])) != "") ? $_SESSION['telefone'] : "" ?>"

							/>
                     </div>
  				</div>


  				<div class="form-group">
  					<label for="EgressoTelefone2" class="col-sm-3 control-label"><?php echo $contador++; ?>. Outro telefone de contato</label>
                    <div class="col-sm-9">
  					<input name="telefone2" data-validation="required" required
                    	class="form-control bfh-phone" data-format="(dd) dddd-dddd" type="text" id="EgressoTelefone2"
                        placeholder="(XX) XXXX-XXXX"
												value="<?php echo (ltrim(rtrim($_SESSION['telefone2'])) != "") ? $_SESSION['telefone2'] : "" ?>"
							/>
                     </div>
  				</div>

  				<div class="form-group">
  					<label for="EgressoEndereco" class="col-sm-3 control-label"><?php echo $contador++; ?>. Endereço</label>
                    <div class="col-sm-9">
  					<input name="endereco" value="<?php echo $_SESSION['endereco']?>" data-validation="required" type="text"  class="form-control" id="EgressoEndereco" required/>
                    </div>
  				</div>
  				<div class="form-group">
  					<label for="EgressoEmail" class="col-sm-3 control-label"><?php echo $contador++; ?>. E-mail</label>
                    <div class="col-sm-9">
  						<input name="email" class="form-control" type="email" data-validation="required" id="EgressoEmail"
  						value="<?php echo $_SESSION['email']?>" required/>
                    </div>
  				</div>


  				<div class="form-group">
  					<label for= "InputSexo" class="col-sm-3 control-label"><?php echo $contador++; ?>. Gênero do concluinte</label>
                    <div class="col-sm-9">
                        <label for="EgressoGeneroFeminino" class="radio-inline">
                            <input data-bv-notempty data-bv-notempty-message="Gênero é obrigatório"
                            	type="radio" name="genero" id="EgressoGeneroFeminino" value="feminino"
                            	<?php echo ($_SESSION['genero'] == "F") ? "checked" : "" ?>
                            	/>
                            Feminino
                        </label>
                        <label for="EgressoGeneroMasculino" class="radio-inline">
                            <input type="radio" name="genero" id="EgressoGeneroMasculino" value="masculino"
							    <?php echo ($_SESSION['genero'] == "M") ? "checked" : "" ?>
                            />
                            Masculino
                        </label>
                    </div>
                 </div>
                 <div class="form-group">
                    <label for= "InputSexo" class="col-sm-3 control-label"><?php echo $contador++; ?>. Estado civil</label>
					<div class="col-sm-9">
                        <label for="EgressoEstadoCivilSolteiro"  class="radio-inline">
                            <input type="radio" name="estado_civil" id="EgressoEstadoCivilSolteiro" value="solteiro" />
                            Solteiro(a)
                        </label>
                        <label for="EgressoEstadoCivilCasado"  class="radio-inline">
                            <input type="radio" name="estado_civil" id="EgressoEstadoCivilCasado" value="casado" />
                            Casado(a)
                        </label>
                        <label for="EgressoEstadoCivilSeparado"  class="radio-inline">
                            <input type="radio" name="estado_civil" id="EgressoEstadoCivilSeparado" value="separado" />
                            Separado(a)
                        </label>
                        <label for="EgressoEstadoCivilDivorciado"  class="radio-inline">
                            <input type="radio" name="estado_civil" id="EgressoEstadoCivilDivorciado" value="divorciado" />
                            Divorciado(a)
                        </label>
                        <label for="EgressoEstadoCivilViuvo"  class="radio-inline">
                            <input type="radio" name="estado_civil" id="EgressoEstadoCivilViuvo" value="viuvo" />
                            Viúvo(a)
                        </label>
                        <br/>
                    </div>

                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                    	<br/>
                        <div class="col-xs-2">
                    	<label for="EgressoEstadoCivilOutros"  class="radio-inline">
                            <input type="radio" name="estado_civil" id="EgressoEstadoCivilOutros" value="outros" />
                            Outros:
                        </label>
                        </div>
                        <div class="col-xs-7">
                            <input name="estado_civil_outros"
                                class="form-control"
                                placeholder="Caso não se aplique um dos valores acima, espeficique outro"
                                type="text" id="estado_civil_outros"/>
                        </div>
                    </div>
  				</div>

				</fieldset>
<?php include("../formulario_egressos.php") ?>
  			</form>

  	</div>
    <script> $("egressos-form").validate(); </script>
    <?php
        } else {
          echo "<script>window.location = 'http://www.fa7.edu.br/egressos-dev2/'</script>";
        }
    ?>

    <!-- JQuery -->
   	<script src="../assets/js/ie-emulation-modes-warning.js"></script>
  	<script src="../js/jquery-1.11.1.min.js"></script>
  	<script src="../js/jquery.form-validator.js"></script>
  	<script src="../js/egressos-form-validator.js"></script>
	<script src="../js/validatorPtBr.js"></script>

    <script src="../js/bootstrap.min.js"></script>

    <!-- Bootstrap Form Helpers -->

    <script src="../js/bootstrap-formhelpers.js"></script>
  </body>
</html>
