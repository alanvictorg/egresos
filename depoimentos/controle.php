<?   session_start();
require_once("../../ypirangaV3/includes/conexao.php");
require_once("../../ypirangaV3/includes/funcoesmysql.php");
include("../../ypirangaV3/includes/funcoes.php");
include("../../ypirangaV3/egressos_depoimentos/daf.php"); 
//include("../../includes/valida_login.php");

/* Envia para o formul�rio de alterar ou inserir
if (isset($_REQUEST['acao']) && $_REQUEST['acao'] == "editar") {
	if (isset($_REQUEST['id'])) {
		$id = $_REQUEST['id'];		
		redirect("editar.php?id=".$id);
	} else {		
		redirect("editar.php");
	}

// Ap�s preencher o formul�rio de inserir ou de alterar } */
if (isset($_REQUEST['acao']) && $_REQUEST['acao'] == "salvar") {
	
	 $depoimento['matricula'] = $_SESSION['matricula'];
	 $depoimento['titulo'] = $_POST['titulo'];
	 $depoimento['mensagem'] = $_POST['mensagem'];

	//Se o id estiver setado � porque � uma altera��o, caso contr�rio � uma inser��o
//	if (isset($_REQUEST['id']) && $_REQUEST['id'] != "") {
//		$depoimento['id'] = $_REQUEST['id'];		
//		alterarDepoimento($depoimento);
//	} else {	
		 inserirDepoimento($depoimento);
//	}
	//Volta a p�gina inicial
	redirect("listadepoimentos.php");


}else if (isset($_REQUEST['acao']) && $_REQUEST['acao'] == "excluir") {

	excluirDepoimentos($_REQUEST['id']);
	redirect("listadepoimentos.php");

}

?>