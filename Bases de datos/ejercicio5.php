<?php
@$mysqli = mysqli_connect('localhost','root','root','agenciaviajes');
$error = mysqli_connect_errno();
if ($error!=null) {
    echo "<p>Error  $error conectando a la base de datos: ",mysqli_connect_errno($mysqli),"</p>";
    exit();

}else{
    echo "Conectando correctamente";
    echo "<br>";
    
}

    //Primero inserto una fila
    $result = mysqli_query($mysqli, "INSERT INTO `vuelos` (Origen,Destino,Fecha,Companya,Modelo) VALUES ('Sevilla','Madrid','2021-10-21 09:16:52', 'Iberia','A380')");
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
        }else {
            echo "Se han insertado ", mysqli_affected_rows($mysqli), " filas";
            echo "<br>";
            echo "El id del ultimo elemento añadido es ",mysqli_insert_id($mysqli);
        
    }
    echo "<br>";
    //Segundo actualizo una fila
    $result = mysqli_query($mysqli, " UPDATE `vuelos` SET `Origen`='Los Palacios' WHERE `id`='6'");
    if ($result==false) {
        echo "La consulta no ha funcionado correctamente";
    }else {
        echo "Se han insertado ", mysqli_affected_rows($mysqli), " filas";
        
    
    }
    echo "<br>";
    //Tercero borro una fila
    $result = mysqli_query($mysqli, "DELETE FROM `vuelos` WHERE Origen='Madrid'");
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
        }else {
            echo "Se han borrado ", mysqli_affected_rows($mysqli), " filas";
        
    }
mysqli_close($mysqli);
?>