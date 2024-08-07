<?php
include '../controlador/formconfig.php';

// Suponiendo que el ID del usuario está almacenado en la sesión
$userId = $_SESSION['id_usuario'];
$userData = getUserData($userId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="vista.css" />
    <style>
        * {
            box-sizing: border-box;
        }
        .formularioconfig {
            margin: 80px;
        }
    </style>
</head>
<body>
<?php include "./componentes/nav.php"; ?>

<div class="formularioconfig">
    <form action="../controlador/formconfig.php" method="POST" enctype="multipart/form-data">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Información personal</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use una dirección permanente donde pueda recibir correo.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                        <div class="mt-2">
                            <input type="text" name="nombre" id="first-name" value="<?= htmlspecialchars($userData['usuario']) ?>" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                        <div class="mt-2">
                            <input type="text" name="apellido" id="last-name" value="<?= htmlspecialchars($userData['apellido']) ?>" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                        <div class="mt-2">
                            <input id="email" name="correo" type="email" value="<?= htmlspecialchars($userData['correo']) ?>" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Distrito</label>
                        <div class="mt-2">
                            <input type="text" name="distrito" id="city" value="<?= htmlspecialchars($userData['distrito']) ?>" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Provincia</label>
                        <div class="mt-2">
                            <input type="text" name="provincia" id="region" value="<?= htmlspecialchars($userData['provincia']) ?>" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Código postal</label>
                        <div class="mt-2">
                            <input type="text" name="codigo_postal" id="postal-code" value="<?= htmlspecialchars($userData['codigo_postal']) ?>" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-full">
                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Sobre ti</label>
                <div class="mt-2">
                    <textarea id="about" name="sobre_ti" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= htmlspecialchars($userData['sobre_ti']) ?></textarea>
                </div>
                <p class="mt-3 text-sm leading-6 text-gray-600">Escribe un texto sobre ti.</p>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
