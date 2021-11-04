<?php

function dev_generar_csv($filePath,$fileName,$array){
    $result  = false;
    $headers = sc_arr_contiene_keys($array[0]) ? array_keys($array[0]) : false;

    if (sc_is_array($array,1)){
        //Crear archivo CSV
        $fd = fopen($filePath.'/'.$fileName.'.csv', 'w');

        if ($fd === false) {
            die("No se ha podido crear el archivo. Revise los permisos en la carpeta. <i>\"$filePath\"</i>");
        }

        //Inserta las cabeceras en el archivo
        if($headers) {
            fputcsv($fd, $headers, ";");
        }

        //Inserta los datos en el archivo
        foreach($array as $filas) {
            fputcsv($fd, $filas, ";");
        }

        //Cierra el archivo
        fclose($fd);

        $result  = true;
    }

    return $result;
}
