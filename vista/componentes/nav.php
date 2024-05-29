<nav class="grid grid-cols-4 md:grid-cols-8 gap-4 shadow-md sticky top-0 w-full bg-white h-20">
    <div class="col-span-2 md:col-start-1 md:col-end-4 grid place-content-center">
        <img src="/MendoAgro/Icon-MendoAgro/logo_MendoAgro_Black.png" class="h-12">
    </div>
    <div class="grid col-start-4 md:col-end-9 md:col-span-3 xl:col-end-8 xl:col-span-2 place-content-center">
        <button id="openMenu" class="md:hidden hover:text-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
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

<script>
    document.getElementById("closeMenu").addEventListener("click", function() {
        document.getElementById("menu").classList.toggle("hidden");
    });

    document.getElementById("openMenu").addEventListener("click", function() {
        document.getElementById("menu").classList.toggle("hidden");
    });
</script>