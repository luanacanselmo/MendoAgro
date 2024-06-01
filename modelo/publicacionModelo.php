<?php
include "conexion.php";

function insertarTrabajo($fk_usuario,$titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo) {
    global $conexion;
    $stmt = $conexion->prepare("INSERT INTO trabajos (fk_usuario,titulo, descripcion, telefono, fechainicio, fechafinal, pago, localidadtrabajo, ubitrabajo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss",$fk_usuario,$titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo);
    $stmt->execute();
    $stmt->close();
}
