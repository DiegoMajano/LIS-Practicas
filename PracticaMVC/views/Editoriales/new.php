<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Editorial</title>
    <?php include  'views/cabecera.php'; ?>
</head>
<body>
<?php include 'views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3>Nuevo Editorial</h3>
        </div>
        <div class="row">
            <div class="col-md-7">
                <form role="form" action="<?= isset($editorial) ? PATH .'/Editoriales/update' : PATH .'/Editoriales/insert'?>" method="POST">
                    <input type="hidden" name="op" value="actualizar"/>
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código del Editorial:</label>
                        <input required <?= isset($editorial) ? 'readonly' : '' ?> value="<?= isset($editorial) ? $editorial['codigo_editorial'] :'' ?>" type="text" class="form-control" name="codigo_editorial" id="codigo_editorial" placeholder="Ingresa el código del editorial">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Editorial:</label>
                        <input required value="<?= isset($editorial) ? $editorial['nombre_editorial'] :'' ?>" type="text" class="form-control" name="nombre_editorial" id="nombre_editorial" placeholder="Ingresa el nombre del editorial">
                    </div>
                    <div class="mb-3">
                        <label for="contacto" class="form-label">Contacto:</label>
                        <input required value="<?= isset($editorial) ? $editorial['contacto'] :'' ?>" type="text" class="form-control" id="contacto" name="contacto" placeholder="Ingresa el nombre del contacto">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input required value="<?= isset($editorial) ? $editorial['telefono'] :'' ?>" type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresa el teléfono del contacto">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-danger" href="<?= PATH . '/Editoriales' ?>">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>