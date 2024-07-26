<?php
session_start();
include("../modelo/configmodelo.php");

// Verificar si la sesión contiene el id_usuario
if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibe y limpia los datos del formulario
        $usuario = htmlspecialchars($_POST['nombre']);
        $apellido = htmlspecialchars($_POST['apellido']);
        $correo = htmlspecialchars($_POST['correo']);
        $distrito = htmlspecialchars($_POST['distrito']);
        $provincia = htmlspecialchars($_POST['provincia']);
        $codigo_postal = htmlspecialchars($_POST['codigo_postal']);
        $sobre_ti = htmlspecialchars($_POST['sobre_ti']);

        // Prepara la consulta SQL para actualizar
        $sql = "UPDATE usuarios SET usuario = ?, apellido = ?, correo = ?, distrito = ?, provincia = ?, codigo_postal = ?, sobre_ti = ? WHERE id_usuario = ?";
        $stmt = $conexion->prepare($sql);

        // Vincula los parámetros
        $stmt->bind_param("sssssssi", $usuario, $apellido, $correo, $distrito, $provincia, $codigo_postal, $sobre_ti, $id_usuario);

        // Ejecuta la consulta
        if ($stmt->execute()) {
            echo "Datos actualizados exitosamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

        // Cierra la conexión
        $stmt->close();
        $conexion->close();
    }
} else {
    echo "No se encontró el id de usuario en la sesión.";
}
?>
