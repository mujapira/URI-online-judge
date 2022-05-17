<?php

$id = readline();
$workedHoursMonth = readline();
$moneyPerHour = readline();

echo "NUMBER = " . $id . "\n";
echo "SALARY = U$ " . number_format($workedHoursMonth * $moneyPerHour, 2, '.', '') . "\n";
