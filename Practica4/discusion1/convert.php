<?php

function convertUnits($value, $originalType, $toType){

    $conversions = [
        'metros' => ['metros' => 1, 'yardas' => 1.09361, 'pies' => 3.28084, 'varas' => 1.19631],
        'yardas' => ['metros' => 0.9144, 'yardas' => 1, 'pies' => 3, 'varas' => 1.09361],
        'pies' => ['metros' => 0.3048, 'yardas' => 0.333333, 'pies' => 1, 'varas' => 0.39878],
        'varas' => ['metros' => 0.836127, 'yardas' => 0.9144, 'pies' => 2.5, 'varas' => 1]
    ];

    return $value * $conversions[$originalType][$toType];

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $value = floatval($_POST['value']);
    $originalType = $_POST['originalType'];
    $toType = $_POST['toType'];
    $resultado = convertUnits($value, $originalType, $toType);
}


?>