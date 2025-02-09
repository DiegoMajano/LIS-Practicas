<?php 

$ages = [10, 14, 25, 96, 96.7];

print_r($ages);

echo "<br/>" . $ages[0] . "<br/>"; // 

$ages[1] = 28;
array_push($ages,100);
$ages[10] = 10;

unset($ages[0]);

print_r($ages);

echo "<h3>Recorriendo arreglo:</h3>";
foreach($ages as $age){
    echo "<p>$age</p>";
}

echo "<br/>";

$count = count($ages);
echo "<p>El tamaño del arreglo es: $count </p>"; 

echo "<br/>";


// sorting an array

echo "<h4>Ordenando asc</h4>";
sort($ages); // sorting mutable way
print_r($ages);

echo "<br/>";
$ages = array_reverse($ages); // sorting inmutable way

echo "<h4>Ordenando desc</h4>";
print_r($ages);
echo "<br/>";


$personalData = [];

$personalData['nombre']="Diego";
$personalData['apellido']="Majano";
$personalData['estatura']=1.75;
$personalData['genero']="Masculino";

print_r($personalData);

echo "<h3>Imprimiendo arreglo asociativo</h3>";

foreach($personalData as $key=>$data){
    echo "<p>$key : $data</p>";
}

$person2 = [
    'nombre' => "Juan",
    'apellido' => "Perez",
    'estatura' => 1.80,
    'genero' => "Masculino"
];

echo "<br/>";

print_r($person2);

include_once('../../includes/backButton.php');

?>