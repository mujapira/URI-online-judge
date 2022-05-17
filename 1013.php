<?php

$input = explode(' ', readline());
$a = (int)$input[0];
$b = (int)$input[1];
$c = (int)$input[2];

$greaterBetweenAB = ($a + $b + abs($a - $b)) / 2;

$greater = ($c + $greaterBetweenAB + abs($c - $greaterBetweenAB)) / 2;

echo "{$greater} eh o maior\n";