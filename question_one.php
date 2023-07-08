<?php

$k = rand(1, pow(10, 9));
$n = rand(1, pow(10, 5));

$costs = [];

for ($i = 1; $i <= $n; $i++)
    $costs[] = rand(1, $k);

sort($costs);

$maxPointArr = [];

foreach ($costs as $cost)
    if (array_sum($maxPointArr) <= $k)
        $maxPointArr[] = $cost;

if (array_sum($maxPointArr) > $k)
    unset($maxPointArr[count($maxPointArr) - 1]);

echo count($maxPointArr) . PHP_EOL;

