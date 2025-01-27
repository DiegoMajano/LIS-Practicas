<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/output.css">
    <title>Conversor de Dólar a Euro</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <form method="post" action="procesar.php" class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4">Conversión de Moneda</h1>
            <label for="cant-dolares" class="block text-gray-700 font-medium mb-2">Ingrese una cantidad en dólares:</label>
            <input
                type="text"
                name="cant-dolares"
                id="cant-dolares"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            <button
                type="submit"
                class="w-full bg-blue-800 text-white font-semibold py-2 rounded-lg hover:bg-blue-950 transition duration-200">
                Convertir
            </button>
        </form>
    </body>
</body>

</html>