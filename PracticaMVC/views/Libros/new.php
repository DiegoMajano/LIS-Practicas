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
                        <input type="text" class="form-control" name="codigo_libro" id="codigo_libro" placeholder="Ingresa el id del género">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Libro:</label>
                        <input type="text" class="form-control" name="nombre_libro" id="nombre_libro" placeholder="Ingresa el nombre del género">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la descripción del género">
                    </div>                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-danger" href="#">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>