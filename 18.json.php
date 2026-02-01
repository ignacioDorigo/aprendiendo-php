<?php include 'includes/header.php';

// JSON ENCODE --> convierte PHP a JSON/STRING

// JSON DECODE --> convierte JSON/STRING a PHP


// --- EJEMPLO DE ENCODE/CODIFICAR ---
// enviar $json a una API
$usuario = [
    "nombre" => "Ignacio",
    "edad" => 25
];

$json = json_encode($usuario,JSON_UNESCAPED_UNICODE);



// --- EJEMPLO DE DECODE/DECODIFICAR ---

// Recibir daos de una API
$respuesta = file_get_contents("https://api.ejemplo.com/user/1");
$datos = json_decode($respuesta, true);
echo $datos["nombre"];

// Recibir daos de una API 
// yo recibiria esto
// {"tema":"oscuro","idioma":"es"} 

$config = json_decode($fila["config"], true);
echo $config["tema"];






include 'includes/footer.php';