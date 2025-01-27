<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales - Resultados</title>
    <link rel="stylesheet" href="../../css/output.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
        <h1 class="text-2xl font-bold text-center mb-4">Datos Personales Ingresados</h1>

        <?php
        if (isset($_POST['nombreCompleto'])) {
            // Recibiendo los datos del formulario
            $nombreCompleto = $_POST['nombreCompleto'];
            $lugarNacimiento = $_POST['lugarNacimiento'];
            $edad = $_POST['edad'];
            $carnetUniversitario = $_POST['carnetUniversitario'];

            // Mostrar los datos en una tabla
            echo "
            <table class='table-auto w-full border-collapse border border-gray-300'>
                <thead>
                    <tr class='bg-gray-200'>
                        <th class='border border-gray-300 px-4 py-2 text-left'>Campo</th>
                        <th class='border border-gray-300 px-4 py-2 text-left'>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='border border-gray-300 px-4 py-2'>Nombre Completo</td>
                        <td class='border border-gray-300 px-4 py-2'>$nombreCompleto</td>
                    </tr>
                    <tr>
                        <td class='border border-gray-300 px-4 py-2'>Lugar de Nacimiento</td>
                        <td class='border border-gray-300 px-4 py-2'>$lugarNacimiento</td>
                    </tr>
                    <tr>
                        <td class='border border-gray-300 px-4 py-2'>Edad</td>
                        <td class='border border-gray-300 px-4 py-2'>$edad años</td>
                    </tr>
                    <tr>
                        <td class='border border-gray-300 px-4 py-2'>Carnet Universitario</td>
                        <td class='border border-gray-300 px-4 py-2'>$carnetUniversitario</td>
                    </tr>
                </tbody>
            </table>";
        } else {
            echo "<p class='text-red-500 text-center'>No se han enviado los datos correctamente. <a href='formulario.php' class='text-blue-500 underline'>Volver al formulario</a></p>";
        }
        ?>

        <div class="text-center mt-6">
            <a href="datos.php" class="text-blue-500 underline">Volver al formulario</a>
        </div>
    </div>
</body>

</html>