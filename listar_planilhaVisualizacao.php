<?php
include"includes/header.php";
$curso_concluido_fa7 = $_POST['curso'];
$ano_conclusao = $_POST['ano_conclusao'];
$listaTodosMarcados = $_POST['pesquisa'];
    if(($curso_concluido_fa7 == "") && ($ano_conclusao == "")){
        $resultado_busca = mysql_query("SELECT * 
                                FROM formulario
                                INNER JOIN egressos
                                ON formulario.egresso_id = egressos.id
                                WHERE curso_concluido_fa7 LIKE '%$curso_concluido_fa7%'");
    }else{
        $resultado_busca = mysql_query("SELECT * 
                                 FROM formulario
                                INNER JOIN egressos
                                ON formulario.egresso_id = egressos.id
                                WHERE curso_concluido_fa7 LIKE '%$curso_concluido_fa7%'
                                AND ano_conclusao LIKE '%$ano_conclusao%' ");   
    }
  
    $num_fields = mysql_num_fields($resultado_busca);
    for($i = 0;$i<$num_fields; $i++){
      $fields[] = mysql_field_name($resultado_busca,$i);
    }

      $arquivo = 'planilha.xls';
                $table = '<table class="table">';
                  $table .='<thead>';
                    $table .= '<tr>';
                      for($i = 0;$i < $num_fields; $i++){
                        if(!empty($listaTodosMarcados[$i])){   
                            $table .= '<th>'.$valor = str_replace("_" , " " , $fields[$i]).'</th>';
                        }
                      }    
                    $table .= '</tr>';
                  $table .='</thead>';
                $table .= '<tbody>';
                  while($row = mysql_fetch_array($resultado_busca)){
                    $table .= '<tr>';
                      for($i=0; $i<$num_fields; $i++){ 
                        if(!empty($listaTodosMarcados[$i])){ 
                              $table .= '<td>'.$row[$fields[$i]].'</td>';
                        }
                      }  
                    $table .= '</tr>';
                  }
                $table .= '</tbody>';
                $table .= '</table>';  

    if(mysql_num_rows($resultado_busca) > 0){
       echo $table;
    }else{
      echo "<h2>Nenhum registro encontrado com os parâmetros expecificados!!!</h2>";
      echo "<a href='listar_egressos_form.php'>Voltar a pesquisa</a>";
    }      
?>