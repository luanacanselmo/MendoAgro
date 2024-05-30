<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MendoAgro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    nav,
    #inc {
      background-color: #b9bc9a;
    }
  </style>
</head>

<body>
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


  <div id="menu" class="fixed inset-0 bg-black/20 backdrop-blur-sm hidden">
    <div class="fixed top-4 right-4 w-full max-w-xs bg-white rounded-lg shadow-lg p-6 text-base font-semibold text-slate-900" id="headlessui-dialog-panel-:rd:" data-headlessui-state="open" data-open="">
      <button id="closeMenu" type="button" class="absolute top-5 right-5 w-8 h-8 flex items-center justify-center text-slate-500 hover:text-green-600">
        <span class="sr-only">Close navigation</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M18 6l-12 12" />
          <path d="M6 6l12 12" />
        </svg>
      </button>
      <ul class="space-y-6">
        <li><a class="hover:text-green-500" href="/MendoAgro/index.php">Inicio</a></li>
        <li><a class="hover:text-green-500" href="/MendoAgro/vista/trabajos.php">Trabajos</a></li>
        <li><a class="hover:text-green-500" href="/MendoAgro/vista/login.php">Registrar</a></li>
        <li><a class="hover:text-green-500" href="/MendoAgro/vista/nosotros.php">Nosotros</a></li>
      </ul>
    </div>
  </div>

  <section>
    <img src="Icon-MendoAgro/landing_Mesa de trabajo 1-01.svg" class="w-full h-auto">
  </section>

  <section id="inc" class="py-6 grid grid-cols-1 md:grid-cols-2">
    <div class="border-r border-gray-400 px-12 py-6">
      <h1 class="text-2xl font-bold mb-8 ml-4">¿Qué es MendoAgro?</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa distinctio assumenda eos excepturi. Cumque facere, soluta, tempore, dicta in ab voluptates voluptatem rem omnis praesentium molestias quae recusandae sequi illo?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus eum numquam laborum nostrum voluptatum? Vel accusantium, aspernatur, ducimus ad in illum facilis tempore corporis quo beatae quia a dolores distinctio?
      </p>

    </div>
    <div class="px-12 py-6">
      <h1 class="text-2xl font-bold mb-8 ml-4">Beneficios</h1>
      <div class="flex justify-center items-center">
        <div class="grid grid-cols-2 grid-rows-2 gap-4 w-5/6">
          <div class="flex flex-col items-center justify-center">
            <div class="flex items-center justify-center h-12 w-12 bg-green-400 rounded-full mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brain">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M15.5 13a3.5 3.5 0 0 0 -3.5 3.5v1a3.5 3.5 0 0 0 7 0v-1.8" />
                <path d="M8.5 13a3.5 3.5 0 0 1 3.5 3.5v1a3.5 3.5 0 0 1 -7 0v-1.8" />
                <path d="M17.5 16a3.5 3.5 0 0 0 0 -7h-.5" />
                <path d="M19 9.3v-2.8a3.5 3.5 0 0 0 -7 0" />
                <path d="M6.5 16a3.5 3.5 0 0 1 0 -7h.5" />
                <path d="M5 9.3v-2.8a3.5 3.5 0 0 1 7 0v10" />
              </svg>
            </div>
            <p class="text-center font-semibold">Desarrolla tus habilidades y construye una carrera.</p>
          </div>
          <div class="flex flex-col items-center justify-center">
            <div class="flex items-center justify-center h-12 w-12 bg-purple-400 rounded-full mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shovel-pitchforks">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 3h4" />
                <path d="M7 3v12" />
                <path d="M4 15h6v3a3 3 0 0 1 -6 0v-3z" />
                <path d="M14 21v-3a3 3 0 0 1 6 0v3" />
                <path d="M17 21v-18" />
              </svg>
            </div>
            <p class="text-center font-semibold">Salarios competitivos y beneficios para trabajadores.</p>
          </div>
          <div class="flex flex-col items-center justify-center">
            <div class="flex items-center justify-center h-12 w-12 bg-red-400 rounded-full mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
              </svg>
            </div>
            <p class="text-center font-semibold">Encuentra oportunidades en diferentes regiones de Mendoza.</p>
          </div>
          <div class="flex flex-col items-center justify-center">
            <div class="flex items-center justify-center h-12 w-12 bg-indigo-400 rounded-full mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plug">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9.785 6l8.215 8.215l-2.054 2.054a5.81 5.81 0 1 1 -8.215 -8.215l2.054 -2.054z" />
                <path d="M4 20l3.5 -3.5" />
                <path d="M15 4l-3.5 3.5" />
                <path d="M20 9l-3.5 3.5" />
              </svg>
            </div>
            <p class="text-center font-semibold">Conéctate con empresas y productores que buscan talento.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="h-full py-6 px-12 bg-white">
    <h1 class="text-2xl font-bold mb-8 mt-6 ml-4">¿Cómo funciona?</h1>
    <div class="grid grid-rows-7">
      <div>
        <p>Explora las vacantes disponibles sin necesidad de tener una sesión.</p>
      </div>
      <div>
        <p>Conecta con los trabajos que te interesen.</p>
      </div>
      <div>
        <p>¡Empieza tu nuevo trabajo!</p>
      </div>
      <div>
        <p>Si estas buscando trabajadores puedes iniciar sesión gratis</p>
      </div>
      <div>
        <p>Puedes publicar trabajos y sus detalles</p>
        <p>Ten mayor alcance</p>
      </div>
    </div>
    
  </section>
</body>

</html>
<script>
  document.getElementById("closeMenu").addEventListener("click", function() {
    document.getElementById("menu").classList.toggle("hidden");
  });

  document.getElementById("openMenu").addEventListener("click", function() {
    document.getElementById("menu").classList.toggle("hidden");
  });
</script>