<?php
session_start();
include("modelo/conexion.php");
include("modelo/sesionmodelo.php");
include("seguridad.php");
$usuario_valido = false;


foreach ($usuarios as $usuario) {
    if ($_POST["usuario"] == $usuario['usuario'] && $_POST["contrasena"] == $usuario['password']) {
        $_SESSION["autentificado"] = "1";
        $_SESSION["user"] = $_POST["usuario"];
        $_SESSION["pass"] = $_POST["contrasena"];
        
        if ($usuario['roll'] == '1') {
            header("location: vista/subirTrabajo.php");
        } else{
            header("location: index.php");

        }
        
        
        $usuario_valido = true;
        break;
    }
}if (!$usuario_valido) {
    echo ("error pa");
}
