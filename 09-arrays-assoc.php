<?php include 'includes/header.php';


// Es similar a au n objeto literal en SJ;

$persona = [
    "nombre" => "Ana",
    "edad" => 25,
    "ciudad" => "Buenos Aires"
];

// Acceder a un valor, con su clave
echo $persona["nombre"]; // Ana

$claves = array_keys($persona);
print_r($claves); // ["nombre","edad","ciudad"]

$valores = array_values($persona);
print_r($valores); // ["Ana", 25, "BA"]


// Verifica si un objeto tiene ese valor (no key) 
if (in_array("Ana", $persona)) {
    echo "Existe!";
}

// Verifica si un objeto tiene una key
if (array_key_exists("edad", $persona)) {
    echo "La clave edad existe";
}

// Elimina un elemento por su clave
unset($persona["ciudad"]);
print_r($persona); // ["nombre"=>"Ana","edad"=>25]

// Recorre un array asociativo
foreach ($persona as $clave => $valor) {
    echo "$clave => $valor\n";
}


include 'includes/footer.php';
