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
                <form role="form" action=" <?= PATH ?>/Libros/insert" method="POST">
                    <input type="hidden" name="op" value="insertar"/>
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código del Libro:</label>
                        <input type="text" class="form-control" name="codigo_libro" id="codigo_libro" placeholder="Ingresa el código del libro">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Libro:</label>
                        <input type="text" class="form-control" name="nombre_libro" id="nombre_libro" placeholder="Ingresa el nombre del libro">
                    </div>
                    <div class="mb-3">
                        <label for="existencias" class="form-label">Existencias:</label>
                        <input type="text" class="form-control" id="existencias" name="existencias" placeholder="Ingresa la existencias del libro">
                    </div>                    
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio del libro">
                    </div>                    
                    <div class="mb-3">
                        <label for="codigo_autor" class="form-label">Código del Autor:</label>
                        <input type="text" class="form-control" id="codigo_autor" name="codigo_autor" placeholder="Ingresa el código del autor">
                    </div>                    
                    <div class="mb-3">
                        <label for="codigo_editorial" class="form-label">Código del Editorial:</label>
                        <input type="text" class="form-control" id="codigo_editorial" name="codigo_editorial" placeholder="Ingresa el código de la editorial">
                    </div>                    
                    <div class="mb-3">
                        <label for="id_genero" class="form-label">ID del Género:</label>
                        <input type="number" class="form-control" id="id_genero" name="id_genero" placeholder="Ingresa el ID del género">
                    </div>                    
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la descripción del libro">
                    </div>                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-danger" href="<?= PATH.'/Libros' ?>">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>