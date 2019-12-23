<?php
function comprobarFechaCaducidad($f1){
	$fecha_actual  = explode("-", date("m-Y",time()));

	$fecha_entrada = explode("-", date("m-Y",strtotime($f1)));

	for($i=0;$i<2;$i++){
		$fecha_actual[$i]  = intval($fecha_actual[$i]);
		$fecha_entrada[$i] = intval($fecha_entrada[$i]);
	}

	if($fecha_actual[0]>=$fecha_entrada[0] && $fecha_entrada[1] == $fecha_actual[1]){
		return false;
	}else{
		return false;
	}
}
?>
