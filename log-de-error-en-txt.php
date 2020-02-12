<?php
 function errorLog($sql,$error_msg,$proceso){

    $fichero = '../logs/log_'.date('dmY').'.txt';
    $texto = '';
    $texto .= "------ Error en ".$proceso." -------";
    $texto .= "\n";
    $texto .= "Query = ".$sql;
    $texto .= "\n";
    $texto .= "Mensaje = ".$error_msg;
    $texto .= "\n";
    if (file_put_contents($fichero, $texto, FILE_APPEND | LOCK_EX)) {
      return true;
    }else{
      return false;
    }

  }
