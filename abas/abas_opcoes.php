<?php function gerar_abas($id, $label, $sel){ 
if ($sel==1){ $marcado="_sel"; }
else { $marcado=""; }
?>
    <div id="opcao<?php echo $id; ?>_aba" class="opcao">
        <div id="op<?php echo $id; ?>e" class="aba_esq<?php echo $marcado; ?>"></div>
        <div id="op<?php echo $id; ?>m" class="aba_meio<?php echo $marcado; ?>" onMouseOver="abas_in(<?php echo $id; ?>);" onMouseOut="abas_out(<?php echo $id; ?>);"><a href="#" onClick="seta_aba(<?php echo $id; ?>);"><?php echo $label; ?></a></div>
        <div id="op<?php echo $id; ?>d" class="aba_dir<?php echo $marcado; ?>"></div>
    </div>
<?php } ?>
