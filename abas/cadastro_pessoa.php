<?php $cor_destaque='lightyellow'; ?>
<?php include_once("../conecta/abredb_postgre.php"); ?>
<?php include_once("abas_opcoes.php"); ?>
<?php include_once("../include/biblioteca.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=latin1" />
        <link rel="stylesheet" href="teste.css" media="screen" type="text/css" />
        <title>Cadastro de Pessoa</title>
    
        <!-- Scipts javascript utilizados !-->
        <SCRIPT language="JavaScript" src="../js/biblioteca.js"></SCRIPT>
        <SCRIPT language="JavaScript" src="../js/fat.js"></SCRIPT>
        <script language="javascript" src="ajax.js"></script>
        <script language="javascript" src="../js/mascara.js"></script>
        <script language="javascript" src="funcoes_ajax.js"></script>
        <script language="javascript" src="validacao_bic.js"></script> 
	</head>

	<body bgcolor="#ffffff" topmargin="0" leftmargin="0" onLoad="document.form1.cmbAssentamento.focus();">
    
	<?php //include_once("topo.php"); ?>
   	
    <div id="global">
    
	<form name="form1" method="post" action="cadastrar_editar_sucesso.php">
    <input type="hidden" id="abatual" value="1" />
    
	<?php  
	if (isset ($_GET["bic"])){
		$query = "SELECT * FROM \"BIC\" as bic INNER JOIN \"DadosSocioEconomicos\" as dados ON bic.\"IdCadastro\"=dados.\"IdCadastro\"  WHERE bic.\"IdCadastro\"='$_GET[bic]' ";
		$resultp = pg_query($query);
		$rowp = pg_fetch_assoc($resultp);
		 ?>
		<input type="hidden" name="acao" value="editar">
        <input type="hidden" name="IdCadastro" value="<?php echo $_GET["bic"]; ?>">
    <?php }  else {?>
        <input type="hidden" name="acao" value="gravar">
	<?php } ?>

    
    <?php // -------------------------------------- Abas de opções --------------------------------------------- ?>
	<div id="opcoes">
        <?php 
		gerar_abas(1, "Identifica&ccedil;&atilde;o da Pessoa", 1);
		gerar_abas(2, "Saúde", 0);
		gerar_abas(3, "Educação", 0);
		gerar_abas(4, "Trabalho", 0);
		gerar_abas(5, "Dudu", 0);
		?>
    </div>
    
    <?php // --------------------------------- Conteúdo das abas de opções ------------------------------------------- ?>
    
    <div id="informacoes_bic">
        <div id="opcao1" style="background-color:#FFFFFF; display:block;"><?php include 'pessoa_composicao.php'; ?></div>
        <div id="opcao2" style="background-color:#FFFFFF; display:none;"><?php include 'pessoa_saude.php'; ?></div>
        <div id="opcao3" style="background-color:#FFFFFF; display:none;"><?php include 'pessoa_educacao.php'; ?></div>
        <div id="opcao4" style="background-color:#FFFFFF; display:none;"><?php include 'pessoa_trabalho.php'; ?></div>
        <div id="opcao5" style="background-color:#FFFFFF; display:none;"><?php include 'pessoa_trabalho.php'; ?></div>
	</div>
    <input type="button" value="Gravar" onclick="validacao();" />
    </form>
    
    </div>
    
    </body>
</html>
