<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de comparación y lógicos - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main>
        <div class="container mt-5">
            <h1 class="text-center mb-4">Operadores de Comparación y Lógicos en PHP</h1>
            <p class="lead text-center">Ejemplo de operadores utilizando PHP:</p>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Resultados de Comparaciones y Operadores Lógicos</h5>
                    <p class="card-text">
                        <?php
                        $x = 5;
                        $y = 10;
                        
                        // Operadores de comparación
                        echo "<strong>Operadores de Comparación:</strong><br> <br>";
                        echo "x = $x <br> ";
                        echo "y = $y <br> <br>";
                        echo "\$x <b>==</b> \$y: " . ($x == $y ? "Verdadero" : "Falso") . "<br>";
                        echo "\$x <b>!=</b> \$y: " . ($x != $y ? "Verdadero" : "Falso") . "<br>";
                        echo "\$x <b> > </b>\$y: " . ($x > $y ? "Verdadero" : "Falso") . "<br>";
                        echo "\$x <b> < </b>\$y: " . ($x < $y ? "Verdadero" : "Falso") . "<br>";
                        echo "\$x <b> >= </b> \$y: " . ($x >= $y ? "Verdadero" : "Falso") . "<br>";
                        echo "\$x <b> <= </b> \$y: " . ($x <= $y ? "Verdadero" : "Falso") . "<br>";
                        echo "\$x <b>===</b> \$y: " . ($x === $y ? "Verdadero" : "Falso") . "<br>";
                        echo "\$x <b>!==</b> \$y: " . ($x !== $y ? "Verdadero" : "Falso") . "<br><br>";

                        // Operadores lógicos
                        $a = true;
                        $b = false;
                        echo "<strong>Operadores Lógicos:</strong><br> <br>";
                        echo "a = ";
                        var_dump($a);
                        echo "<br>";
                        echo "b = ";
                        var_dump($b);
                        echo "<br><br>";
                        echo "\$a <b>&&</b> \$b: " . (($a && $b) ? "Verdadero" : "Falso") . "<br>";
                        echo "\$a <b>||</b> \$b: " . (($a || $b) ? "Verdadero" : "Falso") . "<br>";
                        echo "<b>!</b>\$a: " . ((!$a) ? "Verdadero" : "Falso") . "<br>";
                        echo "<b>!</b>\$b: " . ((!$b) ? "Verdadero" : "Falso") . "<br>";
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>