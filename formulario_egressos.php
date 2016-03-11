
          <div class="page-header">
            <h3>Informações Sócio-Econômicas</h3>
          </div>
  <fieldset class="highlight">
          <div class="form-group">
      <label for= "InputSexo"  class="col-sm-3 control-label"><?php echo $contador++; ?>. Qual o curso concluído na FA7?</label>
    <div class="col-sm-9">
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7Administracao">
                          <input type="radio" name="curso_concluido_fa7"
                                 id="EgressoCursoConcluidoFa7Administracao"
                                 value="ADMINISTRAÇÃO"
                                 <?php echo ($_SESSION['curso'] == "ADMINISTRAÇÃO" ? "checked" : ""); ?> />
                          ADMINISTRAÇÃO
                      </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7AdministracaoCE">
                          <input type="radio" name="curso_concluido_fa7"
                                 id="EgressoCursoConcluidoFa7AdministracaoCE"
                                 value="ADMINISTRAÇÃO: COMÉRCIO EXTERIOR"
                                 <?php echo ($_SESSION['curso'] == "ADMINISTRAÇÃO: COMÉRCIO EXTERIOR" ? "checked" : ""); ?> />
                                  ADMINISTRAÇÃO: COMÉRCIO EXTERIOR
                      </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7AdministracaoGF">
                          <input type="radio" name="curso_concluido_fa7"
                              id="EgressoCursoConcluidoFa7AdministracaoGF"
                              value="ADMINISTRAÇÃO: GESTÃO FINANCEIRA"
                              <?php echo ($_SESSION['curso'] == "ADMINISTRAÇÃO: GESTÃO FINANCEIRA" ? "checked" : ""); ?> />
                        ADMINISTRAÇÃO: GESTÃO FINANCEIRA
                      </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7AdministracaoM">
                          <input type="radio" name="curso_concluido_fa7"
                            id="EgressoCursoConcluidoFa7AdministracaoM"
                              value="ADMINISTRAÇÃO: MARKETING"
            <?php echo ($_SESSION['curso'] == "ADMINISTRAÇÃO: MARKETING" ? "checked" : ""); ?> />
                        ADMINISTRAÇÃO: MARKETING
                       </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7AdministracaoPME">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7AdministracaoPME" value="ADMINISTRAÇÃO: PEQUENA E MÉDIA EMPRESA" <?php echo ($_SESSION['curso'] == "ADMINISTRAÇÃO: PEQUENA E MÉDIA EMPRESA" ? "checked" : ""); ?> />
                      ADMINISTRAÇÃO: PEQUENA E MÉDIA EMPRESA  						</label>
                  </div>
                <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7Arquitetura">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7Arquitetura" value="ARQUITETURA E URBANISMO" <?php echo ($_SESSION['curso'] == "ARQUITETURA E URBANISMO" ? "checked" : ""); ?> />
                          ARQUITETURA E URBANISMO</label>
                </div>

                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7CienciasContabeis">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7CienciasContabeis" value="CIÊNCIAS CONTÁBEIS"  <?php echo ($_SESSION['curso'] == "CIÊNCIAS CONTÁBEIS" ? "checked" : ""); ?>/>
                        CIÊNCIAS CONTÁBEIS
                    </label>
                  </div>

                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7Jornalismo">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7Jornalismo" value="COMUNICAÇÃO SOCIAL C/ HAB. EM JORNALISMO"  <?php echo ($_SESSION['curso'] == "COMUNICAÇÃO SOCIAL C/ HAB. EM JORNALISMO" ? "checked" : ""); ?>/>
                          COMUNICAÇÃO SOCIAL C/ HAB. EM JORNALISMO</label></div>

                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7Publicidade">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7Publicidade" value="COMUNICAÇÃO SOCIAL C/ HAB. EM PUBLICIDADE E PROPAGANDA" <?php echo ($_SESSION['curso'] == "COMUNICAÇÃO SOCIAL C/ HAB. EM PUBLICIDADE E PROPAGANDA" ? "checked" : ""); ?> />
                        COMUNICAÇÃO SOCIAL C/ HAB. EM PUBLICIDADE E PROPAGANDA
                    </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7Direito">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7Direito" value="DIREITO"
                          <?php echo ($_SESSION['curso'] == "DIREITO" ? "checked" : ""); ?> />
                        DIREITO
                    </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7EngenhariaProducao">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7EngenhariaProducao" value="ENGENHARIA DE PRODUÇÃO" <?php echo ($_SESSION['curso'] == "ENGENHARIA DE PRODUÇÃO" ? "checked" : ""); ?> />
                        ENGENHARIA DE PRODUÇÃO
                    </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7Pedagogia">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7Pedagogia" value="PEDAGOGIA" <?php echo ($_SESSION['curso'] == "PEDAGOGIA" ? "checked" : ""); ?>/>
                        PEDAGOGIA
                    </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7SistemasDeInformacao">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7SistemasDeInformacao" value="SISTEMAS DE INFORMAÇÃO" <?php echo ($_SESSION['curso'] == "SISTEMAS DE INFORMAÇÃO" ? "checked" : ""); ?>/>
                        SISTEMAS DE INFORMAÇÃO
                    </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7GraduacaoTecnologicaDesignGrafico">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7GraduacaoTecnologicaDesignGrafico" value="SUPERIOR DE TECNOLOGIA EM DESIGN GRÁFICO"
                          <?php echo ($_SESSION['curso'] == "SUPERIOR DE TECNOLOGIA EM DESIGN GRÁFICO" ? "checked" : ""); ?> />
                          SUPERIOR DE TECNOLOGIA EM DESIGN GRÁFICO</label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7GraduacaoTecnologicaLogistica">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7GraduacaoTecnologicaLogistica" value="SUPERIOR DE TECNOLOGIA EM LOGÍSTICA"
                          <?php echo ($_SESSION['curso'] == "SUPERIOR DE TECNOLOGIA EM LOGÍSTICA" ? "checked" : ""); ?> />
                        SUPERIOR DE TECNOLOGIA EM LOGÍSTICA
                    </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoCursoConcluidoFa7GraduacaoTecnologicaNegociosImobiliarios">
                          <input type="radio" name="curso_concluido_fa7" id="EgressoCursoConcluidoFa7GraduacaoTecnologicaNegociosImobiliarios" value="SUPERIOR DE TECNOLOGIA EM NEGÓCIOS IMOBILIÁRIOS"
                          <?php echo ($_SESSION['curso'] == "SUPERIOR DE TECNOLOGIA EM NEGÓCIOS IMOBILIÁRIOS" ? "checked" : ""); ?> />					  SUPERIOR DE TECNOLOGIA EM NEGÓCIOS IMOBILIÁRIOS
                    </label>
                  </div>
               </div>
    </div>

    <div class="form-group">
      <label for="EgressoIdadeConclusao" class="col-sm-3 control-label"><?php echo $contador++; ?>. Qual a idade que possuía quando finalizou o curso de graduação?</label>
      <div class="col-sm-9">
                  <div class="input-group col-xs-2">
                      <input name="idade_conclusao"
                          class="form-control" type="text" data-validation="number" id="EgressoIdadeConclusao"/>
                      <div class="input-group-addon">anos</div>
                  </div>
              </div>
    </div>

    <div class="form-group ">
      <label for="EgressoAnoConclusao" class="col-sm-3 control-label"><?php echo $contador++; ?>. Indique o ano de conclusão de seu curso (ex: 2012.2)</label>
              <div class="col-sm-9">

                      <input name="ano_conclusao"
                          class="form-control col-xs-4" type="text"  id="EgressoAnoConclusao"/>

              </div>
    </div>

    <div class="form-group">
      <label for="EgressoTempoCurso" class="col-sm-3 control-label"><?php echo $contador++; ?>. Em quanto tempo você concluiu seu curso?</label>
              <div class="col-sm-9">
                  <div class="input-group col-xs-2">
                      <input name="tempo_curso" class="form-control"
                          type="text" data-validation="required" id="EgressoTempoCurso"/>
                    <div class="input-group-addon">anos</div>
                  </div>
              </div>
    </div>

</fieldset>
      <div class="page-header">
          <h3>Informações Profissionais</h3>
      </div>

<fieldset class="highlight">
    <div class="form-group">
      <label for="EgressoTrabalhando" class="col-sm-3 control-label"><?php echo $contador++; ?>. Está trabalhando?</label>
              <div class="col-sm-9">
                <label class="radio-inline">
          <input type="radio" name="trabalhando" id="EgressoEmpregoAreaSim" value="SIM" />
          Sim
        </label>
                  <label class="radio-inline">
          <input type="radio" name="trabalhando" id="EgressoEmpregoAreaNao" value="NÃO" />
          Não
        </label>
      </div>
      <div class="col-sm-3 control-label"></div>
              <div class="col-sm-9">
              <br/>
        <input name="trabalhando_onde" class="form-control"
                    maxlength="100" type="text" id="EgressoTrabalhando"
                      placeholder="Se sim, especifique onde você está trabalhando"/>
               </div>
    </div>

    <div class="form-group">
      <label for= "InputSexo" class="col-sm-3 control-label"><?php echo $contador++; ?>. Este emprego é na sua área de formação?</label>
      <div class="col-sm-9">
        <label for="EgressoEmpregoAreaSim" class="radio-inline">
          <input type="radio" name="emprego_na_area" id="EgressoEmpregoAreaSim" value="SIM" />
          Sim
        </label>
        <label for="EgressoEmpregoAreaNao" class="radio-inline">
          <input type="radio" name="emprego_na_area" id="EgressoEmpregoAreaNao" value="NÃO" />
          Não
        </label>
      </div>
    </div>

    <div class="form-group">
      <label for= "InputSexo" class="col-sm-3 control-label"><?php echo $contador++; ?>. Quanto tempo está neste emprego?</label>
      <div class="col-sm-9">
        <label for="EgressoTempoEmpregoAteSeisMeses" class="radio-inline">
          <input type="radio" name="tempo_emprego" id="EgressoTempoEmpregoAteSeisMeses" value="até seis meses" />
          Até 6 meses
        </label>
        <label for="EgressoTempoEmpregoDe7MesesA1Ano" class="radio-inline">
          <input type="radio" name="tempo_emprego" id="EgressoTempoEmpregoDe7MesesA1Ano" value="de 7 meses a 1 ano" />
          de 7 meses a 1 ano
        </label>
        <label for="EgressoTempoEmpregoDe1A2Anos" class="radio-inline">
          <input type="radio" name="tempo_emprego" id="EgressoTempoEmpregoDe1A2Anos" value="de 1 a 2 anos" />
          de 1 a 2 anos
        </label>
        <label for="EgressoEmpregoAreaNao" class="radio-inline">
          <input type="radio" name="tempo_emprego" id="EgressoTempoEmpregoMaisDe2Anos" value="mais de 2 anos" />
          mais de 2 anos
        </label>
      </div>
    </div>

    <div class="form-group">
      <label for= "InputSexo" class="col-sm-3 control-label"><?php echo $contador++; ?>. Sua atual função no trabalho:</label>
      <div class="col-sm-9">
        <label for="EgressoFuncaoTrabalhoAtendimento" class="radio-inline">
          <input type="radio" name="funcao_trabalho" id="EgressoFuncaoTrabalhoAtendimento" value="Atendimento" />
          Atendimento
        </label>
        <label for="EgressoFuncaoTrabalhoFuncaoAdministrativa" class="radio-inline">
          <input type="radio" name="funcao_trabalho" id="EgressoFuncaoTrabalhoFuncaoAdministrativa" value="Função Administrativa" />
          Função Administrativa
        </label>
        <label for="EgressoFuncaoTrabalhoGerente" class="radio-inline">
          <input type="radio" name="funcao_trabalho" id="EgressoFuncaoTrabalhoGerente" value="Gerente" />
          Gerente
        </label>
        <label for="EgressoFuncaoTrabalhoProprietario" class="radio-inline">
          <input type="radio" name="funcao_trabalho" id="EgressoFuncaoTrabalhoProprietario" value="Proprietário" />
          Proprietário
        </label>
        <label for="EgressoFuncaoTrabalhoVendedor" class="radio-inline">
          <input type="radio" name="funcao_trabalho" id="EgressoFuncaoTrabalhoVendedor" value="Vendedor" />
          Vendedor
        </label>
      </div>
              <div class="col-sm-3"></div>
              <div class="col-sm-9">
                <br/>
                  <div class="col-xs-2">
                <label for="EgressoFuncaoTrabalhoOutros"  class="radio-inline">
                      <input type="radio" name="funcao_trabalho"
                        id="EgressoFuncaoTrabalhoOutros" value="outros" />
                      Outros:
                  </label>
                  </div>
                  <div class="col-xs-7">
                      <input name="funcao_trabalho_outros"
                          class="form-control"
                          placeholder="Espeficique"
                          type="text" id="funcao_trabalho_outros"/>
                  </div>
              </div>
    </div>

    <div class="form-group">
      <label for= "InputSetorAtuacao" class="col-sm-3 control-label"><?php echo $contador++; ?>. Setor de atuação da organização em que estágio/trabalha atualmente:</label>
      <div class="col-sm-9">
        <label for="EgressoSetorAtuacaoComercio"  class="radio-inline">
          <input type="radio" name="setor_atuacao" id="EgressoSetorAtuacaoComercio" value="Comércio" />
          Comércio
        </label>
        <label for="EgressoSetorAtuacaoONG" class="radio-inline">
          <input type="radio" name="setor_atuacao" id="EgressoSetorAtuacaoONG" value="ONG" />
          ONG
        </label>
        <label for="EgressoSetorAtuacaoSetorPublico" class="radio-inline">
          <input type="radio" name="setor_atuacao" id="EgressoSetorAtuacaoSetorPublico" value="Setor Público" />
          Setor Público
        </label>
        <label for="EgressoSetorAtuacaoIndustria" class="radio-inline">
          <input type="radio" name="setor_atuacao" id="EgressoSetorAtuacaoIndustria" value="Indústria" />
          Indústria
        </label>
        <label for="EgressoSetorAtuacaoServico" class="radio-inline">
          <input type="radio" name="setor_atuacao" id="EgressoSetorAtuacaoServico" value="Serviço" />
          Serviço
        </label>
      </div>
    </div>

    <div class="form-group">
      <label for= "InputSexo" class="col-sm-3 control-label"><?php echo $contador++; ?>. A empresa na qual exerce sua função é:</label>
      <div class="col-sm-9">
        <label for="EgressoEmpresaPrivada"  class="radio-inline">
          <input type="radio" name="empresa" id="EgressoEmpresaPrivada" value="Privada" />
          Privada
        </label>
        <label for="EgressoEmpresaPublica" class="radio-inline">
          <input type="radio" name="empresa" id="EgressoEmpresaPublica" value="Pública" />
          Pública
        </label>
        <label for="EgressoEmpresaOrganizacaoNaoGovernamental" class="radio-inline">
          <input type="radio" name="empresa" id="EgressoEmpresaOrganizacaoNaoGovernamental" value="Organização não Governamental" />
          Organização não Governamental
        </label>
    </div>
</div>

    <div class="form-group">
      <label for= "InputSexo" class="col-sm-3 control-label"><?php echo $contador++; ?>. Qual sua faixa salarial?</label>
              <div class="col-sm-9">
                  <div class="radio ">
                      <label for="EgressoFaixaSalarialAte1SalarioMinimoR72400">
                          <input type="radio" name="faixa_salarial" id="EgressoFaixaSalarialAte1SalarioMinimoR72400" value="até 1 salário mínimo(R$ 724,00)" />
                          Até 1 salário mínimo(R$ 724,00)"
                      </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoFaixaSalarialDeR72400AteR217200">
                          <input type="radio" name="faixa_salarial" id="EgressoFaixaSalarialDeR72400AteR217200" value="De R$ 724,00 até R$ 2.172,00" />
                          De R$ 724,00 até R$ 2.172,00"
                      </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoFaixaSalarialDeR217300AteR334400">
                          <input type="radio" name="faixa_salarial" id="EgressoFaixaSalarialDeR217300AteR334400" value="De R$ 2.173,00 até R$ 3.344,00" />
                          De R$ 2.173,00 até R$ 3.344,00
                      </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoFaixaSalarialDeR334500AteR480000">
                          <input type="radio" name="faixa_salarial" id="EgressoFaixaSalarialDeR334500AteR480000" value="De R$ 3.345,00 até R$ 4.800,00" />
                          De R$ 3.345,00 até R$ 4.800,00
                      </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoFaixaSalarialDeR480000AteR651500">
                          <input type="radio" name="faixa_salarial" id="EgressoFaixaSalarialDeR480000AteR651500" value="De R$ 4.800,00 até R$ 6.515,00" />
                          De R$ 4.800,00 até R$ 6.515,00
                      </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoFaixaSalarialDeR651600AteR868800">
                          <input type="radio" name="faixa_salarial" id="EgressoFaixaSalarialDeR651600AteR868800" value="De R$ 6.516,00 até R$ 8.688,00" />
                          De R$ 6.516,00 até R$ 8.688,00
                      </label>
                  </div>
                  <div class="radio ">
                      <label for="EgressoFaixaSalarialAcimaDeR868800">
                          <input type="radio" name="faixa_salarial" id="EgressoFaixaSalarialAcimaDeR868800" value="Acima de R$ 8.688,00" />
                          Acima de R$ 8.688,00
                      </label>
                  </div>
              </div>
    </div>
</fieldset>
<div class="page-header">
<h3>Informações sobre a Formação na FA7</h3>
</div>
<fieldset class="highlight">
<div class="col-sm-12">
    <div class="form-group">
      <label><?php echo $contador++; ?>. Atribua nota de 01 (um - menor valor) a 10 (dez - maior valor) referente a sua formação na FA7? </label>

      <p class="col-sm-10" >a. Os conteúdos/programas das disciplinas foram adequadamente desenvolvidos, auxiliando na sua formação pessoal e profissional</p>
      <div class="col-sm-2">
      <select class="form-control" name="formacao_a" id="EgressoConteudosProgramas">
        <option value="0">Selecione a nota</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option value="10">10</option>
      </select>
      <br/>
</div>
      <p class="col-sm-10"
        for="EgressoTermosExperiencia">b. Em termos de experiência profissional, foi importante ter feito graduação na FA7</p>
      <div class="col-sm-2">
      <select class="form-control" name="formacao_b" id="EgressoTermosExperiencia">
        <option value="0">Selecione a nota</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>
      <br/>
</div>
      <p class="col-sm-10"
         for="EgressoFormacaoTeorica">c. A formação teórica foi importante para empregabilidade</p>
      <div class="col-sm-2">
      <select class="form-control" name="formacao_c" id="EgressoFormacaoTeorica">
        <option value="0">Selecione a nota</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>
      <br/>
</div>
      <p class="col-sm-10"
         for="EgressoFormacaoCidadania">d. A formação na FA7 permite exercer a cidadania com ética</p>
      <div class="col-sm-2">
      <select class="form-control" name="formacao_d" id="EgressoFormacaoCidadania">
        <option value="0">Selecione a nota</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>
      <br/>
</div>
      <p class="col-sm-10"
         for="EgressoFormacaoContexto">e. A formação na FA7 permite compreender o contexto social e econômico para tomada de decisão</p>
      <div class="col-sm-2">
      <select class="form-control" name="formacao_e" id="EgressoFormacaoContexto">
        <option value="0">Selecione a nota</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>
      <br/>
</div>
      <p class="col-sm-10"
         for="EgressoFormacaoFlexibilidade">f. A formação na FA7 permite ter flexibilidade para atuar no mercado de trabalho</p>
      <div class="col-sm-2">
      <select class="form-control" name="formacao_f" id="EgressoFormacaoFlexibilidade">
        <option value="0">Selecione a nota</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>
      <br/>
</div>
      <p class="col-sm-10"
         for="EgressoDisciplinaEstagio">g. A disciplina de estágio supervisionado serviu para sistematizar/testar/exercitar os conhecimentos adquiridos</p>
      <div class="col-sm-2">
      <select class="form-control" name="formacao_g" id="EgressoDisciplinaEstagio">
        <option value="0">Selecione a nota</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>
      </div>
    </div>
 </div>
</fieldset>
<div class="page-header">
<h3>Informações sobre a Instituição</h3>
</div>

<fieldset class="highlight">
<div class="col-sm-12">
<div class="form-group">

      <label><?php echo $contador++; ?>. Atribua nota de 01 (um - menor valor) a 5 (cinco - maior valor) referente a sua formação na FA7? </label><br/>

      <p class="col-sm-10">a. Ensino</p>
      <div class="col-sm-2">
      <select class="form-control" name="instituicao_a" id="EgressoEnsino">
        <option value="0">Selecione a nota</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <br/>
</div>
      <p class="col-sm-10">b. Estrutura</p>
      <div class="col-sm-2">
      <select class="form-control" name="instituicao_b" id="EgressoEstrutura">
        <option value="0">Selecione a nota</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <br/>
</div>
      <p class="col-sm-10">c. Reconhecimento da FA7 como referência em educação</p>
      <div class="col-sm-2">
      <select class="form-control" name="instituicao_c" id="EgressoReconhecimento">
        <option value="0">Selecione a nota</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      </div>
   </div>
 </div>
  </fieldset>
  <div class="page-header">
      <h3>Informações Acadêmicas</h3>
  </div>
  <fieldset class="highlight">

<div class="form-group">
          <label for="EgressoOutraGraduacao" class="col-sm-3 control-label"><?php echo $contador++; ?>. Está cursando ou cursou outro curso de Graduação?</label>
          <div class="col-sm-9">
                <label class="radio-inline">
          <input type="radio" name="cursando_outra_graduacao"
                        id="EgressoOutraGraduacaoSim" value="SIM" />
          Sim
        </label>
                  <label class="radio-inline">
          <input type="radio" name="cursando_outra_graduacao"
                        id="EgressoOutraGraduacaoNao" value="NÃO" />
          Não
        </label>
      </div>
      <div class="col-sm-3 control-label"></div>
              <div class="col-sm-9">
        <input name="qual_outra_graduacao" class="form-control"
                    maxlength="100" type="text" id="EgressoTrabalhando"
                      placeholder="Se sim, especifique Nome/Instituição/Ano de Conclusão (caso tenha concluído)"/>
               </div>
      </div>

    <div class="form-group">
      <label for="EgressoPosGraducacao" class="col-sm-3 control-label"><?php echo $contador++; ?>. Você cursou algum curso de pós-graduação?</label>
      <div class="col-sm-9">
          <label class="radio-inline">
              <input type="radio" name="cursou_pos_graduacao"
                  id="EgressoCursouPosGraduacaoSim" value="SIM" />
              Sim
          </label>
          <label class="radio-inline">
              <input type="radio" name="cursou_pos_graduacao"
                  id="EgressoCursouPosGraduacaoNao" value="NÃO" />
              Não
          </label>
      </div>
      <div class="col-sm-3 control-label"></div>
      <div class="col-sm-9">
          <input name="qual_pos_graduacao_cursou" class="form-control"
              maxlength="100" type="text" id="EgressoCursouPosGraduacaoQual"
              placeholder="Se sim, especifique Nome/Grau/Instituição/Ano de Conclusão"/>
       </div>

    <div class="form-group" >
      <label for="EgressoCursando" class="col-sm-3 control-label"><?php echo $contador++; ?>. Você está cursando pós-graduação?</label>
      <div class="col-sm-9">
          <label class="radio-inline">
              <input type="radio" name="cursando_pos_graduacao"
                  id="EgressoCursandoPosGraduacaoSim" value="SIM" />
              Sim
          </label>
          <label class="radio-inline">
              <input type="radio" name="cursando_pos_graduacao"
                  id="EgressoCursandoPosGraduacaoNao" value="NÃO" />
              Não
          </label>
      </div>
      <div class="col-sm-3 control-label"></div>
      <div class="col-sm-9">
          <input name="qual_pos_graduacao_cursando" class="form-control"
              maxlength="100" type="text" id="EgressoCursandoPosGraduacaoQual"
              placeholder="Se sim, especifique Nome/Grau/Instituição"/>
       </div>

    </div>

    <div class="form-group">
      <label for="EgressoPretendeCursar" class="col-sm-3 control-label"><?php echo $contador++; ?>. Se não está cursando, pretende cursar?</label>
      <div class="col-sm-9">
          <label class="radio-inline">
              <input type="radio" name="pretende_cursar_pos_graduacao"
                  id="EgressoPretendePosSim" value="SIM" />
              Sim
          </label>
          <label class="radio-inline">
              <input type="radio" name="pretende_cursar_pos_graduacao"
                  id="EgressoPretendePosNao" value="NÃO" />
              Não
          </label>
      </div>
      <div class="col-sm-3 control-label"></div>
      <div class="col-sm-9">
          <input name="area_pos_graduacao_pretendida" class="form-control"
              maxlength="100" type="text" id="EgressoPosPretendida"
              placeholder="Se sim, em qual área"/>
       </div>

    </div>

    <div class="form-group">
      <label for= "InputSexo" class="col-sm-3 control-label"><?php echo $contador++; ?>. Você recomendaria seu curso para outras pessoas?</label>
      <div class="col-sm-9">
        <label for="EgressoRecomendariaSim" class="radio-inline">
          <input type="radio" name="recomendaria_a_fa7" id="EgressoRecomendariaSim" value="SIM" />
          Sim
        </label>
        <label for="EgressoRecomendariaNao" class="radio-inline">
          <input type="radio" name="recomendaria_a_fa7" id="EgressoRecomendariaNao" value="NÃO" />
          Não
        </label>

    </div>
    </fieldset>
    <br/>

    <button type="submit" class="btn btn-success">Avançar</button>
  </form>