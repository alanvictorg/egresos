// Funções AJAX apara cadastro do BIC
function trazdados(){
	   var combouf = createXMLHTTP();
	   combouf.open("post", "objestado.php", true);
	   combouf.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	   combouf.onreadystatechange=function(){
		   if (combouf.readyState==4){// abaixo o texto do gerado no arquivo executa.asp e colocado no div
			   document.getElementById("divcombouf").innerHTML = combouf.responseText;}}
			   combouf.send("codestado=" + document.getElementById('cmbOrgaoCadastrador').options[document.getElementById('cmbOrgaoCadastrador').selectedIndex].value);
}
function trazbairro(){
	   var combouf1 = createXMLHTTP();
	   combouf1.open("post", "objbairro.php", true);
	   combouf1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	   combouf1.onreadystatechange=function(){
		   if (combouf1.readyState==4){// abaixo o texto do gerado no arquivo executa.asp e colocado no div
			   document.getElementById("divcombouf1").innerHTML = combouf1.responseText;}}
			   combouf1.send("codestado=" + document.getElementById('cmbAssentamento').options[document.getElementById('cmbAssentamento').selectedIndex].value);
}

// ------------------- Funções utilizadas apenas para cadastro/edição de BICs --------------------------------------

function trazfomulario(){
   var combouf2 = createXMLHTTP();
   combouf2.open("post", "obform.php", true);
   combouf2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   combouf2.onreadystatechange=function(){
	   if (combouf2.readyState==4){// abaixo o texto do gerado no arquivo executa.asp e colocado no div
		   document.getElementById("divcombouf2").innerHTML = combouf2.responseText;}}
		   combouf2.send("codestado=" + document.getElementById('cmbAssentamento').options[document.getElementById('cmbAssentamento').selectedIndex].value);
}

function condicao(){
	var vcond = document.getElementById('cmbSituacaoCadastral').options[document.getElementById('cmbSituacaoCadastral').selectedIndex].value;
	if (vcond==1){ 
		document.getElementById('RadGrpTitularidade').disabled=false;
		document.getElementById('RadGrpCondicaoMoradia').disabled=true;
	}
	else{
		document.getElementById('RadGrpTitularidade').disabled=true;
		document.getElementById('RadGrpCondicaoMoradia').disabled=false;
	}
}
function relacao_tit(){
	var vcond = document.getElementById('RadGrpIdRelacaoTitularImovel').options[document.getElementById('RadGrpIdRelacaoTitularImovel').selectedIndex].value;
	if (vcond==1){ 
		document.getElementById('txtNmInformante').value=document.getElementById('txtNmPessoa').value;
		document.getElementById('txtNrRGInformante').value=document.getElementById('txtNrRG').value;
		document.getElementById('txtDsOrgaoExpedidorInformante').value=document.getElementById('txtDsOrgaoExpedidor').value;
		document.getElementById('txtDtNascimentoInformante').value=document.getElementById('txtDtNascimento').value;
	}
	else if (vcond==3){ 
		document.getElementById('txtNmInformante').value=document.getElementById('txtNmPessoaCompanheiro').value;
		document.getElementById('txtNrRGInformante').value=document.getElementById('txtNrRGCompanheiro').value;
		document.getElementById('txtDsOrgaoExpedidorInformante').value=document.getElementById('txtDsOrgaoExpedidorCompanheiro').value;
		document.getElementById('txtDtNascimentoInformante').value=document.getElementById('txtDtNascimentoComapanheiro').value;
	}
	else {
		document.getElementById('txtNmInformante').value="";
		document.getElementById('txtNrRGInformante').value="";
		document.getElementById('txtDsOrgaoExpedidorInformante').value="";
		document.getElementById('txtDtNascimentoInformante').value="";
	}
}

// -------------------------------- JavaScipt das abas de opções --------------------------------------------------

var aba_atual;
function abas_in(quem){
	if (document.getElementById('abatual').value!=quem){
		document.getElementById('op'+quem+'m').className='aba_meio_sel';
		document.getElementById('op'+quem+'e').className='aba_esq_sel';
		document.getElementById('op'+quem+'d').className='aba_dir_sel';
	}
}
function abas_out(quem){
	if (document.getElementById('abatual').value!=quem){
		document.getElementById('op'+quem+'m').className='aba_meio';
		document.getElementById('op'+quem+'e').className='aba_esq';
		document.getElementById('op'+quem+'d').className='aba_dir';
	}
}
function seta_aba(quem){

	var tt = document.getElementById('abatual').value;
	document.getElementById('op'+tt+'m').className='aba_meio';
	document.getElementById('op'+tt+'e').className='aba_esq';
	document.getElementById('op'+tt+'d').className='aba_dir';
	
	document.getElementById('abatual').value=quem;
	
	document.getElementById('op'+quem+'m').className='aba_meio_sel';
	document.getElementById('op'+quem+'e').className='aba_esq_sel';
	document.getElementById('op'+quem+'d').className='aba_dir_sel';
	
	var i=1;
	var quale;
	for (i=1;i<=7;i++){
		quale='opcao'+i;
		if (i==quem){ Show(quale);	}
		else{ Hide(quale); }
	}
}
