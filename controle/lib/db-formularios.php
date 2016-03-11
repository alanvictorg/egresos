<?php
function recuperarRespostasDosFormularios() {
	$consulta = "SELECT * FROM egressos";
	return executarConsulta($consulta);
}

function existe_formulario_preenchido_para_o_cpf($cpf) {
	$consulta = "SELECT COUNT(*) as total FROM formulario f
					WHERE f.egresso_id =
						(SELECT e.id FROM egressos e WHERE cpf='" . $cpf . "' )";
	$resultado = mysql_query($consulta);
	
	$dados = mysql_fetch_array($resultado);
	
	return ($dados['total'] > 0);
}
?>