<? 

	if(isset($_SESSION['logado'])){
			$query = "SELECT *
				  FROM aluno
				  WHERE matricula = '".$_SESSION['matricula']."' and cpf = '".$_SESSION['cpf']."'";
		$result = mysql_query($query);
		$rows = mysql_num_rows($result);
		if($rows > 0){
			
		}else{
			msg("ACESSO RESTRITO!");
			redirect($host."egressos/index.php");
		}
	}else{
		msg("ACESSO RESTRITO!");
		redirect($host."egressos/index.php");
	} 
?>

