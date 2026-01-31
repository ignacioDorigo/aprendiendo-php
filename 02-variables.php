<?php include 'includes/header.php';


$nombre = "Juan";
echo "Hola $nombre";



// ------ CONSTANTES ------

// FORMA VIEJA,
define("PI", 3.1416);
define("USUARIO_DB", "root");

echo PI; // Resultado: 3.1416

// FORMA NUEVA, NO FUNCIONA EN IFS
const APP_NAME = "Mi Sistema";
const VERSION = 1.0;

echo APP_NAME;

include 'includes/footer.php';
