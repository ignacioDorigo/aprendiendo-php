<?php include 'includes/header.php';

// Strings
$nombre = "Ignacio";
$apellido = 'Dorigo';
echo "Hola $nombre $apellido";

// Ints
$edad = 25;
$anio = -2024;

// Floats
$precio = 99.99;
$pi = 3.14;

// booleanss
$activo = true;
$esAdmin = false;

// Arrays
$numeros = [1, 2, 3, 4];

// Array asociativo (objet)
$persona = [
    "nombre" => "Ignacio",
    "edad" => 25,
    "activo" => true
];
echo $persona["nombre"];

// Funciones que se puedeb pasar como parametro (callbacks)
function saludar()
{
    echo "Hola";
}

$funcion = "saludar";
$funcion();


// Null
$valor = null;

// Resource (para archivos externos, BD, SOCKETS)
$archivo = fopen("test.txt", "r");

// Clases de objetos
class Usuario
{
    public $nombre;
}

$u = new Usuario();
$u->nombre = "Ignacio";


include 'includes/footer.php';
