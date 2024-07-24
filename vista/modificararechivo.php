<?php
session_start();
include("../modelo/publicacionModelo.php");

if (!isset($_GET['id_trabajo']) || !is_numeric($_GET['id_trabajo'])) {
    die("ID de trabajo no proporcionado o inválido.");
}

$idTrabajo = (int)$_GET['id_trabajo'];

$trabajo = seleccionarTrabajo($idTrabajo);

if (!$trabajo) {
    die("No se encontró el trabajo especificado.");
}

// Guardar el trabajo en la sesión
$_SESSION['trabajo'] = $trabajo;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Trabajo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <?php include "./componentes/nav.php"; ?>
    
    <section class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center mb-6">Modificar Trabajo</h1>
        
        <form action="../controlador/publicacioControlador.php" method="POST" class="space-y-4">
            <input type="hidden" name="id_trabajo" value="<?php echo htmlspecialchars($trabajo->id_trabajo); ?>">
            
            <div>
                <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" name="titulo" id="titulo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="<?php echo htmlspecialchars($trabajo->titulo); ?>">
            </div>

            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="descripcion" id="descripcion" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"><?php echo htmlspecialchars($trabajo->descripcion); ?></textarea>
            </div>

            <div>
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="<?php echo htmlspecialchars($trabajo->telefono); ?>">
            </div>

            <div>
                <label for="fechainicio" class="block text-sm font-medium text-gray-700">Fecha Inicio</label>
                <input type="date" name="fechainicio" id="fechainicio" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="<?php echo htmlspecialchars($trabajo->fechainicio); ?>">
            </div>

            <div>
                <label for="fechafinal" class="block text-sm font-medium text-gray-700">Fecha Final Estimada</label>
                <input type="date" name="fechafinal" id="fechafinal" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="<?php echo htmlspecialchars($trabajo->fechafinal); ?>">
            </div>

            <div>
                <label for="pago" class="block text-sm font-medium text-gray-700">Pago Estimado</label>
                <input type="text" name="pago" id="pago" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="<?php echo htmlspecialchars($trabajo->pago); ?>">
            </div>

            <div>
                <label for="localidadtrabajo" class="block text-sm font-medium text-gray-700">Localidad del Trabajo</label>
                <input type="text" name="localidadtrabajo" id="localidadtrabajo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="<?php echo htmlspecialchars($trabajo->localidadtrabajo); ?>">
            </div>

            <div>
                <label for="ubitrabajo" class="block text-sm font-medium text-gray-700">Ubicación del Trabajo</label>
                <input type="text" name="ubitrabajo" id="ubitrabajo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="<?php echo htmlspecialchars($trabajo->ubitrabajo); ?>">
            </div>

            <div>
                <button type="submit" name="actualizar" value="ok" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Actualizar
                </button>
            </div>
        </form>
    </section>
</body>
</html>
