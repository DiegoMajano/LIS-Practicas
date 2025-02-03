<?php 

if(isset($_POST['codigo'])){

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $uvs = $_POST['uvs'];
    $nota = $_POST['nota'];

    $materias = simplexml_load_file('materias.xml');


    // Buscar la materia con el código dado
    foreach ($materias->materia as $materia) {
        if ((string)$materia->codigo === $codigo) {
            $materia->codigo = $codigo;
            $materia->nombre = $nombre;
			$materia->uvs = $uvs;
			$materia->nota = $nota;
			break;
		}

    }    	

	$materias->asXML('materias.xml');
    header('location:index.php?exito=2');
	
} else{
    header('location:index.php');
}
			
?>