<?php
session_start();
include("../modelo/conexion.php");

// Validar que los campos no estén vacíos
if (empty($_POST['usuario']) || empty($_POST['contrasena']) || empty($_POST['correo'])) {
    die('Todos los campos son obligatorios.');
}

$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];
$correo = $_POST['correo'];

$roll = 1;

// Escapar caracteres especiales para evitar inyección SQL
$usuario = mysqli_real_escape_string($conexion, $usuario);
$password = mysqli_real_escape_string($conexion, $password);
$correo = mysqli_real_escape_string($conexion, $correo);

$query = "INSERT INTO usuarios (usuario, password, roll, correo) VALUES ('$usuario', '$password', '$roll', '$correo')";

if (mysqli_query($conexion, $query)) {
    header("Location: ../vista/mistrabajos.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
