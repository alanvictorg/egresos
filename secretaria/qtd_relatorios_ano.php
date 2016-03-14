<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
?>

<?php
session_start();
include("../controle/lib/db-connection.php");
include("../controle/lib/util.php");
include("../controle/lib/db-egressos.php");
include("../controle/lib/db.php");
include("../controle/lib/config.php");

$consultaFormulariosAluno = "SELECT * FROM  formulario";

$resultadoFormulariosAluno = mysql_query($consultaFormulariosAluno);
 
$formularioMaisDeUmAno = "SELECT
  MAX(atualizado_em) as MAIS_DE_UM_ANO
FROM
  formulario
WHERE
  egresso_id = $_SESSION[id]
AND
  (formulario.atualizado_em + INTERVAL 1 YEAR) <= NOW()";

$consultaMaisDeUmAno = mysql_query($formularioMaisDeUmAno);
$resultadoMaisDeUmAno = mysql_fetch_array($consultaMaisDeUmAno);


$formularioMaisRecente = "SELECT
MAX(atualizado_em) as MAIS_RECENTE
FROM
formulario
WHERE
egresso_id = $_SESSION[id]";

$consultaMaisRecente = mysql_query($formularioMaisRecente);
$resultadoMaisRecente = mysql_fetch_array($consultaMaisRecente)

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <link href="../../favicon.ico" rel="icon">
        <title>
            FA7 | Faculdade 7 de Setembro | Egressos | Acompanhamento
        </title><!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../css/dashboard.css" rel="stylesheet">
        <link href="../css/acompanhamento.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" class=
                    "navbar-toggle collapsed" data-target="#navbar"
                    data-toggle="collapse" type="button"><span class=
                    "sr-only">Toggle navigation</span> <span class=
                    "icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button> <a class=
                    "navbar-brand" href="#">FA7 | Egressos</a>
                </div>

                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                  <ul class="nav nav-sidebar">
                    <li class="active"><a href="secretaria/index.php">Secretaria<span class="sr-only">(current)</span></a></li>
                    
                  </ul>
                </div>

                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header">
                       Quantidade de formulários    
                    </h1>


                     <!--  <?php 
                      
                       
         
                       
                       if(empty($_GET['data'])){//navegaçao entre os meses
                           $dia = date('d');
                           $month = date("m");
                           $ano = date('Y');
                       }else{
                           $data = explode('/',$_GET['data']);//nova data
                           $dia = $data[0];
                           $month = $data[1];
                           $ano = $data[2];
                       }
                       
                       if($month==1){//mês anterior se janeiro mudar valor
                           $mes_ant = 12;
                           $ano_ant = $ano - 1;
                       }else{
                           $mes_ant = $month - 1;
                           $ano_ant = $ano;
                       }
                       
                       if($month==12){//proximo mês se dezembro tem que mudar
                           $mes_prox = 1;
                           $ano_prox = $ano + 1;
                       }else{
                           $mes_prox = $month + 1;
                           $ano_prox = $ano;
                       }
                       
                       $hoje = date('j');//função importante pego o dia corrente
                       switch($month){/*notem duas variaveis para o switch para identificar dia e limitar numero de dias*/
                           case 1: $mes = "JANEIRO";
                           break;
                           case 2: $mes = "FEVEREIRO";// todo ano bixesto fev tem 29 dias
                           break;
                           case 3: $mes = "MARÇO";
                           break;
                           case 4: $mes = "ABRIL";
                           break;
                           case 5: $mes = "MAIO";
                           break;
                           case 6: $mes = "JUNHO";
                           break;
                           case 7: $mes = "JULHO";
                           break;
                           case 8: $mes = "AGOSTO";
                           break;
                           case 9: $mes = "SETEMBRO";
                           break;
                           case 10: $mes = "OUTUBRO";
                           break;
                           case 11: $mes = "NOVEMBRO";
                           break;
                           case 12: $mes = "DEZEMBRO";
                         
                           break;
                       }
                       
                       
                       
                           print '<table class="tabela" >';//construção do calendario
                           print '<tr>';
                           print '<td class="mes"><a href="?data='.$dia.'/'.$mes_ant.'/'.$ano_ant.'" title="Mês anterior">  &laquo; </a></td>';/*mês anterior*/
                           print '<td class="mes" colspan="5">'.$mes.'/'.$ano.'</td>';/*mes atual e ano*/
                           print '<td class="mes"><a href="?data='.$dia.'/'.$mes_prox.'/'.$ano_prox.'" title="Próximo mês">  &raquo; </a></td>';/*Proximo mês*/
                           print '</tr><tr>';
                           
                           print '</tr><tr>';
                           $dt = 1;
                           if($branco > 0){
                               for($x = 0; $x < $branco; $x++){
                                    print '<td>&nbsp;</td>';/*preenche os espaços em branco*/
                                   $dt++;
                               }
                           }
                           
                           //for($i = 1; $i <= $n; $i++ ){/*agora vamos no banco de dados verificar os evendos*/
                           
                               $dtevento = $ano.$month;/*junta o mês e o ano em uma variável*/
                               $sqlag = mysql_query("SELECT * FROM formulario WHERE formulario.criado_em = $dtevento") or die(mysql_error());
                                       $num = mysql_num_rows($sqlag);/*quantos eventos tem para o mes*/
                                       $idev = @mysql_result($sqlag, 0, "dtevento");
                                       $eve = @mysql_result($sqlag, 0, "evento");              
                                print "Temos ".$num." Formulários(s) em ".$month."de".strtolower($ano)."<br>";
                           print '</tr>';
                           
                           print '</table>';
                               //if($qt > 0){/*se tiver evento no mês imprime quantos tem */
                                 print "Temos ".$num." Formulários(s) em ".strtolower($mes)."de".strtolower($ano)."<br>";/*mudar para caixa baixa as letras do mes*/
                   //            }
                       
                      // }
                       
                       ?>-->
                           



<?php
                          



                       if(empty($_GET['data'])){//navegaçao entre os meses
                           $day = date('d');
                           $month = date('n');
                           $year = date('Y');
                           $months=array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
                       }else{
                           $data = explode('/',$_GET['data']);//nova data
                           $day = $data[0];
                           $month = $data[1];
                           $year = $data[2];
                           $months=array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
                       }

                       
                           $year_ant = $year - 1;
                           $year_prox = $year + 1; 

echo '<table class="tabela">';
//echo '<th colspan=4 align=center style="font-family:Verdana; font-size:18pt; color:#ff9900;">'.$year.'</th>';
                           print '<tr >';
                           print '<td class="mes"><a href="?data='.$day.'/'.$month.'/'.$year_ant.'" title="Ano anterior">  &laquo; </a></td>';/*mês anterior*/
                           print '<td class="mes" colspan="2">'.$ano.'</td>';/*mes atual e ano*/
                           print '<td class="mes"><a href="?data='.$day.'/'.$month.'/'.$year_prox.'" title="Próximo Ano">  &raquo; </a></td>';/*Proximo mês*/
                           print '</tr>';
for ($fila=1; $fila<=3; $fila++) {
echo '<tr>';

for ($coluna=1; $coluna<=4; $coluna++) {
$esse_mes=($fila-1)*4+$coluna;
$primeiro=date('w',mktime(0,0,0,$esse_mes,1,$year));
$global=date('t',mktime(0,0,0,$esse_mes,1,$year));
if ($primeiro==0) $primeiro=7;
echo '<td width="25%" valign=top>';

echo '<table border=0 align=center style="font-size:8pt; font-family:Verdana">';
echo '<th colspan=7 align=center style="font-size:12pt; font-family:Arial; color:#666699;">'.$months[$esse_mes-1].'</th>';








echo '<tr><br>';
$i=1;
while ($i<$primeiro) {
echo '<td> </td>';
$i++;
}

echo '</tr>';

echo '</table>';


if($months[$esse_mes-1]== 'Janeiro'){
  $mes1 = "01";
}elseif ($months[$esse_mes-1]=='Fevereiro') {
  $mes1 = "02";
}elseif ($months[$esse_mes-1]=='Março') {
  $mes1 = "03";
}elseif ($months[$esse_mes-1]=='Abril') {
  $mes1 = "04";
}elseif ($months[$esse_mes-1]=='Maio') {
  $mes1 = "05";
}elseif ($months[$esse_mes-1]=='Junho') {
  $mes1 = "06";
}elseif ($months[$esse_mes-1]=='Julho') {
  $mes1 = "07";
}elseif ($months[$esse_mes-1]=='Agosto') {
  $mes1 = "08";
}elseif ($months[$esse_mes-1]=='Setembro') {
  $mes1 = "09";
}elseif ($months[$esse_mes-1]=='Outubro') {
  $mes1 = "10";
}elseif ($months[$esse_mes-1]=='Novembro') {
  $mes1 = "11";
}elseif ($months[$esse_mes-1]=='Dezembro') {
  $mes1 = "12";
}
                  
                 $dtevento = $year."-".$mes1;
                
                 $sqlag = mysql_query("SELECT * FROM formulario WHERE formulario.criado_em like '%$dtevento%'") or die(mysql_error());
                         $num = mysql_num_rows($sqlag);
                        
             
                   print '<p align="center">'.$num.' Formulários(s)<br></p>';


  













echo '</td>';
}
echo '</tr>';
}
echo '</table>';
?>







                    <div class="row placeholders">
                    </div>

         
                    
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=
        "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script> 
        <script src="/js/bootstrap.min.js">
        </script> 
        <script src="/js/docs.min.js">
        </script> <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/js/ie10-viewport-bug-workaround.js">
        </script>
    </body>
</html>





<!--

if($months[$esse_mes-1]== 'January'){
  $mes1 = '01';
}elseif ($months[$esse_mes-1]=='February') {
  $mes1 = '02';
}elseif ($months[$esse_mes-1]=='March') {
  $mes1 = '03';
}elseif ($months[$esse_mes-1]=='April') {
  $mes1 = '04';
}elseif ($months[$esse_mes-1]=='May') {
  $mes1 = '05';
}elseif ($months[$esse_mes-1]=='June') {
  $mes1 = '06';
}elseif ($months[$esse_mes-1]=='July') {
  $mes1 = '07';
}elseif ($months[$esse_mes-1]=='August') {
  $mes1 = '08';
}elseif ($months[$esse_mes-1]=='September') {
  $mes1 = '09';
}elseif ($months[$esse_mes-1]=='October') {
  $mes1 = '10';
}elseif ($months[$esse_mes-1]=='November') {
  $mes1 = '11';
}elseif ($months[$esse_mes-1]=='December') {
  $mes1 = '12';
}-->