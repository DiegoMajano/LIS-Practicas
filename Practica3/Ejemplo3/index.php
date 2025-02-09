<!DOCTYPE html>
<html lang="es">

<head>
    <title>Listado de productos</title>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="../../css/output.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">'
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>'
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>'
    <script src="js/products.js"></script>
</head>

<body>
    <div class="container">
        <form name="frmproductos" action="products.php" method="POST">
            <fieldset class="form-group">
                <legend><span>Ingreso de productos:</span></legend>

                <div class="form-group">
                    <label for="producto">Nuevo producto:</label>
                    <input type="text" class="form-control" name="producto" id="producto" maxlength="60"
                        placeholder="(Ingrese un producto)" />
                    <input type="reset" name="agregar" id="agregar" value="Agregar" class="btn btn-primary" />
                </div>
                <div class="form-group">
                    <label for="ingresados">Productos ingresados:</label>
                    <select name="ingresados[]" class="form-control" id="ingresados" size="6"
                        multiple="multiple"></select>
                </div>

                <input type="submit" name="enviar" id="enviar" value="Enviar" class="btn btn-primary" />
            </fieldset>
    </div>
    </form>
    </div>
    <?php 
    
    include_once('../../includes/backButton.php');
    
    ?>
</body>

</html>