
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "ejercicio11.php";

        creaTurista('Pepito', 'Palotea', 'Paletas', 'Sevilla', '555555555');
        echo "<br>";

        $turistas = extraeTurista(1);
        foreach($turistas as $turista) {
            echo "Nombre: " . $turista['nombre'] . " " . $turista['apellido1'] . " " . $turista['apellido2'] . " Dirección: " . $turista['direccion'] . " Teléfono: " . $turista['telefono'] . "<br>";
        }

        //$turista = extraeTuristas();
        echo "<br>";
        
        actualizaTurista(2,'Andorra','656566696');

        eliminaTurista(3);
    ?>
</body>
</html>