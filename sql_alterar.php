<?
		session_start();
		include("../config/layout.php");
		include("../ypiranga/includes/conexao.php");
		include("../ypiranga/includes/funcoes.php");
		include ("valida_login.php");
		
		 if(isset($_POST['Enviar']) and $_POST['Enviar'] == "atualizar") {
		// $id_aluno = $_POST['id_aluno'];
		$matricula = $_SESSION['matricula'];
		$status = $_POST['status'];
		$nome = $_POST['nome'];
		$nascimento = dataBd($_POST['nascimento']);
		$id_curso = $_POST['id_curso'];
		$ano_conclusao = $_POST['ano_conclusao'];
		$endereco = $_POST['endereco'];
		$numero = $_POST['numero'];
		$complemento = $_POST['complemento'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$cep = $_POST['cep'];
		$fone_residencial = $_POST['fone_residencial'];
		$fone_residencial_ddd = $_POST['fone_residencial_ddd'];
		$fone_celular = $_POST['fone_celular'];
		$fone_celular_ddd = $_POST['fone_celular_ddd'];
		$email = $_POST['email'];
		
		$alterar_aluno = "UPDATE aluno SET
				status='$status',
				nome='$nome',
				nascimento='$nascimento',
				id_curso='$id_curso',
				ano_conclusao='$ano_conclusao',
				endereco='$endereco',
				numero='$numero',
				complemento='$complemento',
				bairro='$bairro',
				cidade='$cidade',
				estado='$estado',
				cep='$cep',
				fone_residencial='$fone_residencial',
				fone_residencial_ddd='$fone_residencial_ddd',
				fone_celular='$fone_celular',
				fone_celular_ddd='$fone_celular_ddd',
				email='$email'
				WHERE matricula='$matricula'";
				
		$result_doc = mysql_query($alterar_aluno) or die(mysql_error());	
		if ($result_doc) {	
			$select = "SELECT matricula FROM questionario_egresso WHERE matricula ='$_SESSION[matricula]'";
			$result = mysql_query($select) or die(mysql_error());
			$dados = mysql_fetch_array($result);	
			$rows = mysql_num_rows($result);
			if($rows == 0){			 
				redirect("formulario.php");			
			}				
			redirect("bemvindo.php");
			} else { 
				redirectMsg("Ocorreu algum erro em seu cadastro. Tente novamente.","bemvindo.php");
			}	
		}
		  
?>
 