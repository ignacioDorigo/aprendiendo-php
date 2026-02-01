<?php

declare(strict_types=1);


include 'includes/header.php';


// Los types se usan para indicar
// --> El tipo de retorno de una funcion (void, string, int, etc)
// --> El tipo de dato de un parametro (string, int, bool, etc)
// --> Hay que activar el modo stricto 
// --> declare(strict_types=1)


function dividir(int $a, int $b): float
{
    return $a / $b;
};
// Esto da error, y me lo marca el navegador
// var_dump(dividir("3",4));

// Esto no da error,xq ambos parametros son INT y devuelven un float
var_dump(dividir(3,4));


include 'includes/footer.php';
