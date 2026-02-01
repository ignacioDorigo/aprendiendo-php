<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => "Notebook Lenovo",
        "precio" => 850000,
        "disponible" => true
    ],
    [
        "nombre" => "Mouse Logitech",
        "precio" => 15000,
        "disponible" => true
    ],
    [
        "nombre" => "Teclado Mecánico",
        "precio" => 45000,
        "disponible" => false
    ],
    [
        "nombre" => "Monitor 24\"",
        "precio" => 320000,
        "disponible" => true
    ]
];
foreach ($productos as $producto) { ?>
    <div>
        <p>Nombre: <?php echo $producto["nombre"] ?> </p>
        <p>Precio: $<?php echo $producto["precio"] ?> </p>
        <p>Disponible: <?php echo ($producto["disponible"] ? "Hay Stock" : "Sin Stock"); ?> </p>
    </div>
    <hr>
<?php
};


include 'includes/footer.php';
