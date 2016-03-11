<?
function executarConsulta($query) {
 
	$resultado = mysql_query($query) or die(mysql_error());	
	$numeroResultados = mysql_num_rows($resultado);
	if ($numeroResultados > 0) {
		return $resultado;
	} else {
		return NULL;
	}
}

function recuperarCurso() {
	return executarConsulta("SELECT * FROM curso ORDER BY nome_curso");
}

?>
