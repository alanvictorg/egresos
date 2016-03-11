<?php
function retira_acentos($texto) { 
	$array1 = array( "á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç" 
	, "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç", "'" ); 
	$array2 = array( "a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c" 
	, "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C", "" ); 
	return ltrim(rtrim(str_replace($array1, $array2, $texto))); 
} 

function executarConsulta($query) {
	$resultado = mysql_query($query) or die(mysql_error());
	
	$numeroResultados = mysql_num_rows($resultado);
	if ($numeroResultados > 0) {
		return $resultado;
	} else {
		return NULL;
	}
}

function executarAlteracao($query) {
	$resultado = mysql_query($query) or die(mysql_error());
}

function redirect($endereco, $mensagem = ""){
	if ($mensagem == "") {
		echo "<script>location=\"$endereco\"</script>";
		exit;
		return;
	} else {
		echo "<script>location=\"$endereco?mensagem=$mensagem\"</script>";
		exit;
		return;
	}
}

function deslogar_por_dados_nao_autenticados() {
	redirect("validar_dados_func", "Não existe aluno para os dados informados" );
}

function idade_pela($data_de_nascimento, $data_a_comparar) {
	list($dia_atual, $mes_atual, $ano_atual) = explode('/', $data_a_comparar);
	list($dia_de_nascimento, $mes_de_nascimento, $ano_de_nascimento) = explode('/', $data_de_nascimento);
	 
	$idade = $ano_atual - $ano_de_nascimento;
	if ($mes_atual < $mes_de_nascimento
		|| ($mes_atual == $mes_de_nascimento && $dia_atual < $dia_de_nascimento)) {
		$idade -= 1;
	} 
	return $idade;
}

function indicar_diferenca_de_valores($egresso, $egresso_totvs, $campo) {
	if ($campo == "nome") {
		echo (strtoupper($egresso['nome']) != strtoupper($egresso_totvs['Nome'])) ? "*" : "";

	} elseif ($campo == "pai") {
		echo (strtoupper($egresso['pai']) != strtoupper($egresso_totvs['Pai'])) ? "*" : "";

	} elseif ($campo == "mae") {
		echo (strtoupper($egresso['mae']) != strtoupper($egresso_totvs['Mae'])) ? "*" : "";

	} elseif ($campo == "nacionalidade") {
		echo (strtoupper($egresso['nacionalidade']) != strtoupper($egresso_totvs['Nacionalidade'])) ? "*" : "";

	} elseif ($campo == "uf") {
		echo (strtoupper($egresso['uf']) != strtoupper($egresso_totvs['UF'])) ? "*" : "";

	} elseif ($campo == "pais") {
		echo (strtoupper($egresso['pais']) != strtoupper($egresso_totvs['Pais'])) ? "*" : "";

	} elseif ($campo == "identidade") {
		echo (strtoupper($egresso['identidade']) != strtoupper($egresso_totvs['CartIdentidade'])) ? "*" : "";

	} elseif ($campo == "emissor") {
		echo (strtoupper($egresso['emissor']) != strtoupper($egresso_totvs['OrgEmissorIdentidade'])) ? "*" : "";

	} elseif ($campo == "uf_identidade") {
		echo (strtoupper($egresso['uf_identidade']) != strtoupper($egresso_totvs['UFCartIdentidade'])) ? "*" : "";

	} elseif ($campo == "telefone") {
		echo (strtoupper($egresso['telefone']) != strtoupper($egresso_totvs['Telefone1'])) ? "*" : "";

	} elseif ($campo == "telefone2") {
		echo (strtoupper($egresso['telefone2']) != strtoupper($egresso_totvs['Telefone2'])) ? "*" : "";

	} elseif ($campo == "email") {
		echo (strtoupper($egresso['email']) != strtoupper($egresso_totvs['eMail'])) ? "*" : "";

	}

}

?>

