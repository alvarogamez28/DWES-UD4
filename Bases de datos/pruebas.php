<?php
//MOSTRAR DATOS DE LA TABLA
/*if ($result==false) {
    echo "La consulta no ha funcionado correctamente.";
    
}else {
    echo "<table border='1'>";
    echo "<th>id</th><th>Origen</th><th>Destino</th><th>Fecha</th><th>Companya</th><th>Modelo</th>";
    echo "<tr>";
    while ($fila=mysqli_fetch_assoc($result)) {
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["Destino"] . "</td>";
        echo "<td>" . $fila["Origen"] . "</td>";
        echo "<td>" . $fila["Fecha"] . "</td>";
        echo "<td>" . $fila["Companya"] . "</td>";
        echo "<td>" . $fila["Modelo"] . "</td>";
        echo "</tr>";
    }
}
//CONSULTA DE TABLAS
$result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
$result2 = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
$result3 = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
 //CONSULTA PARA ACTUALIZAR
 @$mysqli = mysqli_connect('localhost','root','root','agenciaviajes');
 $error = mysqli_connect_errno();
 if ($error!=null) {
 echo "<p>Error  $error conectando a la base de datos: ",mysqli_connect_errno($mysqli),"</p>";
 exit();
 }
 $result = mysqli_query($mysqli, " UPDATE `vuelos` SET `Origen`='Los Palacios' WHERE `id`='6'");
 if ($result==false) {
     echo "La consulta no ha funcionado correctamente";
 }else {
     echo "Se han insertado ", mysqli_affected_rows($mysqli), "filas";
 }


//CONSULTA PARA BORRAR
@$mysqli = mysqli_connect('localhost','root','root','agenciaviajes');
        $error = mysqli_connect_errno();
        if ($error!=null) {
        echo "<p>Error  $error conectando a la base de datos: ",mysqli_connect_errno($mysqli),"</p>";
        exit();
        }
        $result = mysqli_query($mysqli, "DELETE FROM `vuelos` WHERE Origen='Sevilla'");
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
        }else {
            echo "Se han borrado ", mysqli_affected_rows($mysqli), "filas";
        
    }

//CONSULTAR PARA INSERTAR
@$mysqli = mysqli_connect('localhost','root','root','agenciaviajes');
        $error = mysqli_connect_errno();
        if ($error!=null) {
        echo "<p>Error  $error conectando a la base de datos: ",mysqli_connect_errno($mysqli),"</p>";
        exit();
        }
        $result = mysqli_query($mysqli, "INSERT INTO `vuelos` (Origen,Destino,Fecha,Companya,Modelo) VALUES ('Sevilla','Madrid','2021-10-21 09:16:52', 'Iberia','A380')");
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
        }else {
            echo "Se han insertado ", mysqli_affected_rows($mysqli), "filas";
            echo "<br>";
            echo "El id del ultimo elemento añadido es ",mysqli_insert_id($mysqli);
        
    }
//CONSULTAR PARA ACTUALIZACIÓN
@$mysqli = mysqli_connect('localhost','root','root','agenciaviajes');
        $error = mysqli_connect_errno();
        if ($error!=null) {
        echo "<p>Error  $error conectando a la base de datos: ",mysqli_connect_errno($mysqli),"</p>";
        exit();
        }
        $result = mysqli_query($mysqli, " UPDATE `vuelos` SET `Origen`='Los Palacios' WHERE `id`='6'");
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
        }else {
            echo "Se han insertado ", mysqli_affected_rows($mysqli), "filas";
            
        
    }
//PARA ACTUALIZAR UNA CELDA EN ESPECIFICO
$origen="Sevilla";
$id=6;
$sql="UPDATE vuelos SET Origen=? WHERE id=?";
$consulta=mysqli_stmt_init($mysqli);
if ($stmt = mysqli_prepare($mysqli,$sql)) {
    mysqli_stmt_bind_param($stmt, "si", $origen, $id);
    mysqli_stmt_execute($stmt);
    //fetch date here
    mysqli_stmt_close($stmt);

}

//PARA GUARDAR INFORMACION EN UNA VARIABLE
$origen="Sevilla";
$id=6;
$sql="SELECT * FROM vuelos WHERE Origen=? AND id=?";
$consulta=mysqli_stmt_init($mysqli);
if ($stmt = mysqli_prepare($mysqli,$sql)) {
    mysqli_stmt_bind_param($stmt, "si", $origen, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt,$id,$origen,$destino,$fecha,$companya,$modelo);
        while (mysqli_stmt_fetch($stmt)) {
            print "El vuelo con origen $origen y destino $destino tiene fecha para $fecha con la compañia $companya y modelo de avion número $modelo";
        }
    mysqli_stmt_close($stmt);

}*/
    //PHP Data Objects (PDO)!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    /*$servidor="localhost";
    $baseDatos="agenciaviajes";
    $usuario="developer";
    $pass="developer";
    try {
        $conn = new PDO("mysql:host=$servidor;bdname=$baseDatos",$usuario, $pass);
        echo "Conectado correctamente";
    } catch (PDOException $e) {
        echo "Connectin fallida: " . $e->getMessage();
    }
    $conn=null;
    
    //Consultas de obtención. SELECT
    $servidor = "localhost";
    $basesDatos = "agenciaviajes";
    $usuario = "root";
    $pass = "root";
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$basesDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo "<br>";
        //consulta de obtencion SELECT

        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);
        while ($turista = $turistas->fetch()) {
            echo "El turista de nombre " . $turista['nombre'] . " " . $turista['apellido1'] . " " . $turista['apellido2'] . " es de " . $turista['direccion'] . "<br>"; 
        }
    } catch (PDOexception $e) {
        echo "Conexion fallida: " . $e->getMessage();
    }
    $conn = null;
    */
?>