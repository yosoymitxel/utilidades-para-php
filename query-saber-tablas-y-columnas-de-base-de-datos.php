<?php
$tablas   = " SHOW TABLES FROM nombre_de_tu_base_de_datos";

$columnas = " SELECT COLUMN_NAME AS columna 
              FROM 
              information_schema.columns 
              WHERE 
              table_schema = 'nombre_de_tu_base_de_datos' 
              AND 
              table_name = 'nombre_de_la_tabla'";

?>
