<?php
    $servidor = "localhost";
    $basesDatos = "agenciaviajes";
    $usuario = "root";
    $pass = "root";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$basesDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo "<br>";
        $conexion->beginTransaction();
        $falloConsulta=false;
        //aquí se realiza la consulta
        $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Samuel', 'Rivera', 'Peñalosa', 'Sevilla', '623589741')";
        $numeroClientes = $conexion->exec($sql);
        $last_id1 = $conexion->lastInsertId();
        echo "Se ha añadido $numeroClientes cliente nuevo con el id: $last_id1 . <br>";
        if ($last_id1<1) {
            $falloConsulta=true;
        }

        $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Juasn', 'Rivera', 'Peñalosa', 'Sevilla', '745125421')";
        $numeroClientes = $conexion->exec($sql);
        $last_id2 = $conexion->lastInsertId();
        echo "Se ha añadido $numeroClientes cliente nuevo con el id: $last_id2 . <br>";
        if ($last_id2<1 || $last_id2==$last_id1) {
            $falloConsulta=true;
        }
        $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Pablo', 'Rivera', 'Peñalosa', 'Sevilla', '785412653')";
        $numeroClientes = $conexion->exec($sql);
        $last_id3 = $conexion->lastInsertId();
        echo "Se ha añadido $numeroClientes cliente nuevo con el id: $last_id3 . <br>";

       if ($last_id3<1 || $last_id3==$last_id2) {
           $falloConsulta=true;
       }
        if ($falloConsulta) {
            $conexion->rollBack();
            echo "fallo";
        }else {
            $conexion->commit();
        }
        $conexion=null;
    } catch (PDOexception $e) {
        echo "Conexion fallida: " . $e->getMessage();
    }
    $conn = null;
?>