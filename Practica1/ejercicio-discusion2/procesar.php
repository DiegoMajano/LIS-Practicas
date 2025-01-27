<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Conversión</title>
    <link rel="stylesheet" href="../../css/output.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-xl">
        <?php
        if (isset($_POST["cant-dolares"])) {
            $cantidadDolares = $_POST['cant-dolares'];

            if (!is_numeric($cantidadDolares) || $cantidadDolares < 0) {
                echo "<p class='text-red-500 font-medium text-center'>Por favor, ingrese un valor válido.</p>";
                echo "<div class='text-center mt-4'><a href='formulario.php' class='text-blue-500 underline'>Volver al formulario</a></div>";
            } else {
                $tasaConversion = 0.952; 
                $cantidadEuros = $cantidadDolares * $tasaConversion;

                echo "<h1 class='text-2xl font-bold text-center mb-4'>Resultado de Conversión</h1>";
                echo "<table class='table-auto w-full border-collapse border border-gray-300'>
                        <thead>
                            <tr class='bg-gray-200'>
                                <th class='border border-gray-300 px-4 py-2'>Cantidad en Dólares (USD)</th>
                                <th class='border border-gray-300 px-4 py-2'>Equivalente en Euros (EUR)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class='border border-gray-300 px-4 py-2 text-center'>\$" . number_format($cantidadDolares, 2) . "</td>
                                <td class='border border-gray-300 px-4 py-2 text-center'>€" . number_format($cantidadEuros, 2) . "</td>
                            </tr>
                        </tbody>
                      </table>";
                echo "<div class='text-center mt-4'><a href='conversor.php' class='text-blue-500 underline'>Volver al formulario</a></div>";
            }
        } else {
            echo "<p class='text-red-500 font-medium text-center'>Acceso no permitido. Use el <a href='formulario.php' class='text-blue-500 underline'>formulario</a> para realizar la conversión.</p>";
        }
        ?>
    </div>
</body>
</html>
