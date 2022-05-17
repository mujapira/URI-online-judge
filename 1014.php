<?php
$distance = readline();
$fuel = readline();

echo number_format($distance / $fuel, 3, ".", "") . " km/l\n";