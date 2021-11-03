<?php
    try {
        //FUNCION PARA CONECTAR A LA BASE DE DATOS
        function conexion (){
            $servidor = "localhost";
            $basesDatos = "agenciaviajes";
            $usuario = "root";
            $pass = "root";
            $conn = new PDO("mysql:host=$servidor;dbname=$basesDatos", $usuario, $pass);
            //echo "Conectado correctamente";
            return $conn;
        }

        //FUNCION PARA INSERTAR UN TURISTA
        function creaTurista($nombre, $apellido1, $apellido2, $direccion, $telefono){
            $conn = conexion();
            $insert=$conn->prepare("INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES (?,?,?,?,?)");
            $insert->bindParam(1, $nombre);
            $insert->bindParam(2, $apellido1);
            $insert->bindParam(3, $apellido2);
            $insert->bindParam(4, $direccion);
            $insert->bindParam(5, $telefono);
            $insert->execute();
            $last_id = $conn->lastInsertId();
            $conn = null;
            return $last_id;
        }


        //FUNCION PARA EXTRAER TURISTA POR ID
        function extraeTurista($id){
            $conn = conexion();
            $consulta = "SELECT * FROM turista WHERE id = ?";
            $consulta = $conn->prepare($consulta);
            $consulta->bindParam(1, $id);
            $consulta->execute();
            $turista=$consulta->fetchAll();
            return $turista;
        }

        //FUNCION PARA EXTRAER TURISTA EN UN ARRAY
        function extraeTuristas(){
            $conn = conexion();
            $consulta=$conn->query("SELECT * FROM turista");
            $turistas = $consulta->fetchAll(); 
            return var_dump($turistas);
        }


        //FUNCION QUE ACTUALIZA LA DIRECCION DE UN TURISTA DEPENDIENDO DE SU NUMERO DE TLF
        function actualizaTurista($id, $direccion, $telefono){
            $conn = conexion();
            $actualizar=$conn->prepare("UPDATE turista SET direccion=?,telefono=? WHERE id=?");
            $actualizar->bindParam(1, $direccion);
            $actualizar->bindParam(2, $telefono);
            $actualizar->bindParam(3, $id);
            $actualizar->execute();
            $retorno = $actualizar->execute();
            return $retorno;
        }

        //FUNCION PARA ELIMINAR TURISTA

        function eliminaTurista($id) {
            $conn = conexion();
            $eliminar = $conn->prepare("DELETE FROM turista WHERE id=?");
            $eliminar->bindParam(1, $id);
            $eliminar->execute();
            $retorno = $eliminar->execute();
            return $retorno;
        }
    } catch (PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    }

?> 