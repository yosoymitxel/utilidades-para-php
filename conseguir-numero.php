<?php
function conseguirNumero($texto){
   $texto = str_replace(',','.',$texto);
   return floatval(preg_replace('/[^0-9.]+/', '', $texto));
}
?>
