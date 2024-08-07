<div class="block mb-3 p-6 bg-white border border-gray-200 rounded-lg shadow">
    <figure class="flex flex-row items-center space-x-2 mb-3">
        <img class="rounded-full w-5 h-5" src="https://ui-avatars.com/api/?name=<?= $datos->nombre_usuario ?>" alt="perfil <?= $datos->nombre_usuario ?>">
        <div class="font-medium text-left text-sm"><?= $datos->nombre_usuario ?></div>
    </figure>
    <blockquote>
        <div class="mb-3">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= $datos->titulo ?></h5>
            <p class="font-normal text-gray-700"><?= $datos->descripcion ?></p>
        </div>


        <div class="border-t-[1px] border-gray-200 pt-4">
            <ul class="space-y-3">
                <li class="flex items-center flex-row space-x-[5px]">
                    <svg class="text-gray-600" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-currency-dollar">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                        <path d="M12 3v3m0 12v3" />
                    </svg>
                    <p><?= $datos->pago ?></p>
                </li>
                <li class="flex items-center flex-row space-x-[5px]">
                    <svg class="text-gray-600" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                    </svg>
                    <p><?= $datos->telefono ?></p>
                </li>
                <li class="flex items-center flex-row space-x-[5px]">
                    <svg class="text-gray-600" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clock-hour-8">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M12 12l-3 2" />
                        <path d="M12 7v5" />
                    </svg>
                    <p><?= $datos->fechainicio ?> a <?= $datos->fechafinal ?></p>
                </li>
                <li class="flex items-center flex-row space-x-[5px]">
                    <svg class="text-gray-600" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                    </svg>
                    <p><?= $datos->ubitrabajo ?>, <?= $datos->localidadtrabajo ?></p>

                </li>
            </ul>
        </div>

        <?php if (isset($_SESSION['id_usuario'])) : ?>
            <div class="mt-4 pt-4 border-t border-gray-200">
                <a href="modificararechivo.php?id_trabajo=<?= htmlspecialchars($datos->id_trabajo) ?>">Modificar</a>
                <form method="POST" action="../controlador/publicacioControlador.php" class="mt-2">
                    <input type="hidden" name="id_trabajo" value="<?= htmlspecialchars($datos->id_trabajo) ?>">
                    <button type="submit" name="btnEliminarTrabajo" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        <?php endif; ?>


        

    </blockquote>
</div>