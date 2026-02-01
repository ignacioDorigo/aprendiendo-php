<?php include 'includes/header.php';


// Loops en PHP


// For each en asociativos
$frutas = ["manzana", "banana", "pera"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}


// For each en indexados
$persona = ["nombre" => "Ana", "edad" => 25];

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}


// For con indices
for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . "<br>";
}



// While
$i = 0;

while ($i < 3) {
    echo $i;
    $i++;
}


// Do While
$i = 5;

do {
    echo $i;
    $i++;
} while ($i < 3);

include 'includes/footer.php';
