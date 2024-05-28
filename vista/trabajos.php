<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include "./componentes/nav.php"; ?>
    <div id="app" class="h-screen z-10 bg-zinc-200 pt-5">
        <section class="[template-area:side] ">

        </section>
        <main class="[template-area:main] grid grid-cols-5">
            <div class="col-span-3 px-5">
                <h2 class="text-xl mb-4">Principales</h2>
                <section>
                    <?php include "./componentes/card.php" ?>
                </section>
            </div>
            <div class="col-span-2 mr-2">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div id="banner" class=" rounded-lg p-4 flex flex-col items-center justify-center space-y-2">
                        <p class="text-xl font-semibold">¿Estás buscando Empleados?</p>
                        <p>Puedes registrarte para empezar.</p>
                        <input type="button" value="Resgistrase" class="rounded-lg bg-green-400 text-green-900 font-normal px-3 py-1 text-center">
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>

<style>
    #app {
        display: grid;
        grid-template-areas:
            "side main";
        grid-auto-columns: 300px 1fr;
        grid-template-rows: 1fr;
    }

    #banner{
        background: url(../Icon-MendoAgro/banner.png);
        background-size: cover;
    }
</style>