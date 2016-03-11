<?php
session_start();
include("controle/lib/db-connection.php");
include("controle/lib/util.php");
include("controle/lib/db-egressos.php");
include("controle/lib/db.php");
include("controle/lib/config.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Dados do Egresso - Alterar</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Custom styles for this template -->


  <!-- Bootstrap Form Helpers -->
  <link href="css/bootstrap-formhelpers.css" rel="stylesheet" media="screen">
</head>

<body>
  <?php include("includes/topo.php"); ?>

  <?php
  $contador = 1;
  ?>
  <div class="container-fluid" role="main">
    <div class="jumbotron">
      <h1>Egressos</h1>
      <p>Verifique os dados abaixo e atualize aqueles que forem necessários.</p>

    </div>


    <form role="form" id="egressos-form" method="post" action="salvar_alteracoes.php" class="form-horizontal">
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
            required readonly/>
          </div>
        </div>

        <div class="form-group">
          <label for="EgressoPai" class="col-sm-3 control-label"><?php echo $contador++; ?>. Pai</label>
          <div class="col-sm-9">
            <input type="text" data-validation="required"
            class="form-control" name="pai"
            value="<?php echo $_SESSION['pai']?>"
            id="EgressoPai" placeholder="Informe o nome do seu pai"
            required readonly/>
          </div>
        </div>

        <div class="form-group">
          <label for="EgressoMae" class="col-sm-3 control-label"><?php echo $contador++; ?>. Mãe</label>
          <div class="col-sm-9">
            <input type="text" data-validation="required"
            class="form-control" name="mae"
            value="<?php echo $_SESSION['mae']?>"
            id="EgressoMae" placeholder="Informe o nome da sua mãe"
            required readonly/>
          </div>
        </div>

        <div class="form-group">
          <label for="EgressoNacionalidade" class="col-sm-3 control-label"><?php echo $contador++; ?>. Nacionalidade</label>
          <div class="col-sm-9">
            <input type="text" data-validation="required"
            class="form-control" name="nacionalidade"
            value="<?php echo $_SESSION['nacionalidade']?>"
            id="EgressoNacionalidade" placeholder="Informe sua nacionalidade"
            required readonly/>
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
            required readonly/>
          </div>
        </div>

        <div class="form-group">
          <label for="EgressoPais" class="col-sm-3 control-label"><?php echo $contador++; ?>. País</label>
          <div class="col-sm-9">
            <input type="text" data-validation="required"
            class="form-control" name="pais"
            value="<?php echo $_SESSION['pais']?>"
            id="EgressoPais" placeholder="Informe seu país de nascimento"
            required readonly/>
          </div>
        </div>

        <div class="form-group">
          <label for="EgressoIdentidade" class="col-sm-3 control-label"><?php echo $contador++; ?>. Carteira de Identidade (RG)</label>
          <div class="col-sm-9">
            <input type="text" data-validation="required"
            class="form-control" name="identidade"
            value="<?php echo $_SESSION['identidade']?>"
            id="EgressoIdentidade" placeholder="Informe o número da sua Identidade"
            required readonly/>
          </div>
        </div>

        <div class="form-group">
          <label for="EgressoEmissor" class="col-sm-3 control-label"><?php echo $contador++; ?>. Órgão Emissor</label>
          <div class="col-sm-9">
            <input type="text" data-validation="required"
            class="form-control" name="emissor"
            value="<?php echo $_SESSION['emissor']?>"
            id="EgressoEmissor" placeholder="Informe o órgão emisssor da identidade"
            required readonly/>
          </div>
        </div>

        <div class="form-group">
          <label for="EgressoUfIdentidade" class="col-sm-3 control-label"><?php echo $contador++; ?>. Estado(UF) do Órgão Emissor</label>
          <div class="col-sm-9">
            <input type="text" data-validation="required"
            class="form-control" name="uf_identidade"
            value="<?php echo $_SESSION['uf_identidade']?>"
            id="EgressoUfIdentidade" placeholder="Informe o Estado (UF) do órgão emisssor da identidade"
            required readonly/>
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
            <input name="telefone2" data-validation="required" 
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
          <label for="EgressoGenero" class="col-sm-3 control-label"><?php echo $contador++; ?>. Gênero</label>
          <div class="col-sm-9">
            <input name="genero" value="<?php echo $_SESSION['genero']?>" data-validation="required" type="text"  class="form-control" id="EgressoGenero" required readonly/>
          </div>
        </div>
        <div class="form-group">
          <label for= "InputSexo" class="col-sm-3 control-label"><?php echo $contador++; ?>. Estado civil</label>
          <div class="col-sm-9">
            <label for="EgressoEstadoCivilSolteiro"  class="radio-inline">
              <input type="radio" name="estado_civil" id="EgressoEstadoCivilSolteiro" value="solteiro"
              <?php echo ($_SESSION['estado_civil'] == "solteiro") ? "checked" : "" ?>
              />
              Solteiro(a)
            </label>
            <label for="EgressoEstadoCivilCasado"  class="radio-inline">
              <input type="radio" name="estado_civil" id="EgressoEstadoCivilCasado" value="casado"
              <?php echo ($_SESSION['estado_civil'] == "casado") ? "checked" : "" ?>
              />
              Casado(a)
            </label>
            <label for="EgressoEstadoCivilSeparado"  class="radio-inline">
              <input type="radio" name="estado_civil" id="EgressoEstadoCivilSeparado" value="separado"
              <?php echo ($_SESSION['estado_civil'] == "separado") ? "checked" : "" ?>
              />
              Separado(a)
            </label>
            <label for="EgressoEstadoCivilDivorciado"  class="radio-inline">
              <input type="radio" name="estado_civil" id="EgressoEstadoCivilDivorciado" value="divorciado"
              <?php echo ($_SESSION['estado_civil'] == "divorciado") ? "checked" : "" ?>
              />
              Divorciado(a)
            </label>
            <label for="EgressoEstadoCivilViuvo"  class="radio-inline">
              <input type="radio" name="estado_civil" id="EgressoEstadoCivilViuvo" value="viuvo"
              <?php echo ($_SESSION['estado_civil'] == "viuvo") ? "checked" : "" ?>
              />
              Viúvo(a)
            </label>
            <label for="EgressoEstadoCivilOutros"  class="radio-inline">
              <input type="radio" name="estado_civil" id="EgressoEstadoCivilOutros" value="outros" />
              Outro(a):
            </label>
            <br/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
              <input name="estado_civil_outros"
              class="form-control"
              placeholder='Caso tenha selecionado a opção "Outro(a)", espeficique aqui'
              type="text" id="estado_civil_outros"/>
            </div>
            </div>
          </div>
          <div class="col-sm-3"></div>
          <div class="col-sm-9" id="botoes">
            <button class="btn btn-lg btn-success" type="submit">Salvar alterações</button>
            <a class="btn btn-lg btn-danger" onClick="history.go(-1);" role="button">Cancelar</a>
          </div>
        </div>
</fieldset>
</form>


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

        <!-- jQuery -->
        <script src="js/jquery-1.11.2.min.js"></script>

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Bootstrap Form Helpers -->
        <script src="js/bootstrap-formhelpers.min.js"></script>
      </body>
      </html>
