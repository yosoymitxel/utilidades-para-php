<?php
//Útil cuando tenemos por ejemplo un link o un código HTML y lo queremos pasar por método get o simular que lo pasamos por este método
$e = 'https://github.com/yosoymitxel/utilidades-para-php/';
$e = urlencode ($e);
echo $e;

//Aquí lo decodificamos
$e = urldecode($e);
echo $e;
?>
