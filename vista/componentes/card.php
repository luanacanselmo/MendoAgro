<?php
include("../modelo/conexion.php");

$sql = $conexion->query("Select * from trabajos");
while ($datos = $sql->fetch_object()) { ?>
    <div class="block mb-3 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-1000">
        <figure class="flex flex-row items-center space-x-2 mb-3">
            <img class="rounded-full w-5 h-5" src="https://ui-avatars.com/api/?name=Agustin+Suarez" alt="profile picture">
            <div class="font-medium text-left text-sm">Agustín Suarez</div>
        </figure>
        <blockquote>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= $datos->titulo ?></h5>
            <p class="font-normal text-gray-700"><?= $datos->descripcion ?></p>
        </blockquote>
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