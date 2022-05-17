<?php

[$a, $b, $c] = explode(' ', readline());

$pi = 3.14159;

$triangle = ($a * $c) / 2;
$circle = $pi * $c * $c;
$trapezium = (($a + $b) * $c) / 2;
$square = $b * $b;
$rectangle = $a * $b;

echo "TRIANGULO: " . number_format($triangle, 3, ".", "") . "\n";
echo "CIRCULO: " . number_format($circle, 3, ".", "") . "\n";
echo "TRAPEZIO: " . number_format($trapezium, 3, ".", "") . "\n";
echo "QUADRADO: " . number_format($square, 3, ".", "") . "\n";
echo "RETANGULO: " . number_format($rectangle, 3, ".", "") . "\n";
