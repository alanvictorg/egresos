<?php
	include('mpdf/mpdf60/mpdf.php');
	ob_start();
?>

<?php
	include('listar_todos_formularios.php');
	$html = ob_get_clean();
	$mpdf= new mPDF();
	$mpdf->WriteHTML($html);
	$mpdf->Output('Formulario.pdf', 'D');
	exit;
?>