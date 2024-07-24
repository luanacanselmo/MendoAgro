<?php
session_start();
include "../modelo/publicacionModelo.php";

if (!empty($_POST["btnregistrartrabajo"])) {
    if (
        !empty($_POST["titulo"]) && !empty($_POST["descripcion"]) && !empty($_POST["telefono"]) &&
        !empty($_POST["fechainicio"]) && !empty($_POST["fechafinal"]) && !empty($_POST["pago"]) &&
        !empty($_POST["localidadtrabajo"]) && !empty($_POST["ubitrabajo"])
    ) {
        $fk_usuario = $_SESSION["id_usuario"];
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $telefono = $_POST["telefono"];
        $fechainicio = $_POST["fechainicio"];
        $fechafinal = $_POST["fechafinal"];
        $pago = $_POST["pago"];
        $localidadtrabajo = $_POST["localidadtrabajo"];
        $ubitrabajo = $_POST["ubitrabajo"];

        insertarTrabajo($fk_usuario, $titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo);
        header('Location: ../vista/mistrabajos.php'); // Redirige después de insertar
        exit();
    } else {
        echo "Algún campo está vacío";
    }
}
if (!empty($_GET["id_trabajo"])) {
    $idTrabajo = $_GET["id_trabajo"];
    $registroSeleccionado = seleccionarTrabajo($idTrabajo);

    if ($registroSeleccionado) {
        $_SESSION['trabajo'] = $registroSeleccionado;
        header('Location: ../vista/modificararechivo.php');
        exit();
    } else {
        echo "No se encontró el trabajo.";
    }
}

if (isset($_POST['actualizar']) && $_POST['actualizar'] == 'ok') {
    if (!isset($_POST['id_trabajo']) || !is_numeric($_POST['id_trabajo'])) {
        die("ID de trabajo no proporcionado o inválido.");
    }

    $idTrabajo = (int)$_POST['id_trabajo'];
    $fk_usuario = $_SESSION['id_usuario']; // Asegúrate de que el ID del usuario esté en la sesión

    if (!$idTrabajo || !$fk_usuario) {
        die("ID de trabajo o usuario no proporcionado.");
    }

    // Recoger los datos del formulario
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $telefono = $_POST['telefono'];
    $fechainicio = $_POST['fechainicio'];
    $fechafinal = $_POST['fechafinal'];
    $pago = $_POST['pago'];
    $localidadtrabajo = $_POST['localidadtrabajo'];
    $ubitrabajo = $_POST['ubitrabajo'];

    // Llamar a la función para modificar el trabajo
    $resultado = modificarTrabajo($idTrabajo, $titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo);

    if ($resultado) {
        header("Location: ../vista/mistrabajos.php?mensaje=actualizado");
        exit();
    } else {
        echo "Error al actualizar el trabajo.";
    }
} 


if (isset($_POST['btnEliminarTrabajo'])) {
    if (isset($_POST['id_trabajo'])) {
        $id_trabajo = $_POST['id_trabajo'];
        eliminarTrabajo($id_trabajo);
        header('Location: ../vista/mistrabajos.php'); // Redirige a la página de trabajos
        exit();
    } else {
        echo "No se recibió el ID del trabajo.";
    }
}

?>