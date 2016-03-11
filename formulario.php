
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Formulário Egressos</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Bootstrap Form Helpers -->
    <link href="css/bootstrap-formhelpers.css" rel="stylesheet" media="screen">
  </head>

  <body>
    <?php include("includes/topo.php"); ?>
    <div class="container-fluid">
        <div class="bs-docs-header" id="content">
          <div class="container">
            <h1>Acompanhamento de Egressos</h1>
            <?php if (isset($_REQUEST['mensagem'])) { ?>
	            <p style="padding: 10px; background: #b4f494; border: dotted #FFFFFF 1px;"><?php echo $_REQUEST['mensagem']; ?></p>
            <?php } else { ?>
    	        <p>Olá, seja bem-vindo!</p>
        	    <p>Ao responder esta entrevista, você estará contribuindo para traçar um perfil mais realista dos egressos da FA7.</p>
            <?php } ?>
          </div>
        </div>
    	
        <div class="container">
    	<div class="col-md-7">
        	<?php if((isset($_REQUEST['sucesso'])) && ($_REQUEST['sucesso'] == 'ok')) { ?>
	        	<p><span class="text-capitalize"><?php echo($_REQUEST['nome']); ?></span>, obrigado pela sua contribuição.</p>
            <?php } else { ?>
           		<img src="img/fa7-capa.jpg" alt="Logo egressos" />
            <?php } ?>
        </div>
		
        <div class="col-md-5">
            <form action="controle/form-controle.php" class="form-signin" role="form">
                <h2 class="form-signin-heading">Entrar</h2>
                <input name="cpf" type="text" class="form-control" placeholder="CPF somente dígitos, sem pontos ou traços" required autofocus>
                <input name="nascimento" type="text" placeholder="Ex: 21/11/1984"
                    required class="form-control">
                <br/>
                <br/>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
            </form>
		</div>
		</div>
    </div> <!-- /container -->


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
