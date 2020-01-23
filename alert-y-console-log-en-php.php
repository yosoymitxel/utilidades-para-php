<?php

function convertirStringParaJS($texto){
    $texto = str_replace('
','\n',$texto);
    return str_replace('<br>','\n',$texto);
}
function sc_console_log($texto){
echo "<script>console.log('" .convertirStringParaJS($texto)  . "' );</script>";
}

function sc_alert($texto){
echo "<script>alert('" . convertirStringParaJS($texto) . "' );</script>";
}
?>
