<?php
$buyers = rand(1, pow(10, 5));
$position = rand(0, $buyers - 1);

$numberOfTickets = pow(10, 9);

$tickets = [];

for ($i = 0; $i < $buyers; $i++) {
    $tickets[] = rand(1, $numberOfTickets);
}

// $tickets = [5, 5, 2, 3];
// $position = 3;
$ticketToBuy = $tickets[$position];

$time = 0;

while ($ticketToBuy > 0) {
    if ($position == 0) {
        $ticketToBuy--;
    }

    $current = array_shift($tickets); 
    if ($current - 1 > 0) {
        array_push($tickets, $current - 1); 
    }

    $position--; 
    if ($position < 0) {
        $position = count($tickets) - 1; 
    }

    $time++; 
    
}

echo $time . PHP_EOL;
