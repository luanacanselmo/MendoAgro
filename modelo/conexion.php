<?php
$conexion = new mysqli("localhost:3307", "root", "", "mendoagro2");

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
?>