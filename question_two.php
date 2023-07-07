<?php
$n = rand(1, pow(10, 5));
$p = rand(0, $n - 1);

$numberOfTickets = pow(10, 9);

$tickets = [];

for ($i = 0; $i < $n; $i++) {
    $tickets[] = rand(1, $numberOfTickets);
}

$totalOfP = $tickets[$p];

sort($tickets);

$total = 0;

for ($i = 0; $i < $n && $totalOfP > 0; $i++) {
    $count = min($totalOfP, $tickets[$i]);
    $total += $count * ($n - $i);
    $totalOfP -= $count;
}


echo $total . PHP_EOL;
