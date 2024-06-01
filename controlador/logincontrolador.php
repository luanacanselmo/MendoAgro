<?php
session_start(); // Iniciamos la sesión

include("../modelo/conexion.php"); // Incluimos el archivo de conexión a la base de datos

// Validamos que se hayan enviado los datos de usuario y contraseña
if (empty($_POST["usuario"]) || empty($_POST["contrasena"])) {
    header("Location: ../vista/login.php?error=Todos los campos son obligatorios.");
    exit();
}

$usuario = $_POST["usuario"];
$password = $_POST["contrasena"];

// Escapamos caracteres especiales para evitar inyección SQL
$usuario = mysqli_real_escape_string($conexion, $usuario);
$password = mysqli_real_escape_string($conexion, $password);

// Consultamos la base de datos para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$resultado = mysqli_query($conexion, $sql);



if ($fila = mysqli_fetch_assoc($resultado)) {
    // Credenciales válidas, creamos la sesión
    $_SESSION["autentificado"] = true;
    $_SESSION["usuario"] = $fila['usuario'];
    $_SESSION["rol"] = $fila['roll'];
    $_SESSION["id_usuario"] = $row['id_usuario'];
    $id_usuario = $_SESSION['id_usuario']; // Obtener el ID del usuario de la sesión

    // Redirigimos según el rol del usuario
    if ($fila['roll'] == '1') {
        header("Location: ../vista/subirTrabajo.php");
    } else {
        header("Location: ../index.php");
    }
} else {
    // Credenciales incorrectas, redirigimos al login con un mensaje de error
    header("Location: ../vista/login.php?error=Usuario o contraseña incorrectos.");
    exit();
}
?>
