 <div id="imagemDoCurso"> <img src="<?= $host ?>recursos/css/<?= $pele ?>/imagens/parasemprefa7.gif" alt="Portal do Egresso" /></div>
        		
          <p>&nbsp;</p>
	<?php if(isset($_SESSION['matricula'])) { ?>
          
        <div id="linksCaderno" class="links"> <img src="<?= $host ?>recursos/css/<?= $pele ?>/imagens/navegue_aqui_interno.jpg" alt="Navegue Aqui" />          
          <ul>
            <li>
            	<a href="<?= $host ?>egressos/depoimentos/listadepoimentos.php">Depoimentos</a>
            </li>
            <li>
            	<a href="<?= $host ?>egressos/controle.php?acao=exibirVagasEstagio">
                Vagas de Estágio</a>
            </li>
            <li>
            	<a href="<?= $host ?>egressos/controle.php?acao=exibirVagasEmprego">
                Vagas de Emprego</a>
            </li>
            <li><a href="<?= $host ?>egressos/logout.php">Desconectar</a></li>
          </ul>
					<?php } ?>
		</div>