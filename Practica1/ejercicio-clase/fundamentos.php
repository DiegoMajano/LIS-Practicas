
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $name = "Diego";
        $lastname = "Majano";
        $age = 18;
        echo "Hola $name tiene $age <br>";
        echo 'Mi nombre es <b>' . $name . ' ' . $lastname . '</b><br> ';

        // coercion de tipos
        $num1 = 5;
        $num2 = "5";
        var_dump($num1 == $num2);
        var_dump($num1 === $num2);
        
        // casting explicito
        $num3 = (int)$num2; 
        var_dump($num1 === $num3);
        

    ?>
</body>
</html>

