<?php
function sc_arr_eliminar_repetidos($array1,$array2){
    $arrayValidar      = array_merge($array1,$array2);
    $arrayElementos    = array_unique(array_merge($array1,$array2));
    $arrayResult_assoc = array_diff_assoc($arrayValidar, $arrayElementos);
    $arrayResult = [];
    
    array_push($arrayResult,array_keys ($arrayResult_assoc));

    return $arrayResult[0];
}

$array1 = [1,2,3,4,5];
$array2 = [1,2,3,6,7];


print_r(sc_arr_eliminar_repetidos($array1,$array2));
