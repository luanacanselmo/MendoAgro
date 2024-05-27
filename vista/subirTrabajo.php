<?php include("cabecera.php"); 
 include("../controlador/publicacioControlador.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vista.css" />

</head>

<body>
<br><br>
<section class="sectio1">
    <br>
    <h1 class="text-center p-3">Nuevo Trabajo </h1>
    <div class="container-fluid row">
    

        <form class="col-5 p-3" method="POST">

          <div class="part1">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID</label>
                
                <input type="text" required readonly class="form-control"  name="id_publicacion" id="id_publicacion" placeholder="ID">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" >
            </div>
        </div>    
        <div class="part2">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha Inicio</label>
                <input type="text" class="form-control" name="fechainicio" id="fechainicio" >
           
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha Final Estimda</label>
                <input type="text" class="form-control" name="fechafinal" id="fechafinal" >
           
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pago estimado</label>
                <input type="text" class="form-control" name="pago" id="pago">
           
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">localidad del Trabajo</label>
                <input type="text" class="form-control" name="localidadtrabajo" id="localidadtrabajo" >
           
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ubicación del Trabajo</label>
                <input type="text" class="form-control" name="ubitrabajo" id="ubitrabajo" >
           
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrartrabajo" value="ok">Subir</button>
            <!-- <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            <button type="submit" class="btn btn-warning" name="accion" value="Modificar">Modificar</button>
            <button type="submit" name="accion3" value="Eliminar" class="btn btn-small btn-danger">Eliminar</button> -->

        </div>
        </form>
  </section>    
    <!-- <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">DNI</th>
                        <th scope="col">FECHA DE NACIMIENTO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $conexion->query("Select * from persona");
                    //fetch_object() se utiliza para 
                    //obtener la siguiente fila de resultados como un objeto.
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id //abreviatura de echo?></td> 
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellido ?></td>
                            <td><?= $datos->dni ?></td>
                            <td><?= $datos->fecha_nac ?></td>
                            <td><?= $datos->correo ?></td>
                            <td>
                                <form method="POST">
                                
                                    <input type="hidden" name="txtID" value="<?= $datos->id ?>" />
                                    <button type="submit" name="accion2" value="Seleccionar" class="btn btn-small btn-warning">Seleccionar</button>

                                </form>
                            </td>
                        </tr>
                    <?php }
                    ?>


                </tbody>
            </table>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>

</html>