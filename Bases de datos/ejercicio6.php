<?php
//MySQLi - Estilo procesal!!!!!!!!!!

function crearConexion(){
    @$mysqli = mysqli_connect('localhost','developer','developer','agenciaviajes');
    $error = mysqli_connect_errno();
    if ($error!=null) {
    echo "<p>Error  $error conectando a la base de datos: ",mysqli_connect_errno($mysqli),"</p>";
    exit();
    }
    return $mysqli;
}
//Funcion para crear un vuelo, introduzco los valores por parametro.
function crearVuelo($origen,$destino,$fecha,$companya,$modelo){
    $mysqli = crearConexion();
    $sql = "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, Modelo) VALUES (?,?,?,?,?)";
    mysqli_stmt_init($mysqli);
    $retorno=false;
    if ($stmt = mysqli_prepare($mysqli, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssss",$origen,$destino,$fecha,$companya,$modelo);
        $retorno = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

    }
    mysqli_close($mysqli);
    return $retorno;
}
//Funcion para modificar un destino introducido por parametro.
function modificaDestino($destino,$id){
    $mysqli = crearConexion();
    $sql = "UPDATE  vuelos SET Destino = ? WHERE id=? ";
    mysqli_stmt_init($mysqli);
    $retorno=false;
    if ($stmt = mysqli_prepare($mysqli,$sql)) {
        mysqli_stmt_bind_param($stmt, "si", $destino, $id);
        $retorno = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

    }
    mysqli_close($mysqli);
    return $retorno;
        
}
//Funcion para modificar una compañia introducido por parametro.
function modificaCompanya($companya,$id){
    $mysqli = crearConexion();
    $sql = "UPDATE  vuelos SET Companya = ? WHERE id=? ";
    mysqli_stmt_init($mysqli);
    $retorno=false;
    if ($stmt = mysqli_prepare($mysqli,$sql)) {
    mysqli_stmt_bind_param($stmt, "si", $companya, $id);
    $retorno = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    }
    mysqli_close($mysqli);
    return $retorno;
        
}
//Eliminar un vuelo.
function eliminaVuelo($id){
    $mysqli = crearConexion();
    $sql = "DELETE FROM vuelos WHERE id=?";
    $retorno=false;
    if ($stmt = mysqli_prepare($mysqli,$sql)) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        $retorno = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
    }
    mysqli_close($mysqli);
    return $retorno;
}

//Extraer vuelos (mostrar toda la tabla).
/*function extraeVuelo(){
    $mysqli = crearConexion();
    $sql = "SELECT * FROM vuelos";
    $result = mysqli_query($mysqli,$sql);
    $retorno=false;
    if($result==false){
        echo "";
    }else{
        echo "<table border='1'>";
        echo "<th>id</th><th>Origen</th><th>Destino</th><th>Fecha</th><th>Companya</th><th>Modelo</th>";
        echo "<tr>";
        while ($fila=mysqli_fetch_assoc($result)) {
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["Origen"] . "</td>";
            echo "<td>" . $fila["Destino"] . "</td>"; 
            echo "<td>" . $fila["Fecha"] . "</td>";
            echo "<td>" . $fila["Companya"] . "</td>";
            echo "<td>" . $fila["Modelo"] . "</td>";
            echo "</tr>";
        }
    }
    mysqli_close($mysqli);
    return $retorno;*/
function extraeVuelo(){
    $mysqli = crearConexion();
    $sql = "SELECT * FROM vuelos";
    $result = mysqli_query($mysqli,$sql);
    mysqli_close($mysqli);
    return $result;
}
    $vuelos = extraeVuelo();
    while ($fila=mysqli_fetch_assoc($vuelos)) {
        print_r($fila);
        echo "<br>";
    }

?>