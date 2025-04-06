<?php 

include_once 'model/EditorialModel.php';

$model = new EditorialModel();
$editorial = [
    'codigo_editorial'=>'EDI789',
    'nombre_editorial'=>'Prueba UPDATE',
    'contacto'=>'Guillerm0',
    'telefono'=>'22222222'
];

//echo $model->insert($editorial);
//echo $model->delete($editorial['codigo_editorial']);
echo $model->update($editorial);

var_dump($model->get(''));
?>