<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Generos</title>
    <?php include_once   'views/cabecera.php'; ?>
</head>
<body>
    <?php include_once 'views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3>Lista de Géneros</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="<?= PATH.'/Generos/create' ?>">Nuevo Género</a>
                <br><br>
                <table class="table table-striped table-bordered" id="tabla">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th>Código del Género</th>
                            <th>Nombre del Género</th>
                            <th>Descripcion</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($generos as $genero): ?>

                            <tr>
                                <td><?= $genero['id_genero'] ?></td>
                                <td><?= $genero['nombre_genero'] ?></td>
                                <td><?= $genero['descripcion'] ?></td>
                                <td class="align-middle">
                                    <div class="d-flex justify-content-center gap-1 align-items-center">
                                        <div>
                                            <form action="<?= PATH.'/Generos/edit/'.$genero['id_genero'] ?>" method="post" style="display:inline;">
                                                <input type="hidden" name="id_genero" value="<?= $genero['id_genero'] ?>">
                                                <input type="hidden" name="nombre_genero" value="<?= $genero['nombre_genero'] ?>">
                                                <input type="hidden" name="descripcion" value="<?= $genero['descripcion'] ?>">
                                                <button type="submit" class="btn btn-warning">Editar</button>
                                            </form>
                                        </div>
                                        <a class="btn btn-danger" href="<?= PATH."/Generos/delete/".$genero['id_genero'] ?>">Eliminar</a>
                                    </div>
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