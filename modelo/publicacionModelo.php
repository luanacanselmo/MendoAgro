<?php
include("conexion.php");

function insertarTrabajo($fk_usuario, $titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo) {
    global $conexion;
    $stmt = $conexion->prepare("INSERT INTO trabajos (fk_usuario, titulo, descripcion, telefono, fechainicio, fechafinal, pago, localidadtrabajo, ubitrabajo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $fk_usuario, $titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo);
    $stmt->execute();
    $stmt->close();
}

function modificarTrabajo($idTrabajo, $titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo) {
    global $conexion;
    
    $sql = "UPDATE trabajos SET 
            titulo = ?, 
            descripcion = ?, 
            telefono = ?, 
            fechainicio = ?, 
            fechafinal = ?, 
            pago = ?, 
            localidadtrabajo = ?, 
            ubitrabajo = ? 
            WHERE id_trabajo = ?";
    
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssssssi", $titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo,$idTrabajo);
    
    return $stmt->execute();
}



function seleccionarTrabajo($idTrabajo) {
    global $conexion;

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " .$conexion->connect_error);
    }

    // Consulta para obtener el trabajo
    $sql = "SELECT * FROM trabajos WHERE id_trabajo = ? AND eliminado = 0";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $idTrabajo);
    $stmt->execute();
    $result = $stmt->get_result();
    $trabajo = $result->fetch_object();

    $stmt->close();
    $conexion->close();

    return $trabajo;
}



function obtenerTrabajos() {
    global $conexion;

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Consulta para obtener todos los trabajos que no están eliminados
    $sql = "SELECT * FROM trabajos WHERE eliminado = 0";
    $result = $conexion->query($sql);

    $trabajos = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $trabajos[] = $row;
        }
    }

    return $trabajos;
}
function eliminarTrabajo($idTrabajo) {
    global $conexion;

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Marca el trabajo como eliminado
    $sql = "UPDATE trabajos SET eliminado = 1 WHERE id_trabajo = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $idTrabajo);
    if ($stmt->execute()) {
        echo "Trabajo marcado como eliminado.";
    } else {
        echo "Error al actualizar el estado del trabajo.";
    }
    $stmt->close();
    $conexion->close();
}

