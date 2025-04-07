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
                            <th>Código Autor</th>
                            <th>Código Editorial</th>
                            <th>ID género</th>
                            <th>Descripcion</th>
                            <th>Imagen</th>
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
                                <td><?= $libro['codigo_autor'] ?></td>
                                <td><?= $libro['codigo_editorial'] ?></td>
                                <td><?= $libro['id_genero'] ?></td>
                                <td><?= $libro['descripcion'] ?></td>
                                <td><?= $libro['imagen'] ?></td>
                                <td></td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>