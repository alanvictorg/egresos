<?  session_start();
	include("../config/layout.php");
	include("../ypiranga/includes/conexao.php");
	include("../ypiranga/includes/funcoes.php");
	include ("valida_login.php");
		
	if(isset($_POST['Enviar']) and $_POST['Enviar'] == "Enviar") {		
        $matricula =$_SESSION['matricula'];
		//$id_aluno =$_POST['id_aluno'];
		$perg_formacao_complementar = $_POST['perg_formacao_complementar'];
		$resp_formacao_complementar_qual = $_POST['resp_formacao_complementar_qual'];
		$resp_formacao_complementar_instituicao = $_POST['resp_formacao_complementar_instituicao'];
		$perg_outro_curso_fa7 = $_POST['perg_outro_curso_fa7'];
		$resp_outro_curso_graduacao = $_POST['resp_outro_curso_graduacao'];
		$resp_outro_curso_especializacao = $_POST['resp_outro_curso_especializacao'];
		$resp_outro_curso_extensao = $_POST['resp_outro_curso_extensao'];
		$trabalhava_antes = $_POST['trabalhava_antes'];
		$trabalhou_durante = $_POST['trabalhou_durante'];
		$situacao_ocupacional = $_POST['situacao_ocupacional'];
		$empregador = $_POST['empregador'];
		$esta_trabalhando = $_POST['esta_trabalhando'];
		$ramo_atividade = $_POST['ramo_atividade'];
		$tipo_empresa = $_POST['tipo_empresa'];
		$perg_funcao_cargo = $_POST['perg_funcao_cargo'];
		$se_trabalha_renda = $_POST['se_trabalha_renda'];
		$concluiu_articulacao = $_POST['concluiu_articulacao'];
		$concluiu_facilidade = $_POST['concluiu_facilidade'];
		$concluiu_conhecimentos = $_POST['concluiu_conhecimentos'];		
		$concluiu_conhecimentos_gerais = $_POST['concluiu_conhecimentos_gerais'];
		if(isset($_POST['destacaria_disciplinas'])) {
			$destacaria_disciplinas = "S";
		} else {
			$destacaria_disciplinas = "N";
		}
		if(isset($_POST['destacaria_bibliografia'])) {
			$destacaria_bibliografia = "S";
		} else {
			$destacaria_bibliografia = "N";
		}		
		if(isset($_POST['destacaria_corpodocente'])) {
			$destacaria_corpodocente = "S";
		} else {
			$destacaria_corpodocente = "N";
		}	
		if(isset($_POST['destacaria_conhecimentos'])) {
			$destacaria_conhecimentos = "S";
		} else {
			$destacaria_conhecimentos = "N";
		}
		if(isset($_POST['destacaria_organizacao'])) {
			$destacaria_organizacao = "S";
		} else {
			$destacaria_organizacao = "N";
		}		
		$curso_concluiu = $_POST['curso_concluiu'];  			

		$inserir_questionario = "INSERT INTO 
		questionario_egresso VALUES (NULL,
		                		'$matricula',
								'$perg_formacao_complementar',
								'$resp_formacao_complementar_qual',
								'$resp_formacao_complementar_instituicao',
								'$perg_outro_curso_fa7',
								'$resp_outro_curso_graduacao',
								'$resp_outro_curso_especializacao',
								'$resp_outro_curso_extensao',
								'$trabalhava_antes',
								'$trabalhou_durante',
								'$situacao_ocupacional',
								'$empregador',
								'$esta_trabalhando' ,
								'$ramo_atividade',
								'$tipo_empresa', 
								'$perg_funcao_cargo', 
								'$se_trabalha_renda', 
								'$concluiu_articulacao',
								'$concluiu_facilidade', 
								'$concluiu_conhecimentos', 
								'$concluiu_conhecimentos_gerais',
								'$destacaria_disciplinas',
								'$destacaria_bibliografia',
								'$destacaria_corpodocente',
								'$destacaria_conhecimentos',
								'$destacaria_organizacao', 
								'$curso_concluiu')";
										
		$resultado_questionario = mysql_query($inserir_questionario);
//	$matricula = mysql_insert_id();
		if ($resultado_questionario) {
			redirect("bemvindo.php?mensagem=sucesso");
		} else {
			redirectMsg("Ocorreu algum erro em seu cadastro. Tente novamente.","formulario.php");
		}
	}
?>
