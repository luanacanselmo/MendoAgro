<?php session_start();

include("../modelo/conexion.php");
include("../modelo/sesionmodelo.php");

$usuario_valido = false;


foreach ($ArrayUsuario as $usuario) {
    if ($_POST["usuario"] == $usuario['usuario'] && $_POST["contrasena"] == $usuario['password']) {
        $_SESSION["autentificado"] = "1";
        $_SESSION["user"] = $_POST["usuario"];
        $_SESSION["id_usuario"] =  $usuario['id_usuario'];
        
        if ($usuario['roll'] == '1') {
            header("Location: ../vista/subirTrabajo.php");
        } else {
            header("Location: ../index.php");
        }
        
        
        $usuario_valido = true;
        break;
    }
}
if (!$usuario_valido) {
    header("location:  ../vista/login.php?error=Usuario o contraseña incorrectos.");
}