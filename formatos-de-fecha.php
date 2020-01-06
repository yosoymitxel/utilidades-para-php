<?
$fecha1 = '05-01-2020';
$fecha2 = date('dmY',strtotime($fecha1));
$fecha3 = date('d/m/Y',strtotime($fecha1));
echo 'La fecha es: '.$fecha2;
echo '<br>La fecha es: '.$fecha3;

//La fecha es: 05012020
//La fecha es: 05/01/2020
