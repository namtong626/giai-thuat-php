<?php
$stocksProfitSize = 5 * rand(1, pow(10, 5));
$stocksProfits = [];
$target = 5 * rand(1, pow(10, 9));
$unique = [];

for ($i = 0; $i < $stocksProfitSize; $i++) {
    $stocksProfits[] = rand(0, $target);
}

sort($stocksProfits);

$j = count($stocksProfits) - 1;
for ($i = 0; $i < $j; $i++) {
    if ($stocksProfits[$i] + $stocksProfits[$j] > $target) {
        $j--;
    } else if($stocksProfits[$i] + $stocksProfits[$j] == $target) {
        $pair = [$stocksProfits[$i], $stocksProfits[$j]];
        $serialized = serialize($pair);
        if (!isset($unique[$serialized])) {
            $unique[$serialized] = $pair;
        }
    }
}

$unique = array_values($unique);

return $unique;
