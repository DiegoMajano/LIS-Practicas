<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Libro</title>
    <?php include  'views/cabecera.php'; ?>
</head>
<body>
<?php include 'views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3>Nuevo Libro</h3>
        </div>
        <div class="row">
            <div class="col-md-7">
                <form role="form" action="<?= isset($libro) ? PATH .'/Libros/update' : PATH .'/Libros/insert'?>" method="POST">
                    <input type="hidden" name="op" value="insertar"/>
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código del Libro:</label>
                        <input <?= isset($libro) ? 'readonly' : '' ?> value="<?= isset($libro) ? $libro['codigo_libro'] :'' ?>" type="text" class="form-control" name="codigo_libro" id="codigo_libro" placeholder="Ingresa el código del libro">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Libro:</label>
                        <input value="<?= isset($libro) ? $libro['nombre_libro'] :'' ?>" type="text" class="form-control" name="nombre_libro" id="nombre_libro" placeholder="Ingresa el nombre del libro">
                    </div>
                    <div class="mb-3">
                        <label for="existencias" class="form-label">Existencias:</label>
                        <input value="<?= isset($libro) ? $libro['existencias'] :'' ?>" type="text" class="form-control" id="existencias" name="existencias" placeholder="Ingresa la existencias del libro">
                    </div>                    
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input value="<?= isset($libro) ? $libro['precio'] :'' ?>" type="text" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio del libro">
                    </div>                    
                    <div class="mb-3">
                        <label for="codigo_autor" class="form-label">Código del Autor:</label>
                        <select class="form-control" name="codigo_autor" id="codigo_autor" placeholder="Seleccione el autor">
                            <option value="">Seleccionar el autor</option>
                            <?php 
                                if(isset($libro)){
                                    echo '<option selected value="'.$libro['codigo_autor'].'">'.$libro['codigo_autor']. ' - ' .$libro['nombre_autor'].'</option>';
                                } else{
                                    echo '<option value="">Seleccionar el autor</option>';
                                }
                                foreach ($autores as $autor) {
                                    echo '<option value="'.$autor['codigo_autor'].'">'.$autor['codigo_autor']. ' - ' .$autor['nombre_autor'].'</option>';
                                }  
                            ?>
                        </select>
                    </div>                                       
                    <div class="mb-3">
                        <label for="codigo_editorial" class="form-label">Código del Editorial:</label>
                        <select class="form-control" name="codigo_editorial" id="codigo_editorial" placeholder="Seleccione la editorial">   
                            <option value="">Seleccionar el editorial</option>
                            <?php 
                                if(isset($libro)){
                                    echo '<option value="'.$libro['codigo_editorial'].'" selected>'.$libro['codigo_editorial']. ' - ' .$libro['nombre_editorial'].'</option>';
                                } else{
                                    echo '<option value="">Seleccionar el género</option>';
                                }
                                foreach ($editoriales as $editorial) {
                                    echo '<option value="'.$editorial['codigo_editorial'].'">'.$editorial['codigo_editorial']. ' - ' .$editorial['nombre_editorial'].'</option>';
                                }  
                            ?>
                        </select>
                    </div>                      
                    <div class="mb-3">
                        <label for="id_genero" class="form-label">ID del Género:</label>
                        <select class="form-control" name="id_genero" id="id_genero" placeholder="Seleccione el género">
                            <option value="">Seleccionar Género</option>
                            <?php 
                                if(isset($libro)){
                                    echo '<option value="'.$libro['id_genero'].'" selected>'.$libro['id_genero']. ' - ' .$libro['nombre_genero'].'</option>';
                                } else{
                                    echo '<option value="">Seleccionar el género</option>';
                                }
                                foreach ($generos as $genero) {
                                    echo '<option value="'.$genero['id_genero'].'">'.$genero['id_genero']. ' - ' .$genero['nombre_genero'].'</option>';
                                }  
                            ?>
                        </select>
                    </div>                    
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input value="<?= isset($libro) ? $libro['lib_descripcion'] :'' ?>" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la descripción del libro">
                    </div>                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-danger" href="<?= PATH.'/Libros' ?>">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>