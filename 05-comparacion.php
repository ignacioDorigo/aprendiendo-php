<?php include 'includes/header.php';

$x = 5;
$y = '5';

echo "<h1>OPERADORES DE COMPARACION</h1>";
echo "<p>x = " . $x."</p>";
echo "<p>y = " . "'$y'"."</p>";
echo "<p>x == y: " . ($x == $y ? 'true' : 'false') . "</p>";
echo "<p>x === y: " . ($x === $y ? 'true' : 'false') . "</p>";
echo "<p>x != y: " . ($x != $y ? 'true' : 'false') . "</p>";
echo "<p>x < y: " . ($x < $y ? 'true' : 'false') . "</p>";
echo "<p>x <= y: " . ($x <= $y ? 'true' : 'false') . "</p>";


include 'includes/footer.php';
