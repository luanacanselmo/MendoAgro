<?php
include 'conexion.php';

function getUserData($userId) {
    global $conexion;
    $sql = "SELECT usuario, apellido, correo, distrito, provincia, codigo_postal, sobre_ti FROM usuarios WHERE id_usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}
?>
