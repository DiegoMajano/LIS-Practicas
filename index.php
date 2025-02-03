<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas LIS - Ciclo 01 2025</title>
    <link href="./css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    </head>
<body class="bg-gray-200 flex flex-col min-h-screen">
    <header class="bg-blue-950 text-white py-5 shadow-md">
        <div class="container mx-auto text-center py-2">
            <h1 class="text-3xl font-bold">Prácticas PHP</h1>
            <p class="text-sm mt-2">Bienvenido, aquí encontrarás las prácticas desarrolladas en el ciclo</p>
        </div>
    </header>

    <main class="flex-grow container mx-auto mt-8 px-4 h-96">
        <section class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Lista de Prácticas</h2>
            <ul class="space-y-4">
                <li>
                    <a href="Practica1/" class="block bg-slate-50 hover:bg-slate-100 border border-slate-200 rounded-lg p-4 text-blue-950">
                        Práctica 1: Fundamentos de Programación en PHP
                    </a>
                </li>
                <li>
                    <a href="Practica2/" class="block bg-slate-50 hover:bg-slate-100 border border-slate-200 rounded-lg p-4 text-blue-950">
                        Práctica 2: Estructuras de control en PHP
                    </a>
                </li>
            </ul>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-4 mt-auto w-full">
        <div class="container mx-auto text-center">
            <p>&copy; <?php echo date("Y"); ?> Prácticas LIS - <a class="hover:underline" href="https://github.com/DiegoMajano/">Diego José Rodríguez Majano</a></p>
        </div>
    </footer>
</body>
</html>
