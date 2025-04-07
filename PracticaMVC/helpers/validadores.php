<?php 

function isText($var){
    return preg_match('/^[a-zA-Z áéíóúÁÉÍÓÚ ñ . ,]+$/', $var);
}

function isCodigoEditorial($var){
    return preg_match('/^EDI[0-9]{3}$/', $var);
}
function isCodigoAutor($var){
    return preg_match('/^AUT[0-9]{3}$/', $var);
}
function isCodigoLibro($var){
    return preg_match('/^LIB[0-9]{3}$/', $var);
}
function isCodigoGenero($var){
    return preg_match('/^[0-9]$/', $var);
}

function isPhone($var){
    return preg_match('/^[267][0-9]{3}-[0-9]{4}$/', $var);
}

function isEmail($var){
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

?>