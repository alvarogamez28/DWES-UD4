<?php
//MySQLi - Estilo Orientado a Objetos!!!!!!!!!!!!!!!!

function crearConexion(){
    @$mysqli = new mysqli("localhost", "root", "root", "agenciaviajes");
    if ($mysqli->connect_errno) {
    echo "<p>Error conectando a la base de datos: ". $mysqli->connect_error;
    }return $mysqli;
}
//Funcion para crear un vuelo, introduzco los valores por parametro.
function crearVuelo($origen,$destino,$fecha,$companya,$modelo){
    $mysqli = crearConexion();
    $sql = "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, Modelo) VALUES (?,?,?,?,?)";
    $mysqli -> stmt_init();
    $retorno=false;
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("sssss", $origen,$destino,$fecha,$companya,$modelo);
        $stmt->execute();
        $stmt->close();

    }
    $mysqli->close();
    return $retorno;
}
//Funcion para modificar un destino introducido por parametro.
function modificaDestino($destino,$id){
    $mysqli = crearConexion();
    $sql = "UPDATE  vuelos SET Destino = ? WHERE id=? ";
    $mysqli -> stmt_init();
    $retorno=false;
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("si", $destino, $id);
        $retorno = $stmt->execute();
        $stmt->close();

    }
    $mysqli->close();
    return $retorno;
        
}
//Funcion para modificar una compañia introducido por parametro.
function modificaCompanya($companya,$id){
    $mysqli = crearConexion();
    $sql = "UPDATE  vuelos SET Companya = ? WHERE id=? ";
    $mysqli -> stmt_init();
    $retorno=false;
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("si", $companya, $id);
        $retorno = $stmt->execute();
        $stmt->close();

    }
    $mysqli->close();
    return $retorno;
        
}

//Eliminar un vuelo.
function eliminaVuelo($id){
    $mysqli = crearConexion();
    $sql = "DELETE FROM vuelos WHERE id=?";
    $retorno=false;
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $retorno = $stmt->execute();
        $stmt->close();
    
    }
    $mysqli->close();
    return $retorno;
}
//Extraer vuelos (mostrar toda la tabla).
function extraeVuelo(){
    $mysqli = crearConexion();
    $sql = "SELECT * FROM vuelos";
    $result = $mysqli -> query($sql);
    $mysqli -> close();
    return $result;
    $vuelos = extraeVuelo();
    while ($fila = $vuelos->fetch_assoc()) {
        print_r($fila);
        echo "<br>";
    }
    $mysqli->close();
}