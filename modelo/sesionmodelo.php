<?php
include("conexion.php");

$result = mysqli_query($conexion, 'select * from usuarios'); //conexion, consulta

$ArrayUsuario = array(); //arreglo vacío

while ($row = mysqli_fetch_assoc($result)) { //fila de resultados de una consulta a la base de datos como un array asociativo.
    $ArrayUsuario[] = $row; //agrega ese array asociativo al arreglo $usuarios
    //es una forma de agregar un elemento al final de un array en PHP.
}

mysqli_free_result($result);
// Libera la memoria asociada con el resultado de la consulta
