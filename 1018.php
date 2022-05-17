<?php
$input = readline();

echo $input . "\n";

$bankNotes = [100, 50, 20, 10, 5, 2, 1];

foreach ($bankNotes as $bankNote) {
    $amount = floor($input / $bankNote);
    echo $amount . " nota(s) de R$ " . $bankNote . ",00" . "\n";
    $input = $input % $bankNote;
}

/* $input = readline();
$totalMoney = $input;
$hundreds = 0;
$fifties = 0;
$twenties = 0;
$tens = 0;
$fives = 0;
$twos = 0;
$ones = 0;

if ($input / 100 > 1) {
    $hundreds =  floor($totalMoney / 100);
    $totalMoney = (($totalMoney) - $hundreds * 100);
}

if ($totalMoney >= 50) {
    $fifties = floor($totalMoney / 50);
    $totalMoney = $totalMoney - ($fifties * 50);
}

if ($totalMoney >= 20) {
    $twenties = floor($totalMoney / 20);
    $totalMoney = $totalMoney - ($twenties * 20);
}

if ($totalMoney >= 10) {
    $tens = floor($totalMoney / 10);
    $totalMoney = $totalMoney - ($tens * 10);
}

if ($totalMoney >= 5) {
    $fives = floor($totalMoney / 5);
    $totalMoney = $totalMoney - ($fives * 5);
}

if ($totalMoney >= 2) {
    $twos = floor($totalMoney / 2);
    $totalMoney = $totalMoney - ($twos * 2);
}

if ($totalMoney >= 1) {
    $ones = floor($totalMoney / 1);
    $totalMoney = $totalMoney - ($ones * 1);
}

echo $input . "\n";
echo $hundreds . " nota(s) de R$ 100,00" . "\n";
echo $fifties . " nota(s) de R$ 50,00" . "\n";
echo $twenties . " nota(s) de R$ 20,00" . "\n";
echo $tens . " nota(s) de R$ 10,00" . "\n";
echo $fives . " nota(s) de R$ 5,00" . "\n";
echo $twos . " nota(s) de R$ 2,00" . "\n";
echo $ones . " nota(s) de R$ 1,00" . "\n"; */