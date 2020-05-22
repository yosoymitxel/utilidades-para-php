<?php
    $numero = 21709632;
    $numero = number_format($numero, 0, ",", ".");
    echo($numero);
//Bonus, formateador de números en formato 1.000,57 (Unidades de mil y decimales)
function str_to_float($t){
      $float = floatval(str_replace(',','.',$t));
      $int   = (int)$float;
      $float = (strpos(strval($float),'.') !== false)? ','.(int)preg_replace('/d+./','',$float) : '';
      return number_format($int, 0, ",", ".").$float;
}
$var = str_to_float('23619,7833');

var_dump($var);


$var = str_to_float('23619');

var_dump($var);
?>
