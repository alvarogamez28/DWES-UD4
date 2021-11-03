<?php
    @$mysqli = mysqli_connect('localhost','root','root','agenciaviajes');
    $error = mysqli_connect_errno();
    if ($error!=null) {
        echo "<p>Error  $error conectando a la base de datos: ",mysqli_connect_errno($mysqli),"</p>";
        exit();
    
    }else{
        echo "Conectando correctamente";
        echo "<br>";
        
    }/*Consulta*/
    $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
    $result2 = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
    $result3 = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
    /*MOSTRAR DATOS DE LA TABLA*/
    if ($result==false) {
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
        echo "</table>";

        echo "<table border='1'>";
        echo "<th>id</th><th>Origen</th><th>Destino</th><th>Fecha</th><th>Companya</th><th>Modelo</th>";
        echo "<tr>";
        while ($fila2=mysqli_fetch_object($result2)) {
            echo "<tr>";
            echo "<td>" . $fila2-> id . "</td>";
            echo "<td>" . $fila2-> Destino . "</td>";
            echo "<td>" . $fila2-> Origen . "</td>";
            echo "<td>" . $fila2-> Fecha . "</td>";
            echo "<td>" . $fila2-> Companya . "</td>";
            echo "<td>" . $fila2-> Modelo . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<table border='1'";
        echo "";
        echo "<tr>";
        while ($fila2=mysqli_fetch_object($result2)) {
            echo "<td>" . $fila2-> id . "</td>";
            echo "<td>" . $fila2-> Destino . "</td>";
            echo "<td>" . $fila2-> Origen . "</td>";
            echo "<td>" . $fila2-> Fecha . "</td>";
            echo "<td>" . $fila2-> Companya . "</td>";
            echo "<td>" . $fila2-> Modelo . "</td>";
            echo "</tr>";
        }
        echo "</table>";

       
    }

    mysqli_close($mysqli);
?>