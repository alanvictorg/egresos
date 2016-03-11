<?php  session_start();
include("controle/lib/util.php");

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

	<title>FA7 | Novo Formulário de Egressos</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/docs.min.css" rel="stylesheet">

</style>
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

 <!-- Bootstrap Form Helpers -->
    <link href="css/bootstrap-formhelpers.min.css" rel="stylesheet" media="screen">



	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body role="document">
	<?php include("includes/topo.php"); ?>

    <?php
      if(isset($_SESSION['cpf'])) {

      $contador = 1;
    ?>
  	<div class="container-fluid" role="main">
    	<div class="jumbotron">
            <h1>Egressos</h1>
            <p>Preencha os campos com as informações mais atuais</p>

      	</div>
        <form role="form" id="egressos-form" method="post" action="confirmar_formulario.php" class="form-horizontal">
<?php include("formulario_egressos.php") ?>

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
