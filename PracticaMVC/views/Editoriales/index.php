<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Editoriales</title>
    <?php include_once   'views/cabecera.php'; ?>
</head>
<body>
    <?php include_once 'views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3>Lista de Editoriales</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="<?= PATH.'/Editoriales/create' ?>">Nuevo Editorial</a>
                <br><br>
                <table class="table table-striped table-bordered" id="tabla">
                    <thead class="table-dark">
                        <tr>
                            <th>Código del Editorial</th>
                            <th>Nombre del Editorial</th>
                            <th>Contacto</th>
                            <th>Teléfono</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($editoriales as $editorial): ?>

                            <tr>
                                <td><?= $editorial['codigo_editorial'] ?></td>
                                <td><?= $editorial['nombre_editorial'] ?></td>
                                <td><?= $editorial['contacto'] ?></td>
                                <td><?= $editorial['telefono'] ?></td>
                                <td>
                                <form action="<?= PATH.'/Editoriales/edit/'.$editorial['codigo_editorial'] ?>" method="post" style="display:inline;">
                                        <input type="hidden" name="codigo_editorial" value="<?= $editorial['codigo_editorial'] ?>">
                                        <input type="hidden" name="nombre_editorial" value="<?= $editorial['nombre_editorial'] ?>">
                                        <input type="hidden" name="contacto" value="<?= $editorial['contacto'] ?>">
                                        <input type="hidden" name="telefono" value="<?= $editorial['telefono'] ?>">
                                        <button type="submit" class="btn btn-warning">Editar</button>
                                    </form>
                                    <a class="btn btn-danger" href="<?= PATH."/editoriales/delete/".$editorial['codigo_editorial'] ?>">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>