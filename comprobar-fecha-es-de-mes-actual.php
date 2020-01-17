<?php
function comprobarFechaCaducidad($f1){
  $fecha_actual  = date("01-m-Y 00:00:00",time());
  $fecha_entrada = date("01-m-Y 00:00:00",strtotime($f1));
  return (strtotime($fecha_actual)>strtotime($fecha_entrada));
}
?>
