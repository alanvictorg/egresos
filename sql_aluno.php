<?   
    session_start();
	include("../config/layout.php");
	include("../ypiranga/includes/conexao.php");
	include("../ypiranga/includes/funcoes.php");
	include ("valida_login.php");
	
		
	if(isset($_POST['Enviar']) and $_POST['Enviar'] == "Confirmar") {
		//$id_aluno = $_POST['id_aluno'];
		$cpf = $_POST['cpf'];
		$matricula = $_POST['matricula'];
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
		
		
		$inserir = "INSERT INTO aluno
		VALUES (NULL, '$cpf','$matricula','$status','$nome','$nascimento','$id_curso','$ano_conclusao', '$endereco', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cep', '$fone_residencial', '$fone_residencial_ddd', '$fone_celular', '$fone_celular_ddd', '$email')";
		$resultado = mysql_query($inserir);
		
		$matricula = mysql_insert_id();
		

		if ($resultado) {
			redirectMsg("Aluno cadastrado","bemvindo.php");
		} else {
			redirectMsg("Ocorreu algum erro em seu cadastro. Tente novamente.","formulario_aluno.php");
		}
	}
	
	
?>