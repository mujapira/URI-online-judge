<?php

$firstInput = readline();
$secondInput = readline();
$thirdInput = readline();

$weightedAverage = (($firstInput * 2) + ($secondInput * 3) + ($thirdInput * 5)) / 10;

echo "MEDIA =  " . number_format($weightedAverage, 1). "\n";