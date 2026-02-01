<?php include 'includes/header.php';

// Son los tipicos arrays indexados
$numeros = [1, 2, 3, 4, 5];
// echo $numeros[0];



// CREAR ARRAY -> Forma corta
$frutas = ["Manzana", "Banana", "Naranja"];

// CREAR ARRAY -> Forma clásica
$frutas = array("Manzana", "Banana", "Naranja");

// LEN de aray
// echo count($frutas);


foreach ($frutas as $fruta) {
    echo "<p>" . $fruta . "</p>";
}




array_push($frutas, "Pera");
array_pop($frutas);
array_shift($frutas);
array_unshift($frutas, "Kiwi");
// Verifica si un elemento existe en un array
if (in_array("Banana", $frutas)) {
    echo "Existe!";
}

include 'includes/footer.php';
