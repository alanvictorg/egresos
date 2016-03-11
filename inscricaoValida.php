<?
session_start();
include ("includes/conexao.php");
include ("includes/funcoes.php");

// verifica se ja esta matriculado	
    //jaMatriculado($_POST['matricula']);	
//Verifica matricula e cpf se estao vazios....se vazio retorna msg!
	
	if(empty($_POST['matricula'])){		
		redirect("index.php?mensagem=Faltou%20a%20Matrícula!");
	}else if(empty($_POST['cpf'])){		
		redirect("index.php?mensagem=CPF%20Requerido!");
	}
    $matricula = $_POST['matricula'];
	$cpf =$_POST['cpf'];			

//select verificar se matricula confere com cpf...

	$query = "SELECT matricula, cpf, id_aluno FROM aluno WHERE matricula = '$matricula' AND cpf= '$cpf'";
	$result = mysql_query($query) or die("Error ".mysql_error()) ;
	$dados = mysql_fetch_array($result);
	$rows = mysql_num_rows($result);

	// se o select nao retornar nada
	if($rows == 0){		
		redirect("index.php?mensagem=CPF%20ou%20Matrícula%20inválidos!");
	}
	
	if($dados['cpf'] == $_POST['cpf'] && $dados['matricula'] == $_POST['matricula'] ){	
		$_SESSION['cpf'] = $_POST['cpf'];
		$_SESSION['matricula'] = $_POST['matricula'];
		$_SESSION['logado'] = true;
		$_SESSION['matricula'] = $dados['matricula'];
		
		$mat = $dados['matricula'];
		
		$query = "SELECT matricula FROM aluno WHERE matricula = '$mat'";
		$result = mysql_query($query) or die("Error ".mysql_error()) ;
		$dados = mysql_fetch_array($result);
		$rows = mysql_num_rows($result);	
		$select = "SELECT matricula FROM questionario_egresso WHERE matricula ='$_SESSION[matricula]'";
		$result = mysql_query($select) or die(mysql_error());
		$dados = mysql_fetch_array($result);	
		$rows = mysql_num_rows($result);
		if($rows == 0){			 
			redirect("alterar_aluno.php");		
		}					

		// se o select nao retornar nada
		if($rows == 0){
			redirect("formulario_aluno.php");			
		}
		    redirect("bemvindo.php");
	    }else{
		    redirect("index.php?mensagem=CPF%20ou%20Matrícula%20inválidos!");	
	    }
		
		
		
		
?>