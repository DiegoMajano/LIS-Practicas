<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Venta de autos</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Autos disponibles</h1>
        </header>

        <?php
        spl_autoload_register(function ($class) {
            if (is_file("class/{$class}.class.php")) {
                include_once("class/{$class}.class.php");
            } else {
                die("class/{$class}.class.php No existe en el proyecto");
            }
        });

        // Creando los objetos para cada tipo de auto
        $movil = [
            new auto("Peugeot", "307", "Gris", "img/peugeot.jpg"),
            new auto("Renault", "Clio", "Rojo", "img/renaultclio.jpg"),
            new auto("BMW", "X3", "Negro", "img/bmwserie6.jpg"),
            new auto("Toyota", "Avalon", "Blanco", "img/toyota.jpg"),
            new auto() // Auto con valores por defecto
        ];

        // Obtener la marca seleccionada si existe
        $marcaSeleccionada = $_POST['marca'] ?? '';
        ?>

        <!-- Formulario para seleccionar la marca -->
        <form method="POST" class="mb-4">
            <label for="marca">Selecciona una marca:</label>
            <select name="marca" id="marca" class="form-control" onchange="this.form.submit()">
                <option value="">-- Todas --</option>
                <?php
                $marcas = array_unique(array_map(fn($auto) => $auto->getMarca(), $movil));
                foreach ($marcas as $marca) {
                    echo "<option value='$marca'" . ($marcaSeleccionada == $marca ? " selected" : "") . ">$marca</option>";
                }
                ?>
            </select>
        </form>

        <div class="row">
            <?php
            foreach ($movil as $auto) {
                if ($marcaSeleccionada === '' || $auto->getMarca() === $marcaSeleccionada) {
                    $auto->mostrar();
                }
            }
            ?>
        </div>

        <?php include_once '../../includes/backButton.php'; ?>
    </div>
</body>
</html>
