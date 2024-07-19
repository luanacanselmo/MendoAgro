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

    <p>Bienvenido  <?php echo $_SESSION['user'] ?> </p>

    <div class="iniciovista">
        <div class="op1" id="cuadro">
            <img src="../Icon-MendoAgro/scissor.svg">
            <p>Editar trabajo</p>
        </div>

        <div class="op2" id="cuadro">
            <img src="../Icon-MendoAgro/user.svg">
            <p>Ver mis trabajos</p>

        </div>

        <div class="op3" id="cuadro">

            <img src="../Icon-MendoAgro/arrow-up.svg"><br>
            <p>Subir trabajo</p>

        </div>
        <div class="op4" id="cuadro">
        <img src="../Icon-MendoAgro/settings.svg">
        <p>Configuración</p>


    </div>
        <div class="op5" id="cuadro">
        <img src="../Icon-MendoAgro/settings.svg">

            <p>Solucionar Problemas</p>
        </div>
    </div>

</body>

</html>