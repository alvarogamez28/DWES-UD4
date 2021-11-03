<?php
@$mysqli = mysqli_connect('localhost','root','root','agenciaviajes');
$error = mysqli_connect_errno();
if ($error!=null) {
echo "<p>Error  $error conectando a la base de datos: ",mysqli_connect_errno($mysqli),"</p>";
exit();
}
$origen="Sevilla";
$id=6;
$sql="SELECT * FROM vuelos WHERE Origen=? AND id=?";
$consulta=mysqli_stmt_init($mysqli);
if ($stmt = mysqli_prepare($mysqli,$sql)) {
    mysqli_stmt_bind_param($stmt, "si", $origen, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt,$id,$origen,$destino,$fecha,$companya,$modelo);
        while (mysqli_stmt_fetch($stmt)) {
            print "El vuelo con origen $origen y destino $destino tiene fecha para $fecha con la compañia $companya y modelo de avion número $modelo";
        }
    mysqli_stmt_close($stmt);

}
mysqli_close($mysqli);

?>