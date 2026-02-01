<?php include 'includes/header.php';

// If como siempre
// Existe el elif como else if.
$nota = 7;

if ($nota >= 9) {
    echo "Excelente";
} elseif ($nota >= 6) {
    echo "Aprobado";
} else {
    echo "Desaprobado";
}

// Switch es igual que en JS
// condicinoa a evaluar, casos, todos con breaks, y default
$dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "Arranca la semana";
        break;

    case "viernes":
        echo "Se viene el finde";
        break;

    default:
        echo "Día normal";
}



include 'includes/footer.php';
