<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <?php set_time_limit(0); ?>
        <?php
        session_start();
        include("controle/lib/db-connection.php");
        include("controle/lib/util.php");
        include("controle/lib/db-egressos.php");
        include("controle/lib/db.php");
        include("controle/lib/config.php");

        /*consulta no banco da pagina ver_formulario*/
        $ano_conclusao1 = $_POST['ano_conclusao'];
        $ano_conclusao2 = $_POST['ano_conclusao2'];
        //$inicio = $_REQUEST['i'];
        //$fim = $_REQUEST['f'];

        $consultaFormulariosAluno ="SELECT * FROM egressos e, formulario f 
                                    WHERE f.egresso_id = e.id 
                                    AND year(f.criado_em) BETWEEN $ano_conclusao1 AND $ano_conclusao2";
        $resultadoFormulariosAluno = mysql_query($consultaFormulariosAluno);
        $formulario = mysql_fetch_array($resultadoFormulariosAluno)

        ?>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <link href="/../favicon.ico" rel="icon">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/dashboard.css" rel="stylesheet">
        <link href="css/acompanhamento.css" rel="stylesheet">
        <link href="css/mystyle.css" rel="stylesheet"><!-- FORMULARIO -->
        <?php while($formulario = mysql_fetch_array($resultadoFormulariosAluno)) { ?>
        <div class="container-fluid">
            <img class="logo" src="img/logo_fa7.jpg">
            <h1 id="titulo"> Formulário de Egressos </h1>

            <h2 id="nome_egresso">
                <?php echo $formulario['nome'];  ?>
            </h2>
            <br>

            <p class="data_formulario">
                Data de preenchimento do formulário: <?php echo date('d/m/Y', strtotime($formulario['criado_em'])); ?>
            </p>

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Dados Pessoais
                        </h3>
                    </div>

                    <div class="panel-body">
                        <p>
                            <strong>Nome:</strong> <?php echo $formulario['nome']?>
                        </p>

                        <p>
                            <strong>Matrícula:</strong> <?php echo $formulario['matricula']?>
                        </p>

                        <p>
                            <strong>Email:</strong> <?php echo $formulario['email']?>
                        </p>

                        <p>
                            <strong>Telefone 1:</strong> <?php echo $formulario['telefone']?>
                        </p>

                        <p>
                            <strong>Telefone 2:</strong> <?php echo $formulario['telefone2']?>
                        </p>

                        <p>
                            <strong>Endereço:</strong> <?php echo $formulario['endereco']?>
                        </p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Informações Sócio-Econômicas
                        </h3>
                    </div>

                    <div class="panel-body">
                        <p>
                            <strong>Curso concluído na FA7:</strong> <?php echo $formulario['curso_concluido_fa7'] ?>
                        </p>

                        <p>
                            <strong>Idade na conclusão do curso:</strong> <?php echo $formulario['idade_conclusao'] ?>
                        </p>

                        <p>
                            <strong>Ano de conclusão do curso:</strong> <?php echo $formulario['ano_conclusao'] ?>
                        </p>

                        <p>
                            <strong>Duração do curso:</strong> <?php echo $formulario['tempo_curso'] ?> anos
                        </p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Informações Profissionais
                        </h3>
                    </div>

                    <div class="panel-body">
                        <div><div class="pergunta"><p>Está trabalhando?: </div><div class="resposta"><p><?php echo $formulario['trabalhando'] ?></div></div>
                          <?php if ($formulario['trabalhando'] == "SIM") { ?>
                          <div><div class="perguntaMenor"><p>Empresa onde trabalha:</div><div class="respostaMaior"><p><?php echo $formulario['trabalhando_onde']; ?></div></div> 
                          <?php } ?>
                          <div><div class="pergunta"><p>Possui emprego na área?: </div><div class="resposta"><p><?php echo $formulario['emprego_na_area'] ?></div></div>
                          <div><div class="pergunta"><p>Neste emprego há quanto tempo?:</div><div class="resposta"><p><?php echo $formulario['tempo_emprego'] ?></div></div>
                          <div><div class="pergunta"><p>Atual função no emprego: </div>
                              <div class="resposta"><p>
                              <?php if ($formulario['funcao_trabalho'] == "outros") {
                                 echo $formulario['funcao_trabalho_outros'];
                              }else { 
                                 echo $formulario['funcao_trabalho'];  
                              }?>
                          </div>
                      </div>
                      <div><div class="pergunta"><p>Setor de atuação da empresa:</div><div class="resposta"><p><?php echo $formulario['setor_atuacao'] ?></div></div>
                      <div><div class="pergunta"><p>Tipo de empresa: </div><div class="resposta"><p><?php echo $formulario['empresa'] ?></div></div>
                      <div><div class="perguntaMenor"><p>Faixa salarial: </div><div class="respostaMaior"><p><?php echo $formulario['faixa_salarial'] ?></div></div>
                    
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Informações sobre a Formação na FA7
                        </h3>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>
                                    Critério
                                </th>
                                <th class="text-right">
                                    Nota
                                </th>
                            </tr>

                            <tr>
                                <td>
                                    Os conteúdos/programas das disciplinas foram adequadamente desenvolvidos, auxiliando na sua formação
                                    pessoal e profissional
                                </td>
                                <td class="text-right">
                                    <?php echo $formulario['formacao_a'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Em termos de experiência profissional, foi importante ter feito graduação na FA7
                                </td>
                                <td class="text-right">
                                    <?php echo $formulario['formacao_b'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    A formação teórica foi importante para empregabilidade
                                </td>
                                <td class="text-right">
                                    <?php echo $formulario['formacao_c'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    A formação na FA7 permite exercer a cidadania com ética
                                </td>
                                <td class="text-right">
                                    <?php echo $formulario['formacao_d'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    A formação na FA7 permite compreender o contexto social e econômico para tomada de decisão
                                </td>
                                <td class="text-right">
                                    <?php echo $formulario['formacao_e'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    A formação na FA7 permite ter flexibilidade para atuar no mercado de trabalho
                                </td>
                                <td class="text-right">
                                    <?php echo $formulario['formacao_f'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    A disciplina de estágio supervisionado serviu para sistematizar/testar/exercitar os conhecimentos
                                    adquiridos
                                </td>
                                <td class="text-right">
                                    <?php echo $formulario['formacao_g'] ?>
                                </td>
                            </tr>
                        </table>

                        <p class="text-muted">
                            <small>Nota entre 1 (menor valor) a 10 (maior valor) para os critérios acima.</small>
                        </p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Informações sobre a Instituição
                        </h3>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>
                                    Critério
                                </th>
                                <th class="text-right">
                                    Nota
                                </th>
                            </tr>

                            <tr>
                                <td>
                                    Ensino
                                </td>
                                <td class="text-right">
                                    <?php echo $formulario['instituicao_a'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Estrutura
                                </td>
                                <td class="text-right">
                                    <?php echo $formulario['instituicao_b'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Reconhecimento da FA7 como referência em educação
                                </td>
                                <td class="text-right">
                                    <?php echo $formulario['instituicao_c'] ?>
                                </td>
                            </tr>
                        </table>

                        <p class="text-muted">
                            <small>Nota entre 1 (menor valor) a 5 (maior valor) para os critérios acima.</small>
                        </p>
                    </div>
                </div>

                <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Informações Acadêmicas
                            </h3>
                        </div>

                        <div class="panel-body">
                            <div>
                                <div class="pergunta"><p>Está cursando ou cursou outro curso de Graduação?:</div>
                                <div class="resposta"><p><?php echo $formulario['cursando_outra_graduacao'] ?></div>
                            </div>
                        
                            <?php if ($formulario['cursando_outra_graduacao'] == "SIM") { ?>
                                  <div>
                                      <div class="perguntaMenor"><p>Qual curso?: </div>
                                      <div class="respostaMaior"><p><?php echo $formulario['qual_outra_graduacao'] ?></div>
                                  </div>  
                            <?php } ?>
                                         
                            <div>
                                <div class="pergunta"><p>Você cursou algum curso de pós-graduação?:</div>
                                <div class="resposta"><p><?php echo $formulario['cursou_pos_graduacao'] ?></div>
                            </div>
                            
                            <?php if ($formulario['cursou_pos_graduacao'] == "SIM") { ?>
                                    <div>
                                        <div class="perguntaMenor"><p>Qual curso?: </div>
                                        <div class="respostaMaior"><p><?php echo $formulario['qual_pos_graduacao_cursou'] ?></div>
                                    </div>
                            <?php } ?>

                            <div>
                                <div class="pergunta"><p>Você está cursando pós-graduação?: </div>
                                <div class="resposta"><p><?php echo $formulario['cursando_pos_graduacao'] ?></div>
                            </div>
                           
                            <?php if ($formulario['cursando_pos_graduacao'] == "SIM") { ?>
                                    <div>
                                        <div class="perguntaMenor"><p>Qual curso?: </div>
                                        <div class="respostaMaior"><p><?php echo $formulario['qual_pos_graduacao_cursando'] ?></div>
                                    </div>
                            <?php } ?>
      
                            <div>
                                <div class="pergunta"><p>Se não está cursando, pretende cursar?: </div>
                                <div class="resposta"><p><?php echo $formulario['pretende_cursar_pos_graduacao'] ?></div>
                            </div>
                        
                            <?php if ($formulario['pretende_cursar_pos_graduacao'] == "SIM") { ?>
                                <div>
                                    <div class="perguntaMenor"><p>Qual curso?: </div>
                                    <div class="respostaMaior"><p><?php echo $formulario['area_pos_graduacao_pretendida'] ?></div>
                                </div>
                            <?php } ?>

                            <div>
                                <div class="pergunta"><p>Você recomendaria seu curso para outras pessoas?: </div>
                                <div class="resposta"><p><?php echo $formulario['recomendaria_a_fa7'] ?></div>
                            </div>    

                        </div>
                    
                </div>

            </div>
        </div>
       

        <p style="page-break-after:always">
        </p>
        <?php } ?><!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
        <script src="/js/bootstrap.min.js"></script> 
        <script src="/js/docs.min.js"></script> <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>