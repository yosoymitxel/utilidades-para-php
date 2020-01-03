<?php
//Funcion sumarDiasFechaActual
function sumarDiasFechaActual($cantidadDias){
  return date('Y-m-d H:i:s',strtotime(date('Y-m-d H:i:s')."+ $cantidadDias days"));
}

?>
