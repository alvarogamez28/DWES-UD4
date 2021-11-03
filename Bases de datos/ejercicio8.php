<?php
    $servidor = "localhost";
    $basesDatos = "agenciaviajes";
    $usuario = "root";
    $pass = "root";
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$basesDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo "<br>";
        echo "<h3>FETCH_ASSOC</h3>";
        echo "<table border='1'>";
        echo "<th>ID</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Direccion</th>";
        echo "<tr>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);
        while ($turista=$turistas->fetch(PDO::FETCH_ASSOC)) {
            echo "<td>" . $turista["id"] . "</td>";
            echo "<td>" . $turista["nombre"] . "</td>";
            echo "<td>" . $turista["apellido1"] . "</td>";
            echo "<td>" . $turista["apellido2"] . "</td>";
            echo "<td>" . $turista["direccion"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<h3>FETCH_NUM</h3>";
        echo "<table border='1'>";
        echo "<th>ID</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Direccion</th>";
        echo "<tr>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);
        while ($turista=$turistas->fetch(PDO::FETCH_NUM)) {
            echo "<td>" . $turista[0] . "</td>";
            echo "<td>" . $turista[1] . "</td>";
            echo "<td>" . $turista[2] . "</td>";
            echo "<td>" . $turista[3] . "</td>";
            echo "<td>" . $turista[4] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<h3>FETCH_BOTH</h3>";
        echo "<table border='1'>";
        echo "<th>ID</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Direccion</th>";
        echo "<tr>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);
        while ($turista=$turistas->fetch(PDO::FETCH_BOTH)) {
            printf("<td>%s</td>", $turista['id'] ) ;
            printf("<td>%s</td>", $turista['nombre'] ) ;
            printf("<td>%s</td>", $turista['apellido1'] ) ;
            printf("<td>%s</td>", $turista['apellido2'] ) ;
            printf("<td>%s</td>", $turista['direccion'] ) ;
            echo "</tr>";
        }
        echo "</table>";
        echo "<h3>FETCH_OBJ</h3>";
        echo "<table border='1'>";
        echo "<th>ID</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Direccion</th>";
        echo "<tr>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);
        while ($turista=$turistas->fetch(PDO::FETCH_OBJ)) {
            echo "<td>" . $turista-> id . "</td>";
            echo "<td>" . $turista-> nombre . "</td>";
            echo "<td>" . $turista-> apellido1 . "</td>";
            echo "<td>" . $turista-> apellido2 . "</td>";
            echo "<td>" . $turista-> direccion . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<h3>FETCH_LAZY</h3>";
        echo "<table border='1'>";
        echo "<th>ID</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Direccion</th>";
        echo "<tr>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);
        while ($turista=$turistas->fetch(PDO::FETCH_LAZY)) {
            echo "<td>" . $turista-> id . "</td>";
            echo "<td>" . $turista-> nombre . "</td>";
            echo "<td>" . $turista-> apellido1 . "</td>";
            echo "<td>" . $turista-> apellido2 . "</td>";
            echo "<td>" . $turista[4] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<h3>FETCH_BOUND</h3>";
        echo "<table border='1'>";
        echo "<th>ID</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Direccion</th>";
        echo "<tr>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);
        $turistas->execute();
        $turistas->bindColumn(1, $id);
        $turistas->bindColumn(2, $nombre);
        $turistas->bindColumn(3, $apellido1);
        $turistas->bindColumn(4, $apellido2);
        $turistas->bindColumn(5, $direccion);
        while ($turista=$turistas->fetch(PDO::FETCH_BOUND)) {
            echo "<td>" . $id . "</td>";
            echo "<td>" . $nombre . "</td>";
            echo "<td>" . $apellido1 . "</td>";
            echo "<td>" . $apellido2 . "</td>";
            echo "<td>" . $direccion . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOexception $e) {
        echo "Conexion fallida: " . $e->getMessage();
    }
    $conn = null;
?>