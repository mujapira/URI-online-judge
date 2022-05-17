<?php
[$x1, $y1] = explode(" ", readline());
[$x2, $y2] = explode(" ", readline());


$distance = sqrt(($x2 - $x1) ** 2 + ($y2 - $y1) ** 2);

echo number_format($distance, 4, ".", "") . "\n";