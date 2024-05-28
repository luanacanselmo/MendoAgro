<?php
include("../modelo/conexion.php");

$sql = $conexion->query("Select * from trabajos");
while ($datos = $sql->fetch_object()) { ?>
    <div class="block mb-3 p-6 bg-white border border-gray-200 rounded-lg shadow">
        <figure class="flex flex-row items-center space-x-2 mb-3">
            <img class="rounded-full w-5 h-5" src="https://ui-avatars.com/api/?name=Agustin+Suarez" alt="profile picture">
            <div class="font-medium text-left text-sm">Agustín Suarez</div>
        </figure>
        <blockquote>
            <div class="mb-3">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= $datos->titulo ?></h5>
                <p class="font-normal text-gray-700"><?= $datos->descripcion ?></p>
            </div>
            <div class="border-t-2 border-gray-200">
                <ul>
                    <li>
                        <p class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-currency-dollar">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                <path d="M12 3v3m0 12v3" />
                            </svg> <?= $datos->pago ?></p>
                    </li>
                    <li>
                        <p class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            </svg> <?= $datos->telefono ?></p>
                    </li>
                    <li>
                        <p class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clock-hour-8">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M12 12l-3 2" />
                                <path d="M12 7v5" />
                            </svg> <?= $datos->fechainicio ?> a <?= $datos->fechafinal ?></p>
                    </li>
                    <li>
                        <p class="flex">Ubicación: <?= $datos->ubitrabajo ?>, <?= $datos->localidadtrabajo ?></p>
                    </li>
                </ul>
            </div>
        </blockquote>
    </div>
<?php }
?>