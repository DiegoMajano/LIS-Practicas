<?php 

include_once 'model/AutoresModel.php';

$model = new AutoresModel();
$autor = [
    'codigo_autor'=>'AUT013',
    'nombre_autor'=>'Prueba UPDATE',
    'nacionalidad'=>'salvadoreña',
];

//echo $model->insert($autor);
//echo $model->delete($autor['codigo_autor']);
echo $model->update($autor);

var_dump($model->get(''));
?>