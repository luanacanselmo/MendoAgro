<?php
include "../modelo/publicacionModelo.php";
//si está definida, el formulario se envío
include("cabecera.php");

if (!empty($_POST["btnregistrartrabajo"])) {
    if (
        !empty($_POST["titulo"]) && !empty($_POST["descripcion"]) && !empty($_POST["telefono"]) &&
        !empty($_POST["fechainicio"]) && !empty($_POST["fechafinal"]) && !empty($_POST["pago"]) &&
        !empty($_POST["localidadtrabajo"]) && !empty($_POST["ubitrabajo"])
    ) {
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $telefono = $_POST["telefono"];
        $fechainicio = $_POST["fechainicio"];
        $fechafinal = $_POST["fechafinal"];
        $pago = $_POST["pago"];
        $localidadtrabajo = $_POST["localidadtrabajo"];
        $ubitrabajo = $_POST["ubitrabajo"];

        // Llamar a la función insertarPersona con los datos del formulario
        insertarTrabajo($titulo, $descripcion, $telefono, $fechainicio, $fechafinal, $pago, $localidadtrabajo, $ubitrabajo);
    } else {
        echo "Algun campo está vacío";
    }
}
?>
