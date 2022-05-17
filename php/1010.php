<?php

$total = 0.0;

for ($i = 0; $i < 2; $i++) {
    [, $units, $value] = explode(' ', readline());
    $total += $units * $value;
}

echo 'VALOR A PAGAR: R$ ' . number_format($total, 2, '.', '') . "\n";
