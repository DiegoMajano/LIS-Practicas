<?php 

include_once 'model/GeneroModel.php';

$model = new GeneroModel();
$autor = [
    'id_genero'=>'8',
    'nombre_genero'=>'Prueba UPDATE',
    'descripcion'=>'prueba descripcion',
];

//echo $model->insert($autor);
//echo $model->delete($autor['id_genero']);
echo $model->update($autor);

var_dump($model->get(''));
?>