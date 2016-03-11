<?   session_start();
require_once("../ypirangaV3/includes/conexao.php");
require_once("../ypirangaV3/includes/funcoesmysql.php");
include("../config/layout.php");
include("../ypirangaV3/includes/funcoes.php");
include("../ypirangaV3/egressos_depoimentos/daf.php"); 
include("valida_login.php");

// Apуs preencher o formulбrio de inserir ou de alterar } */
if (isset($_REQUEST['acao']) && $_REQUEST['acao'] == "salvar") {
	 $depoimento['nome'] = $_REQUEST['nome'];
	 $depoimento['curso'] = $_REQUEST['curso'];
	 $depoimento['ano_formatura'] = $_REQUEST['ano_formatura'];
	 $depoimento['mensagem'] = $_REQUEST['mensagem'];

	//Se o id estiver setado й porque й uma alteraзгo, caso contrбrio й uma inserзгo
	if (isset($_REQUEST['id']) && $_REQUEST['id'] != "") {
		$depoimento['id'] = $_REQUEST['id'];		
		alterarDepoimento($depoimento);
	} else {	
		 inserirDepoimento($depoimento);
	}
	//Volta a pбgina inicial
	redirect("/depoimentos/listadepoimentos.php");

}

else if(isset($_REQUEST['acao']) && $_REQUEST['acao'] == "exibirVagasEstagio") {
	$tipo = "ESTAGIO";
	redirect("vagas.php?tipo=".$tipo);
}

else if(isset($_REQUEST['acao']) && $_REQUEST['acao'] == "exibirVagasEmprego") {
	$tipo = "EMPREGO";
	redirect("vagas.php?tipo=".$tipo);
}
?>