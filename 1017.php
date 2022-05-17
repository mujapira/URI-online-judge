<?php
$a = readline();
$b = readline();

$distance = $a * $b;
$liters = $distance / 12;

echo number_format($liters, 3, ".", "") . "\n";
