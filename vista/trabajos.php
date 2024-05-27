<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include"./componentes/nav.php";?>
    <div id="app" class="h-screen z-10">
        <section class="[template-area:side] bg-blue-200">
            coso
        </section>
        <main class="[template-area:main] grid grid-cols-5">
            <div class="bg-zinc-200 col-span-3 pt-4 px-5">
                <h2 class="text-xl mb-4">Principales</h2>
                <section>
                    <?php include"./componentes/card.php"?>
                </section>
            </div>
            <div class="bg-green-300 col-span-2">
                coso
            </div>
        </main>
    </div>

</body>

</html>

<style>
    #app{
        display: grid;
		grid-template-areas:
			"side main";
		grid-auto-columns: 300px 1fr;
		grid-template-rows: 1fr;
    }
</style>