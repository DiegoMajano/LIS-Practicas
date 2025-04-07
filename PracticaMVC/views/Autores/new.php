<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Autores</title>
    <?php include  'views/cabecera.php'; ?>
</head>
<body>
<?php include 'views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3>Nuevo Autores</h3>
        </div>
        <div class="row">
            <div class="col-md-7">
                <form role="form" action=" <?= PATH .'/Autores/insert'?>" method="POST">
                    <input type="hidden" name="op" value="insertar"/>
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código del Autor:</label>
                        <input type="text" class="form-control" name="codigo_autor" id="codigo_autor" placeholder="Ingresa el código del autor">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Autor:</label>
                        <input type="text" class="form-control" name="nombre_autor" id="nombre_autor" placeholder="Ingresa el nombre del autor">
                    </div>
                    <div class="mb-3">
                        <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Ingresa la nacionalidad">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-danger" href="<?= PATH . '/Autores' ?>">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>