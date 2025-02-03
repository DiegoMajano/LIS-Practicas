<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de notas</title>
    <link rel="stylesheet" href="../../css/output.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body class="bg-gray-200">

<?php 

$studentsData = [
    'name' => 'Diego Majano',
    'tarea1' => [
        'percent' => 0.5,
        'note' => 9
    ],
    'investiacion' =>         [
        'percent' => 0.3,
        'note' => 9
    ]
    ,
    'parcial' => [
        'percent' => 0.2,
        'note' => 8
    ]
];

?>

<div class="mx-6">    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg md:m-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tarea 1
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Investigación
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Examen Parcial
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Promedio
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    foreach($studentsData as $student){
                ?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $student['name'] ?>
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>    
                
                <?php 
                
                    }
                
                ?>
            </tbody>
        </table>
    </div>
</div>


</body>
</html>