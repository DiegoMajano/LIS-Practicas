<?php 

include_once 'validadores.php';

session_start();

if(!empty($_POST)){
    $errores=[];
    extract($_POST);
    $nombres = $_POST['nombres']??'';

    if(empty(trim($nombres))){
        array_push($errores,"se debe ingresar el nombre");
    }else if(!isText(trim($nombres))){
        array_push($errores,"Nombres no válidos");
    }

    $apellidos = $_POST['apellidos']??'';

    if(empty(trim($apellidos))){
        array_push($errores,"se debe ingresar el apellido");
    }else if(!isText(trim($apellidos))){
        array_push($errores,"Apellidos no válidos");
    }

    $carnet = $_POST['carnet']??'';

    if(empty(trim($carnet))){
        array_push($errores,"se debe ingresar el carnet");
    }else if(!isCarnet(trim($carnet))){
        array_push($errores,"carnet no válido");
    }

    $telefono = $_POST['telefono']??'';

    if(empty(trim($telefono))){
        array_push($errores,"se debe ingresar el telefono");
    }else if(!isPhone(trim($telefono))){
        array_push($errores,"telefono no válido");
    }

    $correo = $_POST['correo']??'';

    if(empty(trim($correo))){
        array_push($errores,"se debe ingresar el correo");
    }else if(!isEmail(trim($correo))){
        array_push($errores,"correo no válido");
    }
}

var_dump($errores);

if(empty($errores)){
    echo "<h1>Usuario registrado exitosamente";
    header('Location:index.php');
} else {
    $_SESSION['errores'] = $errores;
    $_SESSION['datos'] = [
        "nombres" => $nombres,
        "apellidos" => $apellidos,
        "correo" => $correo,
        "telefono" => $telefono,
        "carnet" => $carnet
    ];
    header('Location:index.php');
}


?>