<?php
function sc_contador_texto_para_pruebas($texto='Prueba') {
    static $index = 0;
    $index++;
    echo "$texto: $index\n";
}

sc_contador_texto_para_pruebas('Prueba');
sc_contador_texto_para_pruebas('Prueba');

//Prueba: 1
//Prueba: 2
