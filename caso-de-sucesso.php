<?php
    include("../config/layout.php");
    include("../ypirangaV3/includes/funcoesmysql.php");
    include("../ypiranga/includes/conexao.php");
   // mysql_select_db("independencia");

    $egresso_id = $_REQUEST['id'];
    $consulta_egresso = "SELECT * FROM egressos_casos_de_sucesso 
                        WHERE id = $egresso_id";
    $resultado_consulta_egresso = mysql_query($consulta_egresso);
    $egresso = mysql_fetch_array($resultado_consulta_egresso);

    $consulta_nav = "SELECT * 
                FROM egressos_casos_de_sucesso
                WHERE curso_id = '$egresso[curso_id]'
                ORDER BY id ASC";
    $resultado_nav = mysql_query($consulta_nav);
    $dados_nav = mysql_fetch_array($resultado_nav);
?>

<html>
<head>
  <title><?php echo $egresso['nome'];?> | FA7 | Faculdade 7 de Setembro | Fortaleza</title>
  <link rel="stylesheet" type="text/css"
        href="<?php echo $host; ?>recursos/css/<?php echo $pele; ?>/interno.css">
  <link rel="stylesheet" type="text/css"
        href="<?php echo $host; ?>recursos/css/<?php echo $pele; ?>/posgrad.css">
  <!--[if lt IE 7]>
  <link rel="stylesheet" type="text/css"
        href="<?php echo $host; ?>recursos/css/<?php echo $pele; ?>/interno_IE6.css">
  <![endif]-->
  <!--[if (IE 7)|(IE 8)]>
  <link rel="stylesheet" type="text/css"
        href="<?php echo $host; ?>recursos/css/<?php echo $pele; ?>/interno_IE7.css">
  <link rel="stylesheet" type="text/css"
        href="<?php echo $host; ?>recursos/css/<?php echo $pele; ?>/posgrad_ie7.css">
  <![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="description"
        content="Casos de Sucesso dos Egressos da Faculdade 7 de Setembro">

</head>
<body>
<div align="center">
  <div id="container">
    <!-------------------------- TOPO:INICIO ---------------------------->
    <?php include($host . "recursos/includes/topo.php"); ?>
    <!-------------------------- TOPO:FIM ---------------------------->
    <div id="content">
      <div id="destaquePrincipal"
           style="background: url(<?php echo $host; ?>recursos/css/<?php echo $pele; ?>/imagens/egressos_faixa.jpg) no-repeat;">
        <p id="migalhaDePao"><a href="<?php echo $host; ?>">PRINCIPAL</a></p>
        <ul id="linksInterno">
          <li><a
              href="<?php echo $host; ?>posgraduacao/index.php?conteudo=abertos&situacao=2">Cursos
            com Inscri&ccedil;&otilde;es Abertas</a></li>
          <li><a
              href="<?php echo $host; ?>posgraduacao/index.php?conteudo=andamento&situacao=4">Cursos
            em Andamento</a></li>
          <!-- li><a href="<?php echo $host; ?>posgraduacao/index.php?conteudo=Cursos Realizados&situacao=5">Cursos J&aacute; Realizados</a></li -->
          <li><a
              href="<?php echo $host; ?>posgraduacao/index.php?conteudo=inscricoes&situacao=2">Inscri&ccedil;&otilde;es
            On-Line</a></li>
          <li><a href="http://www.fa7.edu.br/netstudent" target="_blank">Aluno
            On-Line</a></li>
          <li><a
              href="<?php echo $host; ?>posgraduacao/index.php?conteudo=Contato">Contato</a>
          </li>
        </ul>

      </div>
      <!-- Fim destaquePrincipal  -->
      <div id="conteudo">
        <div id="links">
          <div id="imagemDoCurso"><img
              src="<?php echo $host; ?>/recursos/css/azul/imagens/parasemprefa7.gif"
              alt=""/>
          </div>
          <div id="linksCaderno" class="links">
            <img src="<?php echo $host; ?>/recursos/css/azul/imagens/navegue_aqui_interno.jpg" alt="Navegue Aqui" style="margin-bottom: 0px;">
            <ul>
              <li>Casos de Sucesso</li>
              <?php 
              mysql_data_seek($resultado_nav, 0);
              while($dados_nav = mysql_fetch_array($resultado_nav)){

?>
          <li><a href="caso-de-sucesso.php?id=<?php echo $dados_nav['id'] ?>"><?php echo $dados_nav['nome'] ?></a></li>
<?php } ?>
            </ul>
          </div>
        </div>
        <div id="principal">
          <p>
            <h1 class="tituloCaderno">
            <?php echo $egresso['nome']; ?>           </h1></p>
          <br/>
          <br />
          <style type="text/css">
            img {
              border-radius: 5px;
            }
          </style>
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet"
                href="../../recursos/css/materialize.min.css"
                media="screen,projection"/>
            <?php echo $egresso['historico']; ?>
          
          <div class="card-panel">  <p> <i><?php echo $egresso['depoimento']; ?></i> </p></div>


        </div>
      </div>
      <!-- Fim #conteudo -->
    </div>
    <div style="clear:both;">&nbsp;</div>
    <!-------------------------- PROPAGANDAS:INICIO ---------------------------->
    <div id="propagandas">
      <?php include($host . "recursos/includes/propagandas.php"); ?>
    </div>
    <!-------------------------- PROPAGANDAS:FIM ---------------------------->
    <!-------------------------- RODAPE:INICIO ---------------------------->
    <div id="rodape"><?php include($host . "recursos/includes/rodape.php"); ?>
    </div>
    <!-------------------------- RODAPE:FIM ---------------------------->
  </div>
</div>
</body>
</html>
