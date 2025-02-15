<?php 

// funciones


function calcularDistanciaEntrePuntos($x0, $y0, $x1=0, $y1=0){
    return round(sqrt(pow($x1 - $x0, 2) + pow($y1 - $y0,2)),2);
}

function calcularMediaVarianza(...$numeros){
    $n = count($numeros);
    
    if($n==0)
        return 0;

    $sum = array_sum($numeros);

    $promedio = $sum/$n;
    $sumNumerador = 0;

    foreach($numeros as $num){
        $sumNumerador += pow($num-$promedio, 2);
    }

    $varianza = $sumNumerador/$n;

    return [
        "promedio" => $promedio,
        "varianza" => $varianza
    ];


}

function calcularFactorial($n){
    if($n==1)
        return 1;

    else{
        return $n * calcularFactorial($n-1);
    }
}



echo "la distancia del punto (3,5) al origen es: " . calcularDistanciaEntrePuntos(3,5);


echo "<br/> La distancia del punto (3,5) al (1,1) es: " . calcularDistanciaEntrePuntos(3,5,1,1);
$resultado = calcularMediaVarianza(10,12,14,16,18);
echo "<br/> el promedio es: " . $resultado["promedio"] . " y la varianza es: " . $resultado["varianza"];
echo "<br/> el factorial de 6 es: " . calcularFactorial(6);

include_once('../../includes/backButton.php')
?>