<?php 


include_once('convert.php');


if (isset($_POST['value'])) {
    $value = floatval($_POST['value']);
    $originalType = $_POST['originalType'];
    $toType = $_POST['toType'];
    $result = convertUnits($value, $originalType, $toType);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class="flex items-center justify-center min-h-screen bg-slate-300">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold text-center text-gray-700 mb-4">Conversor de Unidades</h1>
        <form method="post" class="space-y-4">
            <div>
                <label for="value" class="block text-gray-600">Valor:</label>
                <input type="number" step="any" name="value" required 
                    class="w-full p-2 border border-gray-400 rounded-md focus:ring focus:ring-blue-300">
            </div>
            
            <div>
                <label for="originalType" class="block text-gray-600">De:</label>
                <select name="originalType" required class="w-full p-2 border border-gray-400 rounded-md focus:ring focus:ring-blue-300">
                    <option value="metros">Metros</option>
                    <option value="yardas">Yardas</option>
                    <option value="pies">Pies</option>
                    <option value="varas">Varas</option>
                </select>
            </div>
            
            <div>
                <label for="toType" class="block text-gray-600">A:</label>
                <select name="toType" required class="w-full p-2 border border-gray-400 rounded-md focus:ring focus:ring-blue-300">
                    <option value="metros">Metros</option>
                    <option value="yardas">Yardas</option>
                    <option value="pies">Pies</option>
                    <option value="varas">Varas</option>
                </select>
            </div>
            
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 transition">Convertir</button>
        </form>
        
        <?php if (isset($result)) { ?>
            <p class="mt-4 text-lg font-semibold text-center text-gray-700">Resultado: <?php echo round($resultado, 4) . " " . $toType; ?></p>
        <?php 
        } 

        include_once('../../includes/backButton.php');
        ?>
    </div>
</body>
</html>
