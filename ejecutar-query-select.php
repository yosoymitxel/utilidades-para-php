<?php
//Usar PDO como intermedio a la base de datos 
//Se debe establecer una varaible $pdo a un nivel de scope abajo de la funcion para que sirva
/*
$pdoConexion = new ConexionPDO();
$pdoConexion = $pdoConexion->getPdo();
$pdo         = $pdoConexion;
*/

function sc_lookup($sql){
    //Toma el $pdo del scope de arriba
    global $pdo;
    
    //Prepara el query
    $query = $pdo->prepare($sql);
    try {
        $sqlResult = $query->execute(array());
        
        //Valida si se ejecutó el query, si lo hizo retorna un array (igual si no hay datos en la tabla) y sino retorna un mensaje de error
        if ($sqlResult) {
            $sqlResult = $query->fetchAll();
            return $sqlResult;
        }else{
            return '<p class="alert-danger">No se han hallado datos</p>';
        }
    } catch (Exception $e) {
        return '<p class="alert-danger">No funcionó</p>';
    }
}
?>
