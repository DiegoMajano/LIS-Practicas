<?php

$students = [
    [
        'name' => 'Diego',
        'lastname' => 'Majano',
        'StudentId' => 'RM220481',
        'CUM'=> 5,
        'subjects' => ['LIS104', 'APN501', 'PED104']
    ],
    [
        'name' => 'Keren',
        'lastname' => 'Blanco',
        'StudentId' => 'LB221134',
        'CUM'=> 7,
        'subjects' => ['CAD501', 'PRE104', 'ESA501']

    ],
    [
        'name' => 'Samuel',
        'lastname' => 'Herrera',
        'StudentId' => 'HC220483',
        'CUM'=> 7,
        'subjects' => ['CAD501', 'PRE104', 'ESA501']

    ]
];


?>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Carnet</th>
        <th>CUM</th>
        <th>Materias Inscritas</th>
    </tr>

    <?php 
    
    foreach($students as $student){

    ?>

    <tr>
        <td><?= $student['name'] ?></td>
        <td><?= $student['lastname'] ?></td>
        <td><?= $student['StudentId'] ?></td>
        <td><?= $student['CUM'] ?></td>
        <td><?= implode(" - ",$student['subjects']) ?></td>
    </tr>
    
<?php

}
?>

</table>

<?php 

include_once('../../includes/backButton.php');

?>
