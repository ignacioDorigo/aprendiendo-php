<?php include 'includes/header.php';

$a = 10;
$b = 3;

echo "<h1>Aritméticos</h1>";
echo "<p>Suma  ($a + $b) = " . ($a + $b) . "</p>";
echo "<p>Resta ($a - $b) = " . ($a - $b) . "</p>";
echo "<p>Multiplicación ($a * $b) = " . ($a * $b) . "</p>";
echo "<p>División ($a / $b) = " . ($a / $b) . "</p>";
echo "<p>Módulo ($a % $b) = " . ($a % $b) . "</p>";
echo "<p>Potencia ($a ** $b) = " . ($a ** $b) . "</p>";

$c = 5;
$c += 2;
echo "<p>c += 2: $c</p>";
$c *= 3;
echo "<p>c *= 3: $c</p>";

$x = 5;
$y = '5';

echo "<p>x == y: " . ($x == $y ? 'true' : 'false') . "</p>";
echo "<p>x === y: " . ($x === $y ? 'true' : 'false') . "</p>";
echo "<p>x != y: " . ($x != $y ? 'true' : 'false') . "</p>";
echo "<p>x < y: " . ($x < $y ? 'true' : 'false') . "</p>";
echo "<p>x <= y: " . ($x <= $y ? 'true' : 'false') . "</p>";

$true = true;
$false = false;

echo "<p>true && false: " . ($true && $false ? 'true' : 'false') . "</p>";
echo "<p>true || false: " . ($true || $false ? 'true' : 'false') . "</p>";
echo "<p>!true: " . (!$true ? 'true' : 'false') . "</p>";
echo "<p>true xor false: " . ($true xor $false ? 'true' : 'false') . "</p>";

$num = 5;
echo "<p>Pre-incremento ++num: " . (++$num) . "</p>";
echo "<p>Post-incremento num++: " . ($num++) . "</p>";
echo "<p>Ahora num: $num</p>";
echo "<p>Pre-decremento --num: " . (--$num) . "</p>";
echo "<p>Post-decremento num--: " . ($num--) . "</p>";
echo "<p>Ahora num: $num</p>";

$str1 = "Hola";
$str2 = "Mundo";

echo "<p>" . $str1 . " " . $str2 . "</p>";
$str1 .= " PHP";
echo "<p>Concatenar y asignar: $str1</p>";

$a = 3;
$b = 5;

echo "<p>3 <=> 5: " . ($a <=> $b) . "</p>";
echo "<p>5 <=> 5: " . (5 <=> 5) . "</p>";
echo "<p>7 <=> 5: " . (7 <=> 5) . "</p>";

include 'includes/footer.php';
