<?php
//Este sirve para con dos datos
function utlimoDiaMesAnio($mes,$anio){
  return date("d",(mktime(0,0,0,$mes+1,1,$anio)-1));
}

//Este saca el último día del mes actual
function utlimoDiaMesActual(){
  $mes  = date("m");
  $anio = date("Y");
  return date("d",(mktime(0,0,0,$mes+1,1,$anio)-1));
}

//Desde una fecha
function utlimoDiaFecha($fecha){
  $mes  = date("m",fecha);
  $anio = date("Y",fecha);
  return date("d",(mktime(0,0,0,$mes+1,1,$anio)-1));
}
?>
