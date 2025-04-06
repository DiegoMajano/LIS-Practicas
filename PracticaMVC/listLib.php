<?php 

include_once 'model/LibrosModel.php';

$model = new LibrosModel();
$libro = [
    'codigo_libro'=>'LIB000030',
    'nombre_libro'=>'Prueba update',
    'existencias'=>'2',
    'precio' => '1.2',
    'codigo_autor'=>'AUT001',
    'codigo_editorial'=>'EDI004',
    'id_genero'=>'1',
    'descripcion'=>'jasjajsajsj ajs asjasja jasjasjas',
    'imagen'=>'NULL'
];

//echo $model->insert($libro);
//echo $model->delete($libro['codigo_libro']);
echo $model->update($libro);

var_dump($model->get('LIB000030'));


?>