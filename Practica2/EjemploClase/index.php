<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css" />
</head>
<!--  -->
<body>
    <div class="container">
        <h1 class="page-header text-center">Calculadora de CUM</h1>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar materia</a>

                <table class="table table-bordered table-striped" style="margin-top:20px;">
                    <thead>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Uv</th>
                        <th>Notas</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php
                        // para acceder al archivo, sin direccion porque esta en la misma carpeta
                        $materias = simplexml_load_file('materias.xml');

                        // var_dump($materias);

                        $cum = 0;
                        $sumaUvs = 0;
                        $notasPorUvs = 0;

                        foreach ($materias->materia as $materia) {
                            $notasPorUvs += $materia->nota * $materia->uvs;
                            $sumaUvs += $materia->uvs;

                        ?>
                            <tr>
                                <td><?= $materia->codigo ?></td>
                                <td><?= $materia->nombre ?></td>
                                <td><?= $materia->uvs ?></td>
                                <td><?= $materia->nota ?></td>
                                <td>
                                    
                                    <a class="btn btn-success" data-toggle="modal" data-target="#editModal<?= $codigo ?>">Editar</a>
                                    <a href="eliminar.php?codigo=<?= $materia->codigo ?>" class="btn btn-danger">Borrar</a>
                                </td>

                                <div class="modal fade" id="editModal<?= $codigo ?>" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" action="editar.php">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Editar Materia (Código: <?= $codigo ?>)</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="codigo" value="<?= $codigo ?>">
                                                    <div class="form-group">
                                                        <label for="nombre">Nombre</label>
                                                        <input type="text" name="nombre" class="form-control" value="<?= $nombre ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="uvs">UVs</label>
                                                        <input type="number" name="uvs" class="form-control" value="<?= $uvs ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nota">Nota</label>
                                                        <input type="number" step="0.01" name="nota" class="form-control" value="<?= $nota ?>" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </tr>

                        <?php
                        }

                        ?>

                    </tbody>
                </table>

                <?php

                if ($sumaUvs !== 0) {

                    $cum = round($notasPorUvs / $sumaUvs, 2);
                    echo "<h2>CUM: $cum</h2>";
                }
                ?>


            </div>
        </div>
    </div>

    <?php

    include_once('nueva_modal.php');
    if(isset($_GET['exito']) && $_GET['exito'] == 1){
        
    ?>

    <script>
        alertify.success('Materia registrada exitosamente');
    </script>

    <?php 
    }
    ?>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>