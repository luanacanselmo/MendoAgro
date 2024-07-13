<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-zinc-200">
<nav class="grid grid-cols-4 md:grid-cols-8 gap-4 shadow-md top-0 w-full h-20">
    <div class="grid col-start-4 md:col-end-9 md:col-span-3 xl:col-end-8 xl:col-span-2 place-content-center">
      <button id="openMenu" class="md:hidden hover:text-green-600">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M4 6l16 0" />
          <path d="M4 12l16 0" />
          <path d="M4 18l16 0" />
        </svg>
      </button>
      <ul class="hidden md:flex md:flex-row font-semibold ">
        <li class="border-r border-gray-400"><a class="hover:text-green-500 p-2" href="/MendoAgro/index.php">Inicio</a></li>
        <li class="border-r border-gray-400"><a class="hover:text-green-500 p-2" href="/MendoAgro/vista/trabajos.php">Trabajos</a></li>
        <li class="border-r border-gray-400"><a class="hover:text-green-500 p-2" href="/MendoAgro/vista/login.php">Registrar</a></li>
        <li><a class="hover:text-green-500 p-2" href="#">Nosotros</a></li>
      </ul>
    </div>
  </nav>




    <div id="app" class="block md:grid mx-3 pt-5">
        <section class="hidden md:block [template-area:side]">
            <div class="rounded-lg bg-white p-3">

                <div class="flex flex-col pb-3">
                    <div class="flex">
                        <input type="search" class="shadow m-0 block flex-auto rounded-l-lg border bg-white bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-surface outline-none transition duration-200 ease-in-out placeholder:text-neutral-500 focus:z-[3] focus:border-primary focus:shadow-inset focus:outline-none motion-reduce:transition-none " placeholder="Buscar trabajos" />
                        <span class="flex items-center shadow rounded-r-lg whitespace-nowrap px-3 py-[0.25rem] text-green-900 [&>svg]:h-5 [&>svg]:w-5 bg-green-400" id="button-addon2">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="bg-blue-400 border-t-[1px] border-gray-200 pt-2">
                    <p class="text-base font-medium mb-4 ml-4">Filtros</p>
                    <ul>
                        <li>
                            <button class="flex items-center flex-row space-x-[5px]">
                                <svg class="text-gray-600" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-sort">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 9l4 -4l4 4m-4 -4v14" />
                                    <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                                </svg>
                                <p>Fecha de pubicación</p>
                            </button>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-current-location">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M12 12m-8 0a8 8 0 1 0 16 0a8 8 0 1 0 -16 0" />
                                <path d="M12 2l0 2" />
                                <path d="M12 20l0 2" />
                                <path d="M20 12l2 0" />
                                <path d="M2 12l2 0" />
                            </svg>
                            <p>Ubicación</p>
                        </li>
                    </ul>
                </div>
                <div id="banner" class="xl:hidden rounded-lg p-4 flex flex-col items-center justify-center space-y-2">
                    <p class="text-xl font-semibold">¿Estás buscando Empleados?</p>
                    <p>Puedes registrarte para empezar.</p>
                    <input type="button" value="Resgistrase" class="rounded-lg bg-green-400 text-green-900 font-normal px-3 py-1 text-center">
                </div>
            </div>
        </section>
        <main class="[template-area:main] grid grid-cols-5">
            <div class="col-span-5 xl:col-span-3 px-3">
                <h2 class="text-xl font-medium mb-4 ml-4">Principales</h2>
                <section>
                    <?php include "./componentes/card.php" ?>
                </section>
            </div>
            <div class="hidden xl:col-span-2 xl:block">
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
        grid-template-areas:
            "side main";
        grid-auto-columns: 300px 1fr;
        grid-template-rows: 1fr;
    }

    #banner {
        background: url(../Icon-MendoAgro/banner.png);
        background-size: cover;
    }
</style>