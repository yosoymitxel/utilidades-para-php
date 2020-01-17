<?php
function comprobarFechaCaducidad($f1){
	$fecha_actual  = date("m-Y",time());
	$fecha_entrada = date("m-Y",strtotime($f1));
	return (strtotime($fecha_actual)>=strtotime($fecha_entrada));	
}
?>
