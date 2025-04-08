<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <?php include_once   'views/cabecera.php'; ?>
</head>
<body>
    <?php include_once 'views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3>Lista de Libros</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="<?= PATH.'/Libros/create' ?>">Nuevo Libro</a>
                <br><br>
                <table class="table table-striped table-bordered" id="tabla">
                    <thead class="table-dark">
                        <tr>
                            <th>Código del Libro</th>
                            <th>Nombre del Libro</th>
                            <th>Existencias</th>
                            <th>Precio</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th>Género</th>
                            <th>Descripcion</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($libros as $libro): ?>

                            <tr>
                                <td><?= $libro['codigo_libro'] ?></td>
                                <td><?= $libro['nombre_libro'] ?></td>
                                <td><?= $libro['existencias'] ?></td>
                                <td><?= $libro['precio'] ?></td>
                                <td><?= $libro['nombre_autor'] ?></td>
                                <td><?= $libro['nombre_editorial'] ?></td>
                                <td><?= $libro['nombre_genero'] ?></td>
                                <td><?= $libro['descripcion'] ?></td>
                                <td>
                                <form action="<?= PATH.'/Libros/edit/'.$libro['codigo_libro'] ?>" method="post" style="display:inline;">
                                        <input type="hidden" name="codigo_libro" value="<?= $libro['codigo_libro'] ?>">
                                        <input type="hidden" name="nombre_libro" value="<?= $libro['nombre_libro'] ?>">
                                        <input type="hidden" name="existencias" value="<?= $libro['existencias'] ?>">
                                        <input type="hidden" name="precio" value="<?= $libro['precio'] ?>">
                                        <input type="hidden" name="codigo_autor" value="<?= $libro['codigo_autor'] ?>">
                                        <input type="hidden" name="codigo_editorial" value="<?= $libro['codigo_editorial'] ?>">
                                        <input type="hidden" name="id_genero" value="<?= $libro['id_genero'] ?>">
                                        <input type="hidden" name="descripcion" value="<?= $libro['descripcion'] ?>">
                                        <button type="submit" class="btn btn-warning">Editar</button>
                                    </form>
                                    <a class="btn btn-danger" href="<?= PATH."/Libros/delete/".$libro['codigo_libro'] ?>">Eliminar</a>

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