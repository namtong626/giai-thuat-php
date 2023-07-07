<?php
$n = rand(1, pow(10, 5));
$p = rand(0, $n - 1);

$numberOfTickets = pow(10, 9);

$tickets = [];

for ($i = 0; $i < $n; $i++) {
    $tickets[] = rand(1, rand(1, $numberOfTickets));
}

$totalOfP = $tickets[$p];

$total = 0;

$j = $totalOfP - 1;
for ($i = 0; $i < $j; $i++) {
    $count = 0;
    if ($tickets[$p] == 0){
        $j--;
    }

//    foreach ($tickets as $key => $ticket) {
//        if ($tickets[$p] == 0) {
//            break;
//        }
//
//        if ($ticket > 0) {
//            $count++;
//        }
//
//        $tickets[$key]--;
//    }

    $total += $count;
}

return $total;
