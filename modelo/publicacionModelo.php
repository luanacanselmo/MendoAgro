<?php
include "conexion.php";

function insertarTrabajo($fk_usuario,$titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo) {
    global $conexion;
    $stmt = $conexion->prepare("INSERT INTO trabajos (fk_usuario,titulo, descripcion, telefono, fechainicio, fechafinal, pago, localidadtrabajo, ubitrabajo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss",$fk_usuario,$titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo);
    $stmt->execute();
    $stmt->close();
}


// function seleccionarTrabajo($id) {
//     global $conexion;
//     $stmt = $conexion->prepare("SELECT * FROM trabajos WHERE id_trabajo = ?");
//     $stmt->bind_param("i", $id);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     $trabajo = $result->fetch_object();
//     $stmt->close();
//     return $trabajo;
// }

function actualizarTrabajo($fk_usuario, $titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo, $id) {
    global $conexion;
    $stmt = $conexion->prepare("UPDATE trabajos SET fk_usuario = ?, titulo = ?, descripcion = ?, telefono = ?, fechainicio = ?, fechafinal = ?, pago = ?, localidadtrabajo = ?, ubitrabajo = ? WHERE id_trabajo = ?");
    $stmt->bind_param("ssssssssss", $fk_usuario, $titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo, $id);
    $stmt->execute();
    $stmt->close();
}

// function eliminarTrabajo($id) {
//     global $conexion;
//     $stmt = $conexion->prepare("DELETE FROM trabajos WHERE id_trabajo = ?");
//     $stmt->bind_param("i", $id);
//     $stmt->execute();
//     $stmt->close();
// }
?>
