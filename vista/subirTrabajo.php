<?php
include("../controlador/publicacioControlador.php")?>

<?php include "./componentes/nav.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Trabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vista.css" />
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body>

    <section class="sectio1">
        <br>
        <h1 class="text-center p-3">Nuevo Trabajo</h1>
        <div class="container-fluid row">
            <form class="col-5 p-3" action="../controlador/publicacioControlador.php" method="POST">
                <div class="part1">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="hidden" name="id_trabajo" value="<?php echo isset($_SESSION['trabajo']) ? $_SESSION['trabajo']->idTrabajo : ''; ?>">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Título</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo isset($_SESSION['trabajo']) ? $_SESSION['trabajo']->titulo : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo isset($_SESSION['trabajo']) ? $_SESSION['trabajo']->descripcion : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo isset($_SESSION['trabajo']) ? $_SESSION['trabajo']->telefono : ''; ?>">
                    </div>
                </div>
                <div class="part2">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha Inicio</label>
                        <input type="date" class="form-control" name="fechainicio" id="fechainicio" value="<?php echo isset($_SESSION['trabajo']) ? $_SESSION['trabajo']->fechainicio : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha Final Estimada</label>
                        <input type="date" class="form-control" name="fechafinal" id="fechafinal" value="<?php echo isset($_SESSION['trabajo']) ? $_SESSION['trabajo']->fechafinal : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pago estimado</label>
                        <input type="text" class="form-control" name="pago" id="pago" value="<?php echo isset($_SESSION['trabajo']) ? $_SESSION['trabajo']->pago : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Localidad del Trabajo</label>
                        4 <input type="text" class="form-control" name="localidadtrabajo" id="localidadtrabajo" value="<?php echo isset($_SESSION['trabajo']) ? $_SESSION['trabajo']->localidadtrabajo : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ubicación del Trabajo</label>
                        <input type="text" class="form-control" name="ubitrabajo" id="ubitrabajo" value="<?php echo isset($_SESSION['trabajo']) ? $_SESSION['trabajo']->ubitrabajo : ''; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnregistrartrabajo" value="ok">Subir</button>
                </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<?php
unset($_SESSION['trabajo']); // Limpiar la sesión después de llenar el formulario
?>