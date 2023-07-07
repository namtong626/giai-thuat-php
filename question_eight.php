<?php

function max_heap(&$arr, $n, $i)
{
    $largest = $i;
    $left = 2 * $i + 1;
    $right = 2 * $i + 2;

    if ($left < $n && $arr[$left] > $arr[$largest])
        $largest = $left;

    if ($right < $n && $arr[$right] > $arr[$largest])
        $largest = $right;

    if ($largest != $i) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$largest];
        $arr[$largest] = $temp;

        max_heap($arr, $n, $largest);
    }
}

function buildHeap(&$arr, $n)
{
    $startIdx = floor($n / 2) - 1;

    for ($i = $startIdx; $i >= 0; $i--) {
        max_heap($arr, $n, $i);
    }
}

$arr = [10, 8, 5, 3, 2, 1, 7];
$n = count($arr);

echo "Before max_heap: ";
print_r($arr);

buildHeap($arr, $n);

echo "After max_heap: ";
print_r($arr);

// Anwser : 10, 8, 7, 3, 2, 1, 5
