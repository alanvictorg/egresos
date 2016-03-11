<?php 
session_start();
include("controle/lib/db-connection.php");
include("controle/lib/util.php");
include("controle/lib/db-egressos.php");
include("controle/lib/db.php");
include("controle/lib/config.php");

$resultado_busca = mysql_query("SELECT * 
                              FROM formulario
                              INNER JOIN egressos
                              ON formulario.egresso_id = egressos.id" );

  $num_fields = mysql_num_fields($resultado_busca);
                       
      for($i = 0;$i<$num_fields; $i++){
        $fields[] = mysql_field_name($resultado_busca,$i);
      }

?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include("includes/header.php") ?>	
<title>Listar - Egressos</title>

<script type="text/javascript">
		$(function() {
	  $("#todos").on('click', function(){  
	            if ($("input[type='checkbox']").prop("checked")) {  
	                $(':checkbox').prop('checked', 'checked');  
	                this.selecionados = true;
	            } else {  
	                $(':checkbox').prop('checked', '');  
	                this.selecionados = false;
	            }  
	        });  
	}); 
</script>

<style type="text/css">
  	.botao{
		width: 100%;
	}
</style>

<body>
<div  class="container-fluid">
	<div class="jumbotron">
		<h1>Pesquisar egressos</h1>
	</div>
	
	<p>Utilize os filtros abaixo para restringir sua busca.</p>
	<form action="listar_egressos_pesquisa_excel.php" method="post" >
		<div class="row">
				<div class="col-md-4 form-group">
					<label for="curso">Curso </label>
					<select id="curso" name="curso" class="form-control">
						<option value="">Seleciona todos os cursos</option>
						<option value="ADMINISTRAÇÃO">Administração</option>
						<option value="ARQUITETURA E URBANISMO">Arquitetura e Urbanismo</option>
						<option value="CIÊNCIAS CONTÁBEIS">Ciências Contábeis</option>
						<option value="COMUNICAÇÃO SOCIAL C/ HAB. EM JORNALISMO">Comunicação Social c/ Hab. em Jornalismo</option>
						<option value="COMUNICAÇÃO SOCIAL C/ HAB. EM PUBLICIDADE E PROPAGANDA">Comunicação Social c/ Hab. em Publicidade e Propaganda</option>
						<option value="DIREITO">Direito</option>
						<option value="ENGENHARIA ELÉTRICA">Engenharia Elétrica</option>
						<option value="ENGENHARIA MECÂNICA">Engenharia Mecânica</option>
						<option value="ENGENHARIA DE PRODUÇÃO">Engenharia de Produção</option>
						<option value="PEDAGOGIA">Pedagogia</option>
						<option value="SISTEMAS DE INFORMAÇÃO">Sistemas de Informação</option>
						<option value="SUPERIOR DE TECNOLOGIA EM DESIGN GRÁFICO">Superior de Tecnologia em Design Gráfico</option>
						<option value="SUPERIOR DE TECNOLOGIA EM LOGÍSTICA">Superior de Tecnologia em Logística</option>
						<option value="SUPERIOR DE TECNOLOGIA EM NEGÓCIOS IMOBILIÁRIOS">Superior de Tecnologia em Negócios Imobiliários</option>
					</select>
				</div>
					
				<div class="col-md-3 form-group">
					<label for="ano_conclusao">Ano de conclusão</label>
					<select id="ano_conclusao" name="ano_conclusao" class="form-control">
					<option value="">Selecione todos os anos</option>
						<?php 
						$ano = 2006;
						while ( $ano <= date('Y')) { ?>
						<option value="<?php echo $ano; ?>"><?php echo $ano; ?></option> 
						<?php 
						$ano += 1;
						}
						?>
					</select>
				</div>
				
				<div class="col-md-3 form-group">
					<label for="pesquisar">Pesquisar</label>
					 <div class="dropdown" id="pesquisar">
					    <button class="btn btn-default botao" type="button" data-toggle="dropdown">O que deseja listar?
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu">
					    	<li><input type="checkbox" name="todos" id="todos" value="">** Todos **</li>
					    	<?php for($i = 0; $i < $num_fields; $i++){ ?>
					    			<?php $valor = str_replace("_" , " " , $fields[$i]) ?>	
					        	    <li><input type="checkbox" name="pesquisa[]" value="<?php echo $valor; ?>"><?php echo $valor ?></li>
  						    <?php } ?>					   
					    </ul>
					</div>		
				</div>		

				<div class="col-md-1">
					<label>Visualizar</label>
					<input type="submit" name="visualizar" value="Enviar" class="form-control">
				</div>				

				<div class="col-md-1">
					<label>Planilha</label>
					<input type="submit" name="planilha" value="Enviar" class="form-control">
				</div>
		</div>
	</form>	
</div>
 
</body>
</html>