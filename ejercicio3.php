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
    printf ("Informacion libro 2: <br> AUTOR: %s <br> TITULO: %s <br> GENERO: %s <br> PRECIO: %s <br> PUBLICACION: %s <br> DESCRIPCION: %s <br> " , $informacion->book[1]->author, $informacion->book[1]->title, $informacion->book[1]->genre, $informacion->book[1]->price, $informacion->book[1]->publish_date, $informacion->book[1]->description);
    
    printf ("<table border=1>");
    printf ("<tr>");
    printf ("<th>Titulo</th>" . "<th>Genero</th>" . "<th>Precio</th>") ;
    printf ("</tr>");
    
    foreach($informacion as $book){
        printf ("<tr>");
        printf ("<td>%s</td>",$book->title);
        printf ("<td>%s</td>",$book->genre);
        printf ("<td>%s</td>",$book->price);
        printf ("<tr>");
    }

    printf ("</table>");   

    $book=$informacion->addChild("book");
    $book->addAttribute("id","bk113");
    $book->addChild("author","J.R.R. TOLKIEN");
    $book->addChild("title","Las dos torres");
    $book->addChild("genre","Fantasia");
    $book->addChild("price","10.40");
    $book->addChild("publish_date","1954-11-11");
    $book->addChild("description","segundo volumen de la novela de fantasía heroica El Señor de los Anillos");
    $informacion->asXML("datos.xml");

    printf ("<table border=1>");
    printf ("<tr>");
    printf ("<th>Titulo</th>" . "<th>Genero</th>" . "<th>Precio</th>" );
    printf ("</tr>");
    
    foreach($informacion as $book){
        printf ("<tr>");
        printf ("<td>%s</td>",$book->title);
        printf ("<td>%s</td>",$book->genre);
        printf ("<td>%s</td>",$book->price);
        printf ("<tr>");
    }
    printf ("</table>");   

?>
    ?>
</body>
</html>