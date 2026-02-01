<?php include 'includes/header.php';
// Observacion: Es muy similar a JS, con poquitos cambios en la sintaxis
// Funcion 1
function sumar($a, $b)
{
    return $a + $b;
}

// Funcion 2
$suma = function ($a, $b) {
    return $a + $b;
};

// Funciones 3, son funciones flecha
$doble = fn($n) => $n * 2;


// Mas ejemplos
function sumar22($a = 3, $b = 2)
{
    return $a + $b;
};

include 'includes/footer.php';
