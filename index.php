<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MendoAgro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  


  <style>
    nav {
      background-color: #b9bc9a;
    }

    section {
      background-color: #aaaaaa;
    }

    [data-animation="fade"] {
      opacity: 0;
      transition: .6s ease-in .3s;
      --opacity: 1;
    }

    .unset {
      opacity: var(--opacity);
    }


    /* Animaciones */
    .animate-bounce {
      animation: bounce 2s infinite;
    }

    @keyframes bounce {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-10px);
      }
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

  <section class="info py-6 grid grid-cols-1 md:grid-cols-2">
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
            <p class="text-center font-semibold"> Conéctate con empresas y productores que buscan talento.</p>
          </div>
        </div>
      </div>
    </div>
  </section>




  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-10 xl:grid-cols-3">
      <div class="max-w-2xl">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">¿Qué podes hacer?</h2>
        <!-- <p class="mt-4 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p> -->
      </div>
      <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded" src="Icon-MendoAgro/bubble-search.svg" alt="">
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Explora las vacantes disponibles</h3>

            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="Icon-MendoAgro/mail.svg" alt="">

            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Conecta con los trabajos que te interesen</h3>
            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="Icon-MendoAgro/bag.svg" alt="">
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">¡Empieza tu nuevo trabajo!</h3>

            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="Icon-MendoAgro/bag.svg" alt="">

            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Puedes publicar trabajos y sus detalles</h3>

            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="Icon-MendoAgro/globe.svg" alt="">

            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Ten mayor alcance</h3>

            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="Icon-MendoAgro/check.svg" alt="">

            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Comenza ya</h3>
            </div>
          </div>
        </li>

        <!-- More people... -->
      </ul>
    </div>
  </div>
  <div class="bg-gray-100 p-10">
    <div class="container mx-auto">
      <div class="flex items-center justify-around">
        <!-- Primer Circulo -->
        <div class="flex flex-col items-center">
          <div class="w-24 h-24 bg-white border-4 border-black rounded-full flex items-center justify-center animate-bounce">
            <span class="text-3xl text-blue-600">1</span>
          </div>
          <p class="mt-4 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <!-- Linea -->
        <div class="flex-1 h-1 bg-black"></div>
        <!-- Segundo Circulo -->
        <div class="flex flex-col items-center">
          <div class="w-28 h-28 bg-white border-4 border-black rounded-full flex items-center justify-center animate-bounce">
            <span class="text-4xl text-blue-600">2</span>
          </div>
          <p class="mt-4 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <!-- Linea -->
        <div class="flex-1 h-1 bg-black"></div>
        <!-- Tercer Circulo -->
        <div class="flex flex-col items-center">
          <div class="w-32 h-32 bg-white border-4 border-black rounded-full flex items-center justify-center animate-bounce">
            <span class="text-5xl text-blue-600">3</span>
          </div>
          <p class="mt-4 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
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