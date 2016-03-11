<?php

	
	 function construct(){ 
		$total_reg = 5;
		$p_atual = (isset($_GET["p"])) ? $_GET["p"] : 1;
		//$this->consulta_completa = "";
		$url_query = "";
		$result = array($total_reg,$p_atual,$url_query);
		return($result);
	}
	
	function sql_limit($total_num_user,$total_reg,$p_atual){
		$inicio = ($p_atual * $total_reg) - $total_reg;
		$total_regs = $total_num_user;
		$p_max = ceil(($total_regs/$total_reg));
		$result2 = array($inicio,$total_regs,$p_max);
		return($result2);
		
	}
	
	 function paginar($espacador,$url_query,$p_atual,$p_max){
		$get_args = $url_query;
		$php = $_SERVER['PHP_SELF']; //serve para indicar o endereço do script em execucao
		$p_atual = $p_atual;
		$p_max = $p_max;
		if($p_max > 1){
			$paginacao  = ($p_atual == 1)       ? '' : '<a href="'. $php .'?p=' . 1 . $get_args . '">Primeira</a> | ';
			$paginacao .= (($p_atual - 1) <= 0) ? '' : '<a href="'. $php .'?p=' . ($p_atual - 1) . $get_args . '">Anterior</a> | ';
			$paginacao .= (($p_atual - 5) <= 0) ? '' : '<a href="'. $php .'?p=' . ($p_atual - 5) . $get_args . '">' . ($p_atual - 5) . '</a>' . $espacador;
			$paginacao .= (($p_atual - 4) <= 0) ? '' : '<a href="'. $php .'?p=' . ($p_atual - 4). $get_args . '">' . ($p_atual - 4) . '</a>' . $espacador;
			$paginacao .= (($p_atual - 3) <= 0) ? '' : '<a href="'. $php .'?p=' . ($p_atual - 3). $get_args . '">' . ($p_atual - 3) . '</a>' . $espacador;
			$paginacao .= (($p_atual - 2) <= 0) ? '' : '<a href="'. $php .'?p=' . ($p_atual - 2). $get_args . '">' . ($p_atual - 2) . '</a>' . $espacador;
			$paginacao .= (($p_atual - 1) <= 0) ? '' : '<a href="'. $php .'?p=' . ($p_atual - 1). $get_args . '">' . ($p_atual - 1) . '</a>' . $espacador;
			$paginacao .= '<span>'.$p_atual.'</span>';
			$paginacao .= (($p_atual + 1) > $p_max) ? '' : $espacador . '<a href="'. $php .'?p=' . ($p_atual + 1). $get_args . '">' . ($p_atual + 1) . '</a>';
			$paginacao .= (($p_atual + 2) > $p_max) ? '' : $espacador . '<a href="'. $php .'?p=' . ($p_atual + 2). $get_args . '">' . ($p_atual + 2) . '</a>';
			$paginacao .= (($p_atual + 3) > $p_max) ? '' : $espacador . '<a href="'. $php .'?p=' . ($p_atual + 3). $get_args . '">' . ($p_atual + 3) . '</a>';
			$paginacao .= (($p_atual + 4) > $p_max) ? '' : $espacador . '<a href="'. $php .'?p=' . ($p_atual + 4). $get_args . '">' . ($p_atual + 4) . '</a>';
			$paginacao .= (($p_atual + 5) > $p_max) ? '' : $espacador . '<a href="'. $php .'?p=' . ($p_atual + 5). $get_args . '">' . ($p_atual + 5) . '</a>';
			$paginacao .= (($p_atual + 1) > $p_max) ? '' : ' | <a href="'. $php .'?p=' . ($p_atual + 1) . $get_args . '">Próxima</a> | ';
			$paginacao .= ($p_atual == $p_max)      ? '' : ' <a href="'. $php . '?p=' . $p_max . $get_args . '">Última</a>';
			echo $paginacao;
		}
	}

?>