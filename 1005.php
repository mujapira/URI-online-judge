<?php

$firstInput = readline();
$secondInput = readline();

$media = ($firstInput * 3.5 + $secondInput * 7.5) / 11;

echo 'MEDIA = ' . number_format($media, 5) . "\n";