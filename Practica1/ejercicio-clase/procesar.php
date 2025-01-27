
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <?php 

        $name = $_POST["nombre"];
        $lastname = $_POST["apellido"];
        $email = $_POST["correo"];
        $motivo = $_POST["motivo"];
        $message = $_POST["message"];
    ?>

    <div class="container">
        <div class="row">
            <h1 class="my-2">Datos recibidos</h1>
            <table class="table table-bordered table-dark">
                <tr>
                    <th>Nombre</th>
                    <td><?= $name; ?></td>
                </tr>
                <tr>
                    <th>Apellido</th>
                    <td><?= $lastname; ?></td>
                </tr>
                <tr>
                    <th>Correo</th>
                    <td><?= $email; ?></td>
                </tr>
                <tr>
                    <th>Motivo</th>
                    <td><?= $motivo; ?></td>
                </tr>
                <tr>
                    <th>Mensaje</th>
                    <td><?= $message; ?></td>
                </tr>

            </table>
        </div>
    </div>
    
</body>
</html>