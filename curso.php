<?php
    include("../config/layout.php");
    include("../ypirangaV3/includes/funcoesmysql.php");
    include("../ypiranga/includes/conexao.php");
   // mysql_select_db("independencia");
    $query = "SELECT egressos_casos_de_sucesso.*, curso.nome_curso
              FROM egressos_casos_de_sucesso
              INNER JOIN curso
              ON egressos_casos_de_sucesso.curso_id = curso.id_curso
              WHERE curso_id = '$_REQUEST[id]'
              ORDER BY id DESC ";
    $result = mysql_query($query);

    $curso = "SELECT *
              FROM curso
              WHERE id_curso = '$_REQUEST[id]'";
    $result_curso = mysql_query($curso);
    $nome_curso = mysql_fetch_array($result_curso)

    
?>

<html>
<head>
  <title>FA7 | Fortaleza | Faculdade 7 de Setembro</title>
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
          <li><a href="<?php echo $host; ?>posgraduacao/index.php?conteudo=Cursos Realizados&situacao=5">Cursos J&aacute; Realizados</a></li>
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
              while($dados = mysql_fetch_array($result)){

?>
          <li><a href="caso-de-sucesso.php?id=<?php echo $dados['id'] ?>"><?php echo $dados['nome'] ?></a></li>
<?php } ?>
            </ul>
          </div>
        </div>
        <div id="principal">
          <p>
            <h1 class="tituloCaderno">
            Casos de Sucesso de <?php echo $nome_curso['nome_curso'];?>          </h1>
          <br/>
                    <br />
          <style type="text/css">
img {
border-radius: 5px;
}
</style> <!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../../recursos/css/materialize.min.css" media="screen,projection"/>

 
<?php 

@mysql_data_seek($result, 0);


if (mysql_num_rows($result) < 1) {
  echo ("<h4>Não existem casos de sucesso cadastrados para este curso</h4>");
} else {
    while($dados = mysql_fetch_array($result)){
    
?>

<div class="col s10 offset-s2">
<div class="card-panel grey lighten-5 z-depth-1">
<div class="row valign-wrapper">
<div class="col s3"><img width="115" height="115" class="circle" alt="<?=$dados['nome']?>" src="<?php echo $dados['imagem'] ?>"/> <br/>
<p class="center-align"><?php echo $dados['turma']?></p>
<!-- notice the "circle" class -->             </div>
<div class="col s9"><a class="btn-floating btn-large waves-effect waves-light darken-2 right" href="caso-de-sucesso.php?id=<?=$dados['id']?>"><i class="mdi-content-add"></i></a>         <span class="black-text">
<h5><?=$dados['nome']?><br/>
</h5>
<h6><em><?php echo $dados['ocupacao']?></em></h6>
<i><?php echo $dados['depoimento_resumo'] ?></i>              </span>       </div>
</div>
</div>
</div>
<? } 
} ?>
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
