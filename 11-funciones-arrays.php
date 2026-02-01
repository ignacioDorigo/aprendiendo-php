<?php include 'includes/header.php';


// In array
$carrito = ["tablet","play","television"];
var_dump(in_array("play",$carrito));

// Sort, asort, rsort, ksort, todos para ordenar distintas cosas

// Largo del array
count($carrito);

// Elimina el ultimo
array_pop($carrito);

// Agrega al final
array_push($carrito,"Kiwi");

// Tambien existe el merge
// array_merge(array1,array2);

// Devuelve clave o indice de un valor. (similar a un indexOff, pero tambien puede devolver un clave aparte de un indice)
// array_search(elementoABuscar,dondeBuscarlo);
array_search("banana", ["manzana", "banana", "pera"]);
// Devuelve ---> 1



include 'includes/footer.php';