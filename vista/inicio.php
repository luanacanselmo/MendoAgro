<?PHP
session_start();
?>
<!DOCTYPE html>
<link>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="css/inicio.css" />

</head>

<body>

    <?php include "./componentes/nav.php"; ?>
    <section class="containergrnd">
        <div class="container">
            <h1>Bienvenido <?php echo (($_SESSION['user'])) ?>
                </h1>
            <p>Administra tus trabajos</p>
        </div>
    </section>
    <div class="iniciovista">
        <div class="op1" id="cuadro" onclick="location.href='mistrabajos.php'">
            <img src="../Icon-MendoAgro/scissor.svg">
            <p>Editar trabajo</p>
        </div>

        <div class="op2" id="cuadro" onclick="location.href='mistrabajos.php'">
            <img src="../Icon-MendoAgro/user.svg">
            <p>Ver mis trabajos</p>

        </div>

        <div class="op3" id="cuadro" onclick="location.href='subirTrabajo.php'">

            <img src="../Icon-MendoAgro/arrow-up.svg"><br>
            <p>Subir trabajo</p>

        </div>
        <div class="op4" id="cuadro" onclick="location.href='configuracion.php'">
            <img src="../Icon-MendoAgro/settings.svg">
            <p>Configuración</p>
        </div>



        <div class="op5" id="cuadro">
        <img src="../Icon-MendoAgro/warning-square.svg">

        
            <p>Solucionar Problemas</p>
        </div>

        <div class="op5" id="cuadro" onclick="location.href='cerrarsesion.php'">
        <img src="../Icon-MendoAgro/log-out.svg">

            <p>Cerrar sesion</p>
        </div>
    </div>

</body>

</html>