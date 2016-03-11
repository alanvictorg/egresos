<?php session_start();
header('Content-Type: text/html; charset=utf-8');
	include("../controle/lib/db-connection.php");
	// Recebendo os dados dos inputs do formulário

            $nome = $_SESSION["nome"];
            
            $pai = $_SESSION["pai"];
			$mae = $_SESSION["mae"];
			$nacionalidade = $_SESSION["nacionalidade"];
			$uf = $_SESSION["uf"];
			$pais = $_SESSION["pais"];
			$identidade = $_SESSION["identidade"];
			$uf_identidade = $_SESSION["uf_identidade"];
			$emissor = $_SESSION["emissor"];
			$data_conclusao = $_SESSION["data_conclusao_do_curso"];
            $data_colacao = $_SESSION["data_colacao_de_grau"];
            $data_nascimento = $_SESSION["data_nascimento"];
            
            $cpf = $_SESSION["cpf"];
            $matricula = $_SESSION["matricula"];
            $telefone = $_SESSION["telefone"];
            $telefone2 = $_SESSION["telefone2"];
            $endereco = $_SESSION["endereco"];
            $email = $_SESSION["email"];
            $genero = $_SESSION["genero"];
            $ecivil = $_SESSION["estado_civil"];
            $eciviloutros = $_SESSION["estado_civil_outros"];

            $cconcluido = htmlspecialchars($_SESSION["curso_concluido_fa7"], ENT_NOQUOTES, "UTF-8");
            $idadefinal = $_SESSION["idade_conclusao"];
            $anoconclusao = $_SESSION["ano_conclusao"];
            $tempocurso = $_SESSION["tempo_curso"];

            $trabalhando = $_SESSION["trabalhando"];
            $trabalhando_onde = $_SESSION["trabalhando_onde"];
            $empregoarea = $_SESSION["emprego_na_area"];
            $tempoemprego = $_SESSION["tempo_emprego"];
            $functrabalho = $_SESSION["funcao_trabalho"];
            $functrabalho_outros = $_SESSION["funcao_trabalho_outros"];
            $setoratua = $_SESSION["setor_atuacao"];
            $empresa = $_SESSION["empresa"];
            $faixasalario = $_SESSION["faixa_salarial"];

            $formacaoa = $_SESSION["formacao_a"];
            $formacaob = $_SESSION["formacao_b"];
            $formacaoc = $_SESSION["formacao_c"];
            $formacaod = $_SESSION["formacao_d"];
            $formacaoe = $_SESSION["formacao_e"];
            $formacaof = $_SESSION["formacao_f"];
            $formacaog = $_SESSION["formacao_g"];
            $instituicaoa = $_SESSION["instituicao_a"];
            $instituicaob = $_SESSION["instituicao_b"];
            $instituicaoc = $_SESSION["instituicao_c"];

            $cursandooutragraduacao = $_SESSION["cursando_outra_graduacao"];
            $qualoutragraduacao = $_SESSION["qual_outra_graduacao"];
            $cursouposgraduacao = $_SESSION["cursou_pos_graduacao"];
            $qualposgraduacaocursou = $_SESSION["qual_pos_graduacao_cursou"];
            $cursandoposgraduacao = $_SESSION["cursando_pos_graduacao"];
            $qualposgraduacaocursando = $_SESSION["qual_pos_graduacao_cursando"];
            $pretendecursarposgraduacao = $_SESSION["pretende_cursar_pos_graduacao"];
            $areaposgraduacaopretendida = $_SESSION["area_pos_graduacao_pretendida"];
            $recomendaria = $_SESSION["recomendaria_a_fa7"];

            $sql = "INSERT INTO egressos (
                        nome, cpf, matricula, telefone, telefone2, endereco, email, genero, estado_civil, estado_civil_outros,

						pai, mae, nacionalidade, uf, pais, identidade, emissor, uf_identidade,
						
						data_nascimento, data_colacao, data_conclusao,

                        criado_em, atualizado_em)

                             VALUES
                                ('$nome', '$cpf', '$matricula', '$telefone', '$telefone2', '$endereco', '$email', '$genero', '$ecivil', '$eciviloutros',
                                
                                '$pai', '$mae', '$nacionalidade', '$uf', '$pais', '$identidade', '$emissor', '$uf_identidade',
                                
                                '$data_nascimento', '$data_colacao', '$data_conclusao',
                                
                                 NOW(), NOW())";

    // Inserindo no banco
       mysql_query($sql) or die(mysql_error());
       $egresso_id = mysql_insert_id();

	// Montando a query
            $sql = "INSERT INTO formulario (
                        egresso_id, curso_concluido_fa7, idade_conclusao, ano_conclusao, tempo_curso,

                        trabalhando, trabalhando_onde, emprego_na_area, tempo_emprego,

                        funcao_trabalho, funcao_trabalho_outros, setor_atuacao, empresa, faixa_salarial,

                        formacao_a, formacao_b, formacao_c, formacao_d, formacao_e, formacao_f, formacao_g,

                        instituicao_a, instituicao_b, instituicao_c,

                        cursando_outra_graduacao, qual_outra_graduacao, cursou_pos_graduacao, qual_pos_graduacao_cursou,

                        cursando_pos_graduacao, qual_pos_graduacao_cursando, pretende_cursar_pos_graduacao,

                        area_pos_graduacao_pretendida,

                        recomendaria_a_fa7,

                        criado_em, atualizado_em)

                             VALUES
                                ( $egresso_id, '$cconcluido', '$idadefinal', '$anoconclusao', '$tempocurso',
                                 '$trabalhando', '$trabalhando_onde', '$empregoarea', '$tempoemprego',
                                 '$functrabalho', '$functrabalho_outros', '$setoratua', '$empresa', '$faixasalario',
                                  $formacaoa, $formacaob, $formacaoc, $formacaod, $formacaoe, $formacaof, $formacaog,
                                  $instituicaoa, $instituicaob, $instituicaoc,
                                 '$cursandooutragraduacao', '$qualoutragraduacao', '$cursouposgraduacao', '$qualposgraduacaocursou',
                                 '$cursandoposgraduacao', '$qualposgraduacaocursando', '$pretendecursarposgraduacao',
                                 '$areaposgraduacaopretendida',
                                 '$recomendaria',
                                  NOW(), NOW())";
       mysql_query($sql) or die(mysql_error());

	//die( "oi " . $rafa);

	// Fechando a conexão
	mysql_close();

	session_destroy();

	echo "<script>window.location = 'http://www.fa7.edu.br/egressos/formulario.php?sucesso=ok&nome=". $nome ."'</script>";


?>
</html>