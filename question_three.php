<?php
$stocksProfitSize = 5 * rand(1, pow(10, 5));

$target = 5 * rand(1, pow(10, 9));

$stocksProfits = [];

for ($i = 0; $i < $stocksProfitSize; $i++) {
    $stocksProfits[] = rand(0, $target);
}
// $stocksProfits = [6, 6, 3, 9, 3, 5, 1];
// $target = 12;

sort($stocksProfits);

$unique = [];

$j = count($stocksProfits) - 1;

for ($i = 0; $i < $j; $i++) {
    if ($stocksProfits[$i] + $stocksProfits[$j] > $target)
        $j--;
    else if ($stocksProfits[$i] + $stocksProfits[$j] == $target) {
        $pair = [$stocksProfits[$i], $stocksProfits[$j]];
        $serialized = serialize($pair);

        if (!isset($unique[$serialized]))
            $unique[$serialized] = $pair;
    }
}

echo $target . PHP_EOL;

print_r(array_values($unique));
