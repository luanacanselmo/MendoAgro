<?php
include "conexion.php";

function insertarTrabajo($titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo) {
    global $conexion;
    $stmt = $conexion->prepare("INSERT INTO trabajos (titulo, descripcion, telefono, fechainicio, fechafinal, pago, localidadtrabajo, ubitrabajo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo);
    $stmt->execute();
    $stmt->close();
}
