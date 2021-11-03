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
    $informacion = simplexml_load_file("ejercicio3.xml");
    printf("Informacion sobre el libro 2:<br> AUTOR: %s <br> TÍTULO: %s <br> GÉNERO: %s <br> PRECIO: %s <br> FECHA PUBLICACIÓN: %s <br> DESCRIPCIÓN: %s", $informacion->book[1]->author , $informacion->book[1]->title, $informacion->book[1]->genre, $informacion->book[1]->price, $informacion->book[1]->publis_date, $informacion->book[1]->description);
    
    ?>
</body>
</html>