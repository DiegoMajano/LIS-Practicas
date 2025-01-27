<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos Personales</title>
    <link rel="stylesheet" href="../../css/output.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form method="POST" action="mostrar_datos.php" class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
        <h1 class="text-2xl font-bold text-center mb-6">Datos Personales</h1>

        <div class="mb-4">
            <label for="nombreCompleto" class="block text-gray-700 font-medium mb-2">Nombre Completo</label>
            <input type="text" name="nombreCompleto" id="nombreCompleto" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="lugarNacimiento" class="block text-gray-700 font-medium mb-2">Lugar de Nacimiento</label>
            <input type="text" name="lugarNacimiento" id="lugarNacimiento" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="edad" class="block text-gray-700 font-medium mb-2">Edad</label>
            <input type="number" name="edad" id="edad" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="carnetUniversitario" class="block text-gray-700 font-medium mb-2">Carnet Universitario</label>
            <input type="text" name="carnetUniversitario" id="carnetUniversitario" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition duration-200">
            Enviar
        </button>
    </form>
</body>

</html>