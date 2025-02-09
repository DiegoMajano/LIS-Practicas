<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de notas</title>
    <link rel="stylesheet" href="../../css/output.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body class="bg-indigo-100 flex flex-col justify-center gap-5 items-top p-6">

<?php 
include_once('student.php');
?>


<div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-xl">
    <h2 class="text-2xl font-bold text-center text-blue-950 mb-6">📚 Promedio de Notas</h2>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-center bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="text-xs text-white uppercase bg-blue-900">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Tarea 1</th>
                    <th scope="col" class="px-6 py-3">Investigación</th>
                    <th scope="col" class="px-6 py-3">Examen Parcial</th>
                    <th scope="col" class="px-6 py-3">Promedio</th>
                    <th scope="col" class="px-6 py-3">Estado</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                
                <?php                   
                    foreach($studentsData as $student){
                        $tarea1 = (float)$student['tarea1'] * (float)$percents['tarea1'];
                        $investigacion = (float)$student['investigacion'] * (float)$percents['investigacion'];
                        $parcial = (float)$student['parcial'] * (float)$percents['parcial'];
                        $promedio = $tarea1 + $investigacion + $parcial;
                ?>

                <tr class="border-b border-gray-300 even:bg-indigo-100 odd:bg-white hover:bg-indigo-300 transition duration-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <?= htmlspecialchars($student['name']) ?>
                    </th>
                    <td class="px-6 py-4"><?= number_format($student['tarea1'], 2) ?></td>
                    <td class="px-6 py-4"><?= number_format($student['investigacion'], 2) ?></td>
                    <td class="px-6 py-4"><?= number_format($student['parcial'], 2) ?></td>

                    <td class="px-6 py-4 font-bold ">
                        <?= number_format($promedio, 2) ?>                        
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-xs font-medium <?= $promedio >= 6 ? 'text-green-600' : 'text-red-600' ?>">
                            <?= $promedio >= 6 ? 'Aprobado' : 'Reprobado' ?>
                        </span>
                    </td>
                </tr>    

                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="mt-6 text-center text-sm">
        <a href="../" class="px-6 py-3 bg-indigo-900 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition">
            Regresar al Inicio
        </a>
    </div>
</div>

</body>
</html>
