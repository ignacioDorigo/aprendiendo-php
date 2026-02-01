<?php include 'includes/header.php';


// Empty
// Me permite saber si un array esta vacio o no (indexado y asociativo), tambien variables
// En variables toma como vacios el 0,false,"",undefined
$frutas = ["banana", "naranja", "peras"];
$verduras = [];
echo "<h1>El Resultado de empty en frutas es ".(empty($frutas)?"true":"false")."</h1>";

echo "<h1>El Resultado de empty en verduras es ".(empty($verduras)?"true":"false")."</h1>";


$nombre = "";
echo "<h1>El Resultado de empty en nombre es ".(empty($nombre)?"true":"false")."</h1>";

$apellido = "Charles";
echo "<h1>El Resultado de empty en apellido es ".(empty($apellido)?"true":"false")."</h1>";
echo "<hr></hr>";
$numero = 0;

echo "<h1>El Resultado de empty en apellido es ".(empty($apellido)?"true":"false")."</h1>";



// isSet
// Me permite verificar si existe una clave (en los arrays asociativis), y si su valor no es null
// Me permite verfiicar si existe un indece (en lso arrays indexados)
echo"<hr></hr>";
$persona = [
    "nombre" => null,
    "apellido" => "Argento"
];
echo "<h1>isSet en persona[nombre] = ".(isset($persona["nombre"])?"true":"false")."</h1>";
echo"<hr></hr>";
echo "<h1>isSet en persona[apellido] = ".(isset($persona["apellido"])?"true":"false")."</h1>";

include 'includes/footer.php';
