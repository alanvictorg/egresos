<?
	function msg($msg){
?>
<script>
			window.alert('<?=$msg?>');
		</script>
<?
	}

//Redireciona para outra pagina

function redirect($endereco){
		echo "<script>location=\"$endereco\"</script>";
		exit;
		return;
	}

//Redireciona para outra pagina e exibe msg

function redirectMsg($msg, $endereco){
		echo "<script>alert(\"$msg\")</script>";
		echo "<script>location=\"$endereco\"</script>";
		exit;
		return;
	}

//Verifica se aluno ja inscrito

function jaMatriculado($matricula){
	$q = "SELECT mat FROM aluno WHERE mat = '$matricula'";
	$r = mysql_query($q) or die("Error ".mysql_error());
	$rows = mysql_num_rows($r);
	if ($rows == 0){
		
		
	}else{
		echo "<script>alert(\"Aluno já inscrito!!\")</script>";		
		echo "<script>location=\"login.php\"</script>";
		exit;
		return;
	}
}

//Matricula o aluno...

function matricular($mat,$id1,$id2,$id3,$fone,$email){

$today = date("F j, Y, g:i a"); 

	jaMatriculado($mat);
	//primeira opcap
	$q1 = "INSERT INTO tb_aluno_curso (id, mat, opcao, confirmado, data) VALUES('$id1', '$mat', 1, 0, '$today')";
	$r1 = mysql_query($q1); 
	//seguinda opcao
	$q2 = "INSERT INTO tb_aluno_curso (id, mat, opcao, confirmado, data) VALUES('$id2', '$mat', 2, 0, '$today')";
	$r2 = mysql_query($q2); 
	//terceira opcao
	$q3 = "INSERT INTO tb_aluno_curso (id, mat, opcao, confirmado, data) VALUES('$id3', '$mat', 3, 0, '$today')";
	$r3 = mysql_query($q3); 
	//inserir fone e email na tb aluno!!!
	$q = "UPDATE tb_aluno SET fone ='$fone', email = '$email' WHERE mat = '$mat'";
	$r = mysql_query($q);
	
	
	
}

//Verifica se o curso ja esta esgotado
function cursoEsgotado(){
}

//Confimacao....confirma um curso...e apaga os outros 2 cursos....
function confirma($mat, $op){
	$q = "UPDATE tb_aluno_curso SET confirmado = 1 WHERE mat = '$mat' AND opcao = '$op'";
	$r = mysql_query($q);
	
	if ($op == 1){
		$qd = "UPDATE tb_aluno_curso SET confirmado = 0 WHERE mat = '$mat' AND opcao = 2";
		$rd = mysql_query($qd);
		$qd2 = "UPDATE tb_aluno_curso SET confirmado = 0 WHERE mat = '$mat' AND opcao = 3";
		$rd2 = mysql_query($qd2);
		}else if($op == 2){
			$qd = "UPDATE tb_aluno_curso SET confirmado = 0 WHERE mat = '$mat' AND opcao = 1";
			$rd = mysql_query($qd);
			$qd2 = "UPDATE tb_aluno_curso SET confirmado = 0 WHERE mat = '$mat' AND opcao = 3";
			$rd2 = mysql_query($qd2);
			}else{
				$qd = "UPDATE tb_aluno_curso SET confirmado = 0 WHERE mat = '$mat' AND opcao = 1";
				$rd = mysql_query($qd);
				$qd2 = "UPDATE tb_aluno_curso SET confirmado = 0 WHERE mat = '$mat' AND opcao = 2";
				$rd2 = mysql_query($qd2);
			}	
						
	echo "<script>alert(\"Aluno Confirmado!!\")</script>";		
	echo "<script>location=\"confirmacao.php\"</script>"; 
}
?>
