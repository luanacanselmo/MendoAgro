<nav class="grid grid-cols-4 md:grid-cols-8 gap-4 shadow-md sticky top-0 w-full bg-white h-[65px]">
    <div class="col-span-2 md:col-start-2 md:col-end-3 grid place-content-center">
        <img src="/MendoAgro/Icon-MendoAgro/logo_MendoAgro_Black.png" class="h-12">
    </div>
    <div class="grid col-start-4 md:col-end-9 md:col-span-3 xl:col-end-9 xl:col-span-3 place-content-center">
        <button id="openMenu" class="md:hidden hover:text-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 6l16 0" />
                <path d="M4 12l16 0" />
                <path d="M4 18l16 0" />
            </svg>
        </button>
        <ul class="hidden md:flex md:flex-row font-normal">
            <li class="flex items-center space-x-3 p-2"><a class="hover:text-green-500" href="../vista/inicio.php"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-home">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12.707 2.293l9 9c.63 .63 .184 1.707 -.707 1.707h-1v6a3 3 0 0 1 -3 3h-1v-7a3 3 0 0 0 -2.824 -2.995l-.176 -.005h-2a3 3 0 0 0 -3 3v7h-1a3 3 0 0 1 -3 -3v-6h-1c-.89 0 -1.337 -1.077 -.707 -1.707l9 -9a1 1 0 0 1 1.414 0m.293 11.707a1 1 0 0 1 1 1v7h-4v-7a1 1 0 0 1 .883 -.993l.117 -.007z" />
                        </svg></span>Inicio</a>
            </li>
            <li class="flex items-center space-x-3 p-2"><a class="hover:text-green-500" href="/MendoAgro/vista/mistrabajos.php">Trabajos</a></li>
            <li class="flex items-center space-x-3 p-2"><a class="hover:text-green-500" href="#">Nosotros</a></li>
            <?php if (isset($_SESSION['user'])) : ?>
                <li class="flex items-center space-x-3 relative cursor-pointer ml-10">
                    <div id="user" class="flex items-center space-x-3 p-2 rounded-full">
                        <img class="rounded-full w-8 h-8" src="https://ui-avatars.com/api/?name=<?php echo $_SESSION['user'] ?>" alt="perfil <?php echo $_SESSION['user'] ?>">
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </li>
                <div id="userMenu" class="absolute top-2 right-10 w-56 h-0 overflow-hidden translate-y-14 bg-gray-300 rounded-lg shadow-lg text-base font-semibold text-slate-900">
                    <ul class="list-none p-2">
                        <li>
                            <div class="grid grid-cols-2 grid-rows-2 p-2">
                                <div class="col-span-1">
                                    <img class="rounded-full w-8 h-8" src="https://ui-avatars.com/api/?name=<?php echo $_SESSION['user'] ?>" alt="perfil <?php echo $_SESSION['user'] ?>">
                                </div>
                                <div class="col-span-1">
                                    <p><?php echo $_SESSION['user'] ?></p>
                                    <p><?php echo $_SESSION['correo'] ?></p>

                                </div>
                                <div class="col-span-2">
                                    <a href="" class="border-blue-200">Editar perfil</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="block p-2 hover:bg-gray-100">Opción 2</a></li>
                        <li><a href="/MendoAgro/cerrar_sesion.php" class="block p-2 hover:bg-gray-100">Cerrar Sesión</a></li>
                    </ul>
                </div>
            <?php else : ?>
                <div class="flex ml-10">
                    <a href="/MendoAgro/vista/login.php" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Registrar</a>
                    <a href="/MendoAgro/vista/login.php" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded ml-2">Iniciar sesión</a>
                </div>
            <?php endif; ?>
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

<script>
    document.getElementById("closeMenu").addEventListener("click", function() {
        document.getElementById("menu").classList.toggle("hidden");
    });

    document.getElementById("user").addEventListener("click", function() {
        document.getElementById("userMenu").classList.toggle("hidden");
    });

    document.addEventListener('DOMContentLoaded', function() {
        const userMenu = document.getElementById('userMenu');
        const userToggle = document.getElementById('user');

        userToggle.addEventListener('click', function() {
            userMenu.classList.toggle('h-0'); // Toggle visibility
            userMenu.classList.toggle('transform-y-full'); // Toggle position
            userToggle.querySelector('svg').classList.toggle('-rotate-180'); // Toggle icon rotation
        });

        // Close the menu on document click (optional)
        document.addEventListener('click', function(event) {
            if (!userToggle.contains(event.target) && userMenu.classList.contains('h-auto')) {
                userMenu.classList.remove('h-auto');
                userMenu.classList.add('h-0');
                userMenu.classList.add('transform-y-full');
                userToggle.querySelector('svg').classList.remove('-rotate-180');
            }
        });
    });
</script>