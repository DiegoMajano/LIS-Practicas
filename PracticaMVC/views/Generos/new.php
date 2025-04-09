<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Género</title>
    <?php include  'views/cabecera.php'; ?>
</head>
<body>
<?php include 'views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3>Nuevo Género</h3>
        </div>
        <div class="row">
            <div class="col-md-7">
                <form role="form" action="<?= isset($genero) ? PATH .'/Generos/update' : PATH .'/Generos/insert'?>" method="POST">
                    <input type="hidden" name="op" value="insertar"/>
                    <div class="mb-3">
                        <label for="codigo" class="form-label">ID del Género:</label>
                        <input required <?= isset($genero) ? 'readonly' : '' ?> value="<?= isset($genero) ? $genero['id_genero'] :'' ?>" type="text" class="form-control" name="id_genero" id="id_genero" placeholder="Ingresa el id del género">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Género:</label>
                        <input required value="<?= isset($genero) ? $genero['nombre_genero'] :'' ?>" type="text" class="form-control" name="nombre_genero" id="nombre_genero" placeholder="Ingresa el nombre del género">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion:</label>
                        <input required value="<?= isset($genero) ? $genero['descripcion'] :'' ?>" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la descripción del género">
                    </div>                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-danger" href="<?= PATH.'/Generos' ?>">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>