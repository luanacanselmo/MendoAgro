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
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= $datos->titulo ?></h5>
            <p class="font-normal text-gray-700"><?= $datos->descripcion ?></p>
        </blockquote>
        <div class="flex justify-end">
            <button class="text-gray-700 text-sm flex items-center">Ver más<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-down">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M16 15l-4 4" />
                    <path d="M8 15l4 4" />
                </svg></button>
        </div>
        <!-- <figure class="flex items-center justify-center ">
        <figure/> -->


        <!-- <p><?= $datos->descripcion ?></p>
        <p><?= $datos->pago ?></p>
        <p><?= $datos->telefono ?></p>
        <p><?= $datos->fechainicio ?></p>
        <p><?= $datos->fechafinal ?></p>
        <p><?= $datos->localidadtrabajo ?></p>
        <p><?= $datos->ubitrabajo ?></p> -->
    </div>
<?php }
?>