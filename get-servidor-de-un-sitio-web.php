<?php
function sc_get_servidor($var){
  $url = explode('.',$var);
  if(dev_existe_en_string($url[0],'www')){
      $urlProcesada = $url[1];
    }else{
      $urlProcesada = str_replace('https://','',$url[0]);
      $urlProcesada = str_replace('http://','',$urlProcesada);
    }
  return $urlProcesada;
}

$var ='https://github.com/yosoymitxel/utilidades-para-php/blob/master/var_dump_imprimir-de-forma-legible.php';

echo (sc_get_servidor($var));
