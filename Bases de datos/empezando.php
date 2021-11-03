<?php
/*PARA CONECTARME A LA BASE DE DATOS*/
@$mysqli = mysqli_connect('localhost','developer','developer','agenciaviajes');
$error = mysqli_connect_errno();
if ($error!=null) {
    echo "<p>Error  $error conectando a la base de datos: ",mysqli_connect_errno($mysqli),"</p>";
    exit();
 
}else{
    echo "Conectando correctamente";
    echo "<br>";
    
}/*Consulta*/
$result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
/*MOSTRAR DATOS DE LA TABLA*/
if ($result==false) {
    echo "La consulta no ha funcionado correctamente.";
    
}else{
    while ($fila=mysqli_fetch_assoc($result)) {
        print_r($fila);
        echo "<br>";
    }
}

/*var_dump($result);*/
mysqli_close($mysqli);
?>