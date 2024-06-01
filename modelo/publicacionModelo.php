<?php
include "conexion.php";

function insertarTrabajo($titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo, $id_usuario) {
    global $conexion;
    $stmt = $conexion->prepare("INSERT INTO trabajos (titulo, descripcion, telefono, fechainicio, fechafinal, pago, localidadtrabajo, ubitrabajo, fk_usuario) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo, $id_usuario);
    $stmt->execute();
    $stmt->close();
}
