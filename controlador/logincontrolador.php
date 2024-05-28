<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/sesionmodelo.php");
include("seguridad.php");

$usuario_valido = false;

// Validar que los campos no estén vacíos
if (empty($_POST["usuario"]) || empty($_POST["contrasena"])) {
    header("Location: ../vista/login.php?error=Todos los campos son obligatorios.");
    exit();
}

$usuario = $_POST["usuario"];
$password = $_POST["contrasena"];

// Escapar caracteres especiales para evitar inyección SQL
$usuario = mysqli_real_escape_string($conexion, $usuario);
$password = mysqli_real_escape_string($conexion, $password);

foreach ($usuarios as $usuario_registrado) {
    if ($usuario == $usuario_registrado['usuario'] && $password == $usuario_registrado['password']) {
        $_SESSION["autentificado"] = "1";
        $_SESSION["user"] = $usuario;
        $_SESSION["pass"] = $password;
        
        if ($usuario_registrado['roll'] == '1') {
            header("Location: ../vista/subirTrabajo.php");
        } else {
            header("Location: ../index.php");
        }
        
        $usuario_valido = true;
        break;
    }
}

if (!$usuario_valido) {
    header("Location: ../vista/login.php?error=Usuario o contraseña incorrectos.");
    exit();
}
?>
