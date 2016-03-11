<?php

function recuperarEgresso($chave) {
	$consulta = "";
	if (strlen($chave) == 11) {
		$consulta = "SELECT e.*, f.id as form_id, f.curso_concluido_fa7, f.idade_conclusao, f.ano_conclusao FROM egressos e, formulario f WHERE f.egresso_id=e.id AND e.cpf='$chave'";
	} else {
		$consulta = "SELECT e.*, f.id as form_id, f.curso_concluido_fa7, f.idade_conclusao, f.ano_conclusao FROM egressos e, formulario f WHERE f.egresso_id=e.id AND e.matricula='$chave'";
	}
	
	return executarConsulta($consulta);
}

function recuperarArrayEgresso($chave) {
	return mysql_fetch_array(recuperarEgresso($chave));
}

function recuperarEgressoComFormulario($id, $form_id) {
	$consulta = "SELECT e.*, f.id as form_id, f.curso_concluido_fa7, f.idade_conclusao, f.ano_conclusao FROM egressos e, formulario f WHERE e.id=$id AND f.egresso_id=e.id AND f.id=$form_id";
	
	return executarConsulta($consulta);
}

?>