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
        echo "<table border='1'>";
            $file = fopen ("locations.csv" , "a+");
            fputcsv($file, array("Sevilla" , "56.43416667,-2.387222222"));
            fclose($file);
            $file = fopen ("locations.csv" , "r");
            
            while ($datos = fgetcsv($file, 0, ",")) {
                echo "<tr>";
                    echo "<td>$datos[0]</td>";
                    echo "<td>$datos[1]</td>";
                echo "</tr>";
                

            }
        echo "</table>";
        
        fclose($file);
    
    ?>
</body>
</html>