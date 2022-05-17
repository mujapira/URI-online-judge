<?php

$id = readline();
$fixed = readline();
$bonus = readline();

echo "TOTAL = R$ " . number_format($fixed + $bonus * 0.15, 2, '.', '') . "\n";
